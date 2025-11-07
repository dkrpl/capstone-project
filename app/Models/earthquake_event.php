<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Earthquake_event extends Model
{
    protected $fillable = ['device_id', 'magnitude', 'status', 'occurred_at'];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
