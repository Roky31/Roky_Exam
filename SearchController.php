<?php

namespace App\Http\Controllers\Client;

use App\Models\City;
use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function searchs_index(Request $request)
    {
        $request->validate([
            'q' => ['nullable', 'string'],
            'cityId' => ['nullable', "integer", "min:1"]
        ]);
        $f_q = $request->q ? $request->q : null;
        $f_city = $request->cityId ? $request->cityId : 0;

        $hotels = Hotel::when(isset($f_q), function ($query) use ($f_q) {
            return $query->where(function ($query) use ($f_q) {
                $query->where('title', 'like', '%' . $f_q . '%')
                    ->orWhere('description', 'like', '%' . $f_q . '%');
            })
                ->orWhereHas('city', function ($query) use ($f_q) {
                    return $query->where('name', 'like', '%' . $f_q . '%');
                });
        })
            ->when($f_city, function ($query) use ($f_city) {
                return $query->where('city_id', $f_city);
            })
            ->orderBy('created_at', 'desc')  // desc => Z-A, asc => A-Z
            ->paginate(10)
            ->withQueryString();  // onki soraglar bilen gelyar

        //Ahli catergorylary cekyar
        $cities = City::get();

        // Views folder-daki Books->index.blade.php ugradyar
        return view('client.search.index')->with([
            'hotels' => $hotels,
            'cities' => $cities,
        ]);
    }
    public function searchs_show($hotelName)
    {
        $cities = City::get();
        $hotel = Hotel::where('name',$hotelName)->firstOrFail();
        $rooms = Room::where('hotel_id',$hotel->id)->get();

        return view('client.search.show')->with([
            'hotel' => $hotel,
            'cities' => $cities,
            'rooms' => $rooms,
        ]);
    }
}
