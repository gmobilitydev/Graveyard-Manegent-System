<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class deceased extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'deceased';

    protected $fillable=[
        'grave_id',
        'first_names',
        'surname',
        'dob',
        'dod',
        'image'
    ];

    public function grave(){
        return $this->belongsTo(grave::class);
    }
    public function grave_type(){
        return $this->belongsTo(GraveType::class);
    }
}
