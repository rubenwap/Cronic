<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

  protected $fillable = [
      'birth', 'height', 'weight', 'allergies','illness', 'doctor'
  ];
    //
    
    
//event is owned by a user
public function user() {
    return $this->belongsTo('App\User');
}

    
}
