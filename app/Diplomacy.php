<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diplomacy extends Model
{
    //table
    protected $table = 'diplomacies';
    protected $primaryKey = 'diplomacy_id';

	//fk
    public function toes()
    {
        return $this->belongsTo('App\Realm','to');
    } 

    public function froms()
    {
        return $this->belongsTo('App\Realm','from');
    } 
}
