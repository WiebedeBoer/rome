<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    //table
    protected $table = 'roads';
    protected $primaryKey = 'road_id';

    //milestones
    public function milestones()
    {
        return $this->hasMany('App\Milestone','milestone_id');
    } 
}
