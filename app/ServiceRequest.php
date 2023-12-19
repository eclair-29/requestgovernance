<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hrisApplication()
    {
        return $this->hasOne(HrisApplication::class);
    }

    public function approver()
    {
        return $this->belongsTo(Approver::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function requestType()
    {
        return $this->belongsTo(RequestType::class);
    }
}
