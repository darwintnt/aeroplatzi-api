<?php

namespace App\Repositories;

use App\Models\City;


class CityRepository
{
    /**
     * Show all countries with cities
     *
     * @param array $request
     * @return mixed
     */
    public function index()
    {
        return City::select('id','country_id','name')->get();
    }
}
