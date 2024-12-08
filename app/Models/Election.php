<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'visibility',
        'code',
    ];


    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
