<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Con esto le decimos al modelo que tenemos una relacion con el modelo User
    //Cuando es de uno se utiliza
    public function user(){
        return $this->belongsTo(User::class);
    }
      
}
