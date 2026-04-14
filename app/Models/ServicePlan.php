<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
  //use App\Models\ServicePlanFeature;
class ServicePlan extends Model
{
  
    public function features()
    {
        return $this->hasMany(ServicePlanFeature::class, 'plan_id');
    }
}
