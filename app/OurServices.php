<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurServices extends Model
{
    public function avgRating()
    {
        return $this->hasMany(ServiceRating::class, 'service_id', 'id');
    }
}
