<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $response = Http::get('http://api.weatherapi.com/v1/current.json?key=57cbb39d84354f1aaae194212242206&q=Kathmandu&aqi=no');
        $weather = $response->json();
        // dd($weather);
        return view('weather.index', ['weather' => $weather]);
    }
}
