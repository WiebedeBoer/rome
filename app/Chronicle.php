<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chronicle extends Model
{
    //table
    protected $table = 'chronicles';
    protected $primaryKey = 'chronicle_id';

	//fk
    public function persons()
    {
        return $this->belongsTo('App\Person','person');
    } 

    public function towns()
    {
        return $this->belongsTo('App\Town','town');
    } 

    public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    } 

    public function belligerents()
    {
        return $this->belongsTo('App\Realm','realm');
    } 

}
