<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    //table
    protected $table = 'spouses';
    protected $primaryKey = 'spouse_id';
	
	//fk
    public function husbands()
    {
        return $this->belongsTo('App\Person','husband');
    } 

    public function wives()
    {
        return $this->belongsTo('App\Person','wife');
    } 
}
