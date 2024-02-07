<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'user_id', 
        'title', 
        'description'
    ];

    /**
     * This album belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * This belongs to a theme.
     */
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    /**
     * Register the media collection.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('album_photos');
    }
}
