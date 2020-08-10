<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    //table
    protected $table = 'religions';
    protected $primaryKey = 'religion_id';

    //regions
    public function cultures()
    {
        return $this->hasMany('App\Culture','culture_id');
    }
}
