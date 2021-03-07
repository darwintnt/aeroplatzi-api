<?php

namespace App\Repositories;

use App\Models\Airport;


class AirportRepository
{
    /**
     * Show all countries with cities
     *
     * @param array $request
     * @return mixed
     */
    public function getAirportsByCities()
    {
        $airport = Airport::select('id','city_id','name', 'latitude', 'longitude')
            ->with('city:id,country_id,name')
            ->paginate();

        return $airport;
    }
}


