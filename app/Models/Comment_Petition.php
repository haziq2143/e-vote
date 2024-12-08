<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment_Petition extends Model
{
    protected $fillable = [
        'petition_id',
        'user_id',
        'comment'
    ];
    public function petition()
    {
        return $this->belongsTo(Petition::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
