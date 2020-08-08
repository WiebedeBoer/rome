<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    //table
    protected $table = 'cultures';
    protected $primaryKey = 'culture_id';

    //regions
    public function realms()
    {
        return $this->hasMany('App\Realm','realm_id');
    }
}
