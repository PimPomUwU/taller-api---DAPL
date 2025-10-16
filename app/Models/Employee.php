<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['nif', 'tlfno', 'num_hijos'];

    protected $allowedIncluded = ['center'];

    public function center()
    {
        return $this->hasOne(Center::class);
    }

}
