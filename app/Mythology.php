<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mythology extends Model
{
    //table
    protected $table = 'mythologies';
    protected $primaryKey = 'mythology_id';
	
	//fk
    public function gods()
    {
        return $this->belongsTo('App\God','god');
    }

    public function religions()
    {
        return $this->belongsTo('App\Religion','religion');
    }
}
