<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class God extends Model
{
    //table
    protected $table = 'gods';
    protected $primaryKey = 'god_id';

    //religions
    public function religions()
    {
        return $this->hasMany('App\Religion','religion_id');
    } 

    //mythology
    public function mythologies()
    {
        return $this->hasMany('App\Mythology','mythology_id');
    }

    //buildings
    public function buildings()
    {
        return $this->hasMany('App\Building','building_id');
    }

}
