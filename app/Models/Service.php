<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id_service';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'id_service');
    }
}