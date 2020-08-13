<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipmenttype extends Model
{
    //table
    protected $table = 'equipmenttypes';
    protected $primaryKey = 'equipment_id';

    //equipment
    public function equipment()
    {
        return $this->hasMany('App\Equipment','equipment_id');
    }

}
