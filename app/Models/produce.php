<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = "product";
    public function products()
    {
        return $this->belongsTo('App\models\category', 'id_category', 'id');
    }
    
}
