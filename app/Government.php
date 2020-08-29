<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    //table
    protected $table = 'governments';
    protected $primaryKey = 'government_id';

    //realms
    public function realms()
    {
        return $this->hasMany('App\Realm','realm_id');
    }
}
