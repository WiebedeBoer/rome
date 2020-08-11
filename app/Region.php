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

    //provinces
    public function provinces()
    {
        return $this->hasMany('App\Province','province_id');
    } 

    //land connections
    public function toes()
    {
        return $this->hasMany('App\Landconnection','connection_id');
    } 

    public function froms()
    {
        return $this->hasMany('App\Landconnection','connection_id');
    } 
}
