<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //table
    protected $table = 'provinces';
    protected $primaryKey = 'province_id';
	
	//fk
    public function capitals()
    {
        return $this->belongsTo('App\Town','capital');
    } 
	
    public function governors()
    {
        return $this->belongsTo('App\Person','governor');
    } 
}
