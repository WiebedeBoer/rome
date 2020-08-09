<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    //table
    protected $table = 'cultures';
    protected $primaryKey = 'culture_id';

	//fk
    public function architectures()
    {
        return $this->belongsTo('App\Architecture','culture_construction');
    } 

    //regions
    public function realms()
    {
        return $this->hasMany('App\Realm','realm_id');
    }
}
