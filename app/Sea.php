<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sea extends Model
{
    //table
    protected $table = 'seas';
    protected $primaryKey = 'sea_id';

    //towns
    public function towns()
    {
        return $this->hasMany('App\Town','town_id');
    } 

    //sea connections
    public function toes()
    {
        return $this->hasMany('App\Seaconnection','connection_id');
    } 

    public function froms()
    {
        return $this->hasMany('App\Seaconnection','connection_id');
    } 
}
