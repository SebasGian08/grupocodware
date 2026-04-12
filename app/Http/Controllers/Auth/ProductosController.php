<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;
use App\ProductoMarca;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::with('marca')
            ->whereNull('deleted_at')
            ->get();

        return view('auth.productos.index', compact('productos'));
    }

    public function list_all()
    {
        $productos = Producto::whereNull('deleted_at')->get();

        $data = $productos->map(function($producto){
            return [
                'id_producto' => $producto->id_producto,
                'descripcion' => $producto->descripcion,
                'precio_venta' => $producto->precio_venta,
                'stock' => $producto->stock,
                'estado' => $producto->estado,
                'acciones' => '
                    <button class="btn btn-sm btn-primary btn-editar" data-id="'.$producto->id.'">Editar</button>
                    <button class="btn btn-sm btn-danger btn-eliminar" data-id="'.$producto->id.'">Eliminar</button>'
            ];
        });

        return response()->json(['data' => $data]);
    }

    public function store(Request $request)
    {
        $status = false;

        $validator = Validator::make($request->all(), [
            'id_producto' => 'nullable|integer',
            'id_producto_marca' => 'required|integer|exists:productos_marca,id_producto_marca',
            'codigo_producto' => 'required|string|max:100',
            'descripcion' => 'required|string|max:255',
            'precio_compra' => 'required|numeric|min:0',
            'precio_venta' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'estado' => 'required|in:1,2'
        ]);

        DB::beginTransaction();

        try {

            $esNuevo = !$request->id_producto || $request->id_producto == 0;

            $producto = $esNuevo
                ? new Producto()
                : Producto::findOrFail($request->id_producto);

            $stockAnterior = $esNuevo ? 0 : $producto->stock;

            $producto->id_producto_marca = $request->id_producto_marca;
            $producto->codigo_producto = $request->codigo_producto;
            $producto->descripcion = $request->descripcion;
            $producto->precio_compra = $request->precio_compra;
            $producto->precio_venta = $request->precio_venta;
            $producto->stock = $request->stock;
            $producto->estado = $request->estado;

            if ($request->hasFile('imagen')) {
                if ($producto->imagen && file_exists(public_path($producto->imagen))) {
                    unlink(public_path($producto->imagen));
                }

                $file = $request->file('imagen');
                $fileName = uniqid('PROD_') . '.' . $file->getClientOriginalExtension();
                $filePath = 'uploads/productos/';
                $file->move(public_path($filePath), $fileName);

                $producto->imagen = $filePath . $fileName;
            }

            $producto->save();

            $stock = $request->stock ?? 0;

            if ($esNuevo) {
                DB::table('kardex')->insert([
                    'id_producto'       => $producto->id_producto,
                    'fecha_movimiento' => now(),
                    'id_tipo_movimiento'=> 1,
                    'motivo'           => 'INGRESO INICIAL',
                    'id_origen'        => null,
                    'cantidad'         => $stock,
                    'stock_anterior'   => 0,
                    'stock_nuevo'      => $stock,
                    'costo_unitario'   => $request->precio_compra,
                    'costo_total'      => $stock * $request->precio_compra
                ]);
            }

            DB::commit();

            return response()->json([
                'Success' => true,
                'Errors' => []
            ]);

        } catch (\Exception $e) {

            DB::rollBack();

            return response()->json([
                'Success' => false,
                'Errors' => [$e->getMessage()]
            ]);
        }
    }



    public function delete(Request $request)
    {
        $producto = Producto::find($request->id);
        if($producto){
            $producto->delete();
            return response()->json(['success'=>true]);
        }
        return response()->json(['success'=>false]);
    }


    public function partialView($id = null)
    {
        $Producto = $id ? Producto::find($id) : null;
        $Marcas = ProductoMarca::whereNull('deleted_at')->get();

        return view('auth.productos._Mantenimiento', compact('Producto', 'Marcas'));
    }
}