<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goodtype extends Model
{
    //table
    protected $table = 'goodtypes';
    protected $primaryKey = 'good_id';

    //caravans
    public function caravans()
    {
        return $this->hasMany('App\Caravan','caravan_id');
    }

    //trades
    public function trades()
    {
        return $this->hasMany('App\Trade','trade_id');
    }

    //cargo
    public function cargos()
    {
        return $this->hasMany('App\Cargo','cargo_id');
    }

    //sales
    public function sales()
    {
        return $this->hasMany('App\Sale','sale_id');
    }

}
