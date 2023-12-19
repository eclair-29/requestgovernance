<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function statusCategory()
    {
        return $this->belongsTo(StatusCategory::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }

    public function sites()
    {
        return $this->hasMany(Sites::class);
    }

    public function approvers()
    {
        return $this->hasMany(Approver::class);
    }

    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }

    public function applicationTypes()
    {
        return $this->hasMany(ApplicationType::class);
    }

    public function hrisApplications()
    {
        return $this->hasMany(HrisApplication::class);
    }

    public function requestTypes()
    {
        return $this->hasMany(RequestType::class);
    }
}
