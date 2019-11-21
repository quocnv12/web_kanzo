<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table = "category";
    public function categorys()
    {
        return $this->hasMany('App\models\produce', 'id_category', 'id');
    }
}
