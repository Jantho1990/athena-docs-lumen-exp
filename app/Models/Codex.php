<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Holds the final representation of a codex entry.
 */
class Codex extends Model
{
    /**
     * The attributes that are mass-assignable.
     */
    protected $fillable = ['title', 'content'];

    public notes()
    {
        return $this->belongsToMany('App\Models\Note');
    }
}