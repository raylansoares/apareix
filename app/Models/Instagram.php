<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Instagram extends Model
{
    use LogsActivity;

    protected $fillable = [
        'id_insta', 'username', 'profile_picture',
        'full_name', 'bio', 'website', 'is_business',
        'access_token'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getLogNameToUse(string $eventName = ''): string
    {
        return 'instagram_log';
    }
}
