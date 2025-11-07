<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['uuid', 'nama_device', 'lokasi', 'status'];

    public function events(){
        return $this->hasMany(Earthquake_event::class, 'device_id');
    }
}
