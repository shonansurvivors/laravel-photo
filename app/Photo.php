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

    public function isBookmarkedBy(?User $user): bool
    {
        return $user
            ? (bool)$this->bookmarks->where('id', $user->id)->count()
            : false;
    }
}
