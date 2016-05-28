<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'isdoctor'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    //A user can have many articles
    
    
    public function articles(){
        
        return $this->hasMany('App\Article'); 
        
    }
    
      public function events(){
        
        return $this->hasMany('App\Event'); 
        
    }
    
      public function settings(){
        
        return $this->hasMany('App\Setting'); 
        
    }
    
    
}
