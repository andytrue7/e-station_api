<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = ['name', 'status', 'city_id'];

    public static function getStationsByCity(City $city)
    {
        return $city->stations()->get();
    }

    public static function getStationsByStatus(City $city, $stationStatus)
    {
       return $city->stations()->where('status', $stationStatus)->get();
    }
}
