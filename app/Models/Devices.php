<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Devices extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $guarded = [];

    public function deviceState()
    {
        return $this->hasMany(App\Models\DeviceState::class);
    }

    public function usersDevice()
    {
        return $this->hasMany(App\Models\UsersDevice::class);
    }
}
