<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Theme extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name', 
        'description'
    ];

    /**
     * This themes has many albums.
     */
    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    /**
     * Register the media collection.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('album_photos');
    }
}
