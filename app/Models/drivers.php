<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class drivers extends Model
{
    public $timestamps = false; 
    public function trips(){
        return $this->hasMany(trips::class);
    }
}
