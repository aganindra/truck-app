<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trucks extends Model
{
    public $timestamps = false; 
    public function truck(){
        return $this->hasMany(trips::class);
    }
}
