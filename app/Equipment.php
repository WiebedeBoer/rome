<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //table
    protected $table = 'equipment';
    protected $primaryKey = 'equipment_id';

    //fk
    public function equipmenttypes()
    {
        return $this->belongsTo('App\Equipmenttype','equipmenttype');
    } 

    public function persons()
    {
        return $this->belongsTo('App\Person','persons');
    } 
}
