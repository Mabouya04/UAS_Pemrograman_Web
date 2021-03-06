<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function map(){
        return $this->hasMany(Map::class);
    }
}
