<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class trucks extends Model
{
    public $timestamps = false; 
    use HasFactory;
    public function truck(){
        return $this->hasMany(trips::class);
    }
}
