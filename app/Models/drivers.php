<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class drivers extends Model
{
    
    public $timestamps = false; 
    use HasFactory;
    public function trips(){
        return $this->hasMany(trips::class);
    }
}
