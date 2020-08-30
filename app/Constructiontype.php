<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constructiontype extends Model
{
    //table
    protected $table = 'constructiontypes';
    protected $primaryKey = 'construction_id';

    public function buildings()
    {
        return $this->belongsTo('App\Building','building');
    }  
}
