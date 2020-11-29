<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Photo extends Model
{
    public function bookmarks(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'bookmarks')->withTimestamps();
    }
}
