<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class WeatherController extends Controller
{
    public function getWeather()
    {
        $apiKey = env('WEATHER_API_KEY');
        $cityName = 'Kuressaare';
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=$cityName&units=metric&appid={$apiKey}";
        $client = new Client();
        try {
            $response = $client->get($apiUrl);

            $data = json_decode($response->getBody(), true);

            return view('weather', ['weatherData' => $data]);

        } catch (\Exception $e) {
           
            return view('error', ['error' => $e->getMessage()]);
        }
        
    }
}


