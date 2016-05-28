<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

  protected $fillable = [
      'title', 'body', 'feeling', 'doctor'
  ];
    //

//article is owned by a user
public function user() {
    return $this->belongsTo('App\User');
}



}
