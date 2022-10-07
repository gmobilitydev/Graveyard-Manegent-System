<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable =[
        'region_id',
        'location_types_id',
        'name',
        'slug'
    ];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function locationTypes(){
        return $this->belongsTo(locationType::class);
    }

    public function graveyard(){
        return $this->hasMany(graveyard::class);
    }
}
