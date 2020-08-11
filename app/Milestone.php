<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    //table
    protected $table = 'milestones';
    protected $primaryKey = 'milestone_id';
	
	//fk
    public function towns()
    {
        return $this->belongsTo('App\Town','town');
    }

    public function roads()
    {
        return $this->belongsTo('App\Road','road');
    }
}
