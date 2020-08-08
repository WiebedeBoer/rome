<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governor extends Model
{
    //table
    protected $table = 'mayors';
    protected $primaryKey = 'mayor_id';
	
	//fk
    public function persons()
    {
        return $this->belongsTo('App\Person','person');
    } 

    public function capitals()
    {
        return $this->belongsTo('App\Town','capitals');
    }

    public function prefectures()
    {
        return $this->belongsTo('App\Prefecture','prefectures');
    }
}
