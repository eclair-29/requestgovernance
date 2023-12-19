<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HrisApplication extends Model
{
    public function serviceRequest()
    {
        return $this->belongsTo(ServiceRequest::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
