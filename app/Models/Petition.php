<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'status',
        'target_signatures',
        'current_signature'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments_signature()
    {
        return $this->hasMany(Comment_Petition::class);
    }

    public function signatures()
    {
        return $this->hasMany(Petition_Signature::class);
    }
}
