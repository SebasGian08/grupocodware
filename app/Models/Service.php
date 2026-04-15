<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id_service';
    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'content',
        'portada',
        'imagen_referencial',
        'estado'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'id_service');
    }

    public function benefits()
    {
        return $this->hasMany(ServiceBenefit::class, 'service_id', 'id_service');
    }

    public function plans()
    {
        return $this->hasMany(ServicePlan::class, 'service_id', 'id_service');
    }
}