<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $location = $request->input('location', 'Kathmandu'); // default to Kathmandu if no location is provided

        if ($request->input('location', 'Kathmandu')) {
            $location = 'Kathmandu';
        }

        $response = Http::get("http://api.weatherapi.com/v1/current.json?key=57cbb39d84354f1aaae194212242206&q={$location}&aqi=no");
        $weather = $response->json();

        return view('weather.index', ['weather' => $weather]);
    }
}
