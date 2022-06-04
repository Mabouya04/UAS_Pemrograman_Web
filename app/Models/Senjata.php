<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senjata extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function TipeSenjata()
    {
        return $this->belongsTo(TipeSenjata::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }

}
