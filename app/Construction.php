<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    //table
    protected $table = 'constructions';
    protected $primaryKey = 'construction_id';
	
    //fk
    public function villas()
    {
        return $this->belongsTo('App\Villa','villa');
    }   

    public function cities()
    {
        return $this->belongsTo('App\Town','city');
    }  

    public function types()
    {
        return $this->belongsTo('App\Constructiontype','construction');
    }  
}
