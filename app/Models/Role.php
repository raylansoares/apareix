<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name','description'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
