<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class graveyard extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'location_id',
        'name',
        'address',
        'image',
    ];

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function sections(){
        return $this->hasMany(Sections::class);
    }
}
