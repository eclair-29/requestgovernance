<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
    public function applicationType()
    {
        return $this->belongsTo(ApplicationType::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
