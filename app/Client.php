<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['freshbooks_id', 'teamwork_id', 'accman_id', 'name', 'notes', 'tax_exempt', 'status'];
    protected $guarded = ['id'];

    public function getName()
    {
        return $this->name;
    }
}
