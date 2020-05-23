<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function stations()
    {
        return $this->hasMany(Station::class);
    }
}
