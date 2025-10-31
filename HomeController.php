<?php

namespace App\Http\Controllers\Client;

use App\Models\City;
use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
        public function index()
    {
        $cities = City::get();
        $hotels = Hotel::get()->take(6);
        $rooms = Room::get();

        // dd($categories);

        return view('client.home.index')->with([
            'cities' => $cities,
            'hotels' => $hotels,
            'rooms' => $rooms,
        ]);
    }
}
