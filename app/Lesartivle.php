<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesartivle extends Model
{
    
     public $table="lesartivles";
    public function commentaires()
    {
        return $this->hasMany('App\Commentaire');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
