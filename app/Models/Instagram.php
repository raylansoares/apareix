<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $fillable = [
        'id_insta', 'username', 'profile_picture',
        'full_name', 'bio', 'website', 'is_business',
        'access_token'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
