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

    public function religions()
    {
        return $this->belongsTo('App\Religion','culture_religion');
    } 

    //realms
    public function realms()
    {
        return $this->hasMany('App\Realm','realm_id');
    }
}
