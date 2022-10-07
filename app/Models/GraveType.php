<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraveType extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug'
    ];

    public function grave(){
        return $this->hasMany(grave::class);
    }

}
