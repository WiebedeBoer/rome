<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //threads tabel
    protected $table = 'threads';
    protected $primaryKey = 'thread_id';
	
    public function creators()
    {
        return $this->belongsTo('App\User','creator');
    } 	

    public function regions()
    {
        return $this->belongsTo('App\Region','region');
    } 
	
    public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    } 
	
    public function belligerents()
    {
        return $this->belongsTo('App\Realm','belligerent');
    } 

	//posts
	public function posts()
    {
        return $this->hasMany('App\Post','thread');
    }	
}
