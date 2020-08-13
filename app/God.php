<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class God extends Model
{
    //table
    protected $table = 'gods';
    protected $primaryKey = 'god_id';

    //religions
    public function religions()
    {
        return $this->hasMany('App\Religion','religion_id');
    } 

}
