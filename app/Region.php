<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //table
    protected $table = 'regions';
    protected $primaryKey = 'region_id';

    //towns
    public function towns()
    {
        return $this->hasMany('App\Town','town_id');
    } 
}
