<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersDevice extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $guarded = [];

    public function devices()
    {
        return $this->belongsTo(App\Models\Devices::class);
    }

    public function users()
    {
        return $this->belongsTo(App\Models\User::class);
    }
}
