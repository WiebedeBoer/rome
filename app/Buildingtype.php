<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buildingtype extends Model
{
    //table
    protected $table = 'buildingtypes';
    protected $primaryKey = 'building_id';

    //buildings
    public function buildings()
    {
        return $this->hasMany('App\Building','building_id');
    }

    //construction types
    public function constructions()
    {
        return $this->hasMany('App\Constructiontype','construction_id');
    }
}
