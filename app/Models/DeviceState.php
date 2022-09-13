<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class DeviceState extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $guarded = [];

    public function device()
    {
        return $this->belongsTo(App\Models\Devices::class);
    }
}
