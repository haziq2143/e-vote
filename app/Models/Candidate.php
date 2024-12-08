<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class Candidate extends Model
{
    protected $fillable = [
        'election_id',
        'name',
        'photo',
        'description',
        'votes_count',
    ];
    /**
     * Get the user that owns the candidate.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * @property-read \App\Models\User $user The user that owns the candidate.
     */


    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function result()
    {
        return $this->hasMany(Result::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
