<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\ServiceBenefit;
use App\Models\ServicePlan;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with(['benefits', 'plans.features'])
            ->orderBy('id_service', 'desc')
            ->get();

        return view('admin.services.index', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'planes.*.nombre' => 'required_with:planes|string',
            'planes.*.precio' => 'nullable|numeric',
        ]);

        try {
            DB::beginTransaction();

            $service = Service::create([
                'nombre' => $request->nombre,
                'slug' => Str::slug($request->nombre),
                'descripcion' => $request->descripcion,
                'descripcion_portada' => $request->descripcion_portada,
                'descripcion_breve_portada' => $request->descripcion_breve_portada,
                'content' => $request->content,
                'estado' => 1,
            ]);

            if ($request->has('beneficios')) {
                foreach ($request->beneficios as $beneficio) {
                    if (!empty($beneficio['titulo'])) {
                        $service->benefits()->create([
                            'titulo'      => $beneficio['titulo'],
                            'descripcion' => $beneficio['descripcion'],
                            'icono'       => $beneficio['icono'] ?? null,
                        ]);
                    }
                }
            }

            if ($request->has('planes')) {
                foreach ($request->planes as $plan) {
                    if (!empty($plan['nombre'])) {
                        $newPlan = $service->plans()->create([
                            'nombre'      => $plan['nombre'],
                            'precio'      => $plan['precio'] ?? 0,
                            'descripcion' => $plan['descripcion'],
                            'destacado'   => isset($plan['destacado']) ? 1 : 0,
                        ]);

                        if (isset($plan['features']) && is_array($plan['features'])) {
                            foreach ($plan['features'] as $featureContent) {
                                if (!empty($featureContent)) {
                                    $newPlan->features()->create([
                                        'descripcion' => $featureContent
                                    ]);
                                }
                            }
                        }
                    }
                }
            }

            DB::commit();
            return redirect()->route('admin.servicios.index')
                            ->with('success', 'Servicio y planes creados correctamente.');

        } catch (\Exception $e) {
            DB::rollBack();
            // Opcional: Log::error($e->getMessage());
            return back()->withInput()->with('error', 'Ocurrió un error al guardar: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'planes.*.nombre' => 'nullable|string',
            'planes.*.precio' => 'nullable|numeric',
        ]);

        try {
            DB::beginTransaction();

            $service = Service::findOrFail($id);
            $service->update([
                'nombre' => $request->nombre,
                'slug' => Str::slug($request->nombre),
                'descripcion' => $request->descripcion,
                'descripcion_portada' => $request->descripcion_portada,
                'descripcion_breve_portada' => $request->descripcion_breve_portada,
                'content' => $request->content,
                // 'estado' => 1, // El estado normalmente no se cambia en update a menos que tengas un switch
            ]);
            $service->benefits()->delete(); 
            if ($request->has('beneficios')) {
                foreach ($request->beneficios as $beneficio) {
                    if (!empty($beneficio['titulo'])) {
                        $service->benefits()->create([
                            'titulo'      => $beneficio['titulo'],
                            'descripcion' => $beneficio['descripcion'],
                            'icono'       => $beneficio['icono'] ?? null,
                        ]);
                    }
                }
            }

            // 4. Actualizar PLANES (Eliminar y Volver a Crear)
            // Nota: Al eliminar el plan, si usas cascade en BD, se borrarán sus features automáticamente.
            // Si no, es mejor hacer $service->plans()->each(function($p){ $p->features()->delete(); });
            $service->plans()->delete(); 

            if ($request->has('planes')) {
                foreach ($request->planes as $plan) {
                    if (!empty($plan['nombre'])) {
                        $newPlan = $service->plans()->create([
                            'nombre'      => $plan['nombre'],
                            'precio'      => $plan['precio'] ?? 0,
                            'descripcion' => $plan['descripcion'],
                            'destacado'   => isset($plan['destacado']) ? 1 : 0,
                        ]);

                        // Guardar Características del Plan
                        if (isset($plan['features']) && is_array($plan['features'])) {
                            foreach ($plan['features'] as $featureContent) {
                                if (!empty($featureContent)) {
                                    $newPlan->features()->create([
                                        'descripcion' => $featureContent
                                    ]);
                                }
                            }
                        }
                    }
                }
            }

            DB::commit();
            return redirect()->route('admin.servicios.index')
                            ->with('success', 'Servicio actualizado correctamente.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Ocurrió un error al actualizar: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return back()->with('delete', 'Servicio eliminado');
    }
}