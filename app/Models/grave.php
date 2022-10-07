<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class grave extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable =[

        'grave_type_id',
        'section_id',
        'grave_number',
        'image',
        'grave_status'
    ];

    protected $casts = [
        'grave_status' => 'boolean',
    ];


    public function section(){
        return $this->belongsTo(Sections::class);
    }

    public function grave_type(){
        return $this->belongsTo(GraveType::class);
    }

    public function deceased(){
        return $this->belongsTo(deceased::class);
    }

}
