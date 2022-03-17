<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    use HasFactory;

    /**
     * @param string[] $fillable
     */
    protected $fillable = [
        'type',
        'user_id',
        'user_id',

    ];

    public function equity()
    {
        return $this->hasMany(loanDocument::class);
    }

    public function estate()
    {
        return $this->hasMany(loanDocument::class);
    }

    public function document()
    {
        return $this->hasMany(loanDocument::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
