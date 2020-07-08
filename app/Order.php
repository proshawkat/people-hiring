<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function service(){
        return $this->hasOne(OurServices::class, 'id', 'ser_id');
    }
}
