<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //
    protected $fillable = ['nombre', 'direccion', 'poblacion', 'employee_manager_id'];

    protected $allowedIncluded = ['employee_manager'];

    public function employee_manager()
    {
        return $this->belongsTo(Employee::class);
    }

}
