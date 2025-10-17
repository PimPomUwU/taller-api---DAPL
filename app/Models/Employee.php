<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    //
    protected $fillable = ['nif', 'tlfno', 'num_hijos'];

    protected $allowedIncluded = ['center'];

    public function center()
    {
        return $this->hasOne(Center::class, 'employee_manager_id', 'id');
    }

}
