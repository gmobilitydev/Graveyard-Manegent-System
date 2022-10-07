<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;

    protected $fillable = [
        'graveyard_id',
        'name',
        'allocated_graves'
    ];

    public function graveyard(){
        return $this->belongsTo(graveyard::class);
    }

    public function grave(){
        return $this->hasMany(grave::class);
    }
}
