<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function getName()
    {
        return $this->name
    }
}
