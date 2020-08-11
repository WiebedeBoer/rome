<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seaconnection extends Model
{
    //table
    protected $table = 'seaconnections';
    protected $primaryKey = 'connection_id';
	
	//fk
    public function toes()
    {
        return $this->belongsTo('App\Region','to');
    } 
	
    public function froms()
    {
        return $this->belongsTo('App\Region','from');
    } 
}
