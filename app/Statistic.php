<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    //table
    protected $table = 'statistics';
    protected $primaryKey = 'stat_id';
	
	//fk
    public function persons()
    {
        return $this->belongsTo('App\Person','person');
    } 
}
