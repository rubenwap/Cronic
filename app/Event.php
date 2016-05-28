<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'title', 'start','end'
    ];
    
    
//event is owned by a user
public function user() {
    return $this->belongsTo('App\User');
}

    
    
    
}
