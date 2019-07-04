<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $fillable = ['name', 'website', 'user_id', 'address'];
    public function jobs(){
        return $this->hasMany('App\Job');
    }
}
