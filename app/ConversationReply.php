<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversationReply extends Model
{
    public function client(){
        return $this->hasOne(Client::class, 'id', 'to');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'from');
    }
}
