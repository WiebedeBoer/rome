<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Architecture extends Model
{
    //table
    protected $table = 'architectures';
    protected $primaryKey = 'architecture_id';

    //regions
    public function regions()
    {
        return $this->hasMany('App\Region','region_id');
    }
}
