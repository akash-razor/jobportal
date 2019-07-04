<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    //
    protected $fillable = ['name', 'work_exp', 'user_id', 'resume'];
    public function jobs(){
        return $this->belongsToMany('App\Job');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
