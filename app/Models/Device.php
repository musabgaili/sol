<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Device extends Model
{
    use HasFactory;


    protected $guarded = ['id'];



    /**
     * Get all of the updates for the Device
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function updates(): HasMany
    {
        return $this->hasMany(DeviceUpdate::class);
    }

}
