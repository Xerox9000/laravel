<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public $table="commentaires";
    public function lesarticle()
    {
        return $this->belongsTo('App\Lesartivle');
    }
   
   
}
}
