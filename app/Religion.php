<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    //table
    protected $table = 'religions';
    protected $primaryKey = 'religion_id';

	//fk
    public function states()
    {
        return $this->belongsTo('App\God','state');
    } 

    public function agriculture()
    {
        return $this->belongsTo('App\God','agriculture');
    } 

    public function war()
    {
        return $this->belongsTo('App\God','war');
    } 

    public function love()
    {
        return $this->belongsTo('App\God','love');
    } 

    public function commerce()
    {
        return $this->belongsTo('App\God','commerce');
    } 

    public function arts()
    {
        return $this->belongsTo('App\God','arts');
    } 

    public function seas()
    {
        return $this->belongsTo('App\God','sea');
    } 

    public function healing()
    {
        return $this->belongsTo('App\God','healing');
    } 

    public function hunting()
    {
        return $this->belongsTo('App\God','hunting');
    } 

    //regions
    public function cultures()
    {
        return $this->hasMany('App\Culture','culture_id');
    }

}
