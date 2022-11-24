<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    //
    public function index()
    {
      /*
        $lat = '15.672417766662255';
        $long = '120.88851731737039';
        $api = '4c0421a61acf58c523a0863fbd80fe5a';
        //://pro.openweathermap.org/data/2.5/forecast/hourly?lat=44.34&lon=10.99&appid={API key}
        $request = new Client();
        //$res = $request->get('https://api.openweathermap.org/data/2.5/forecast?lat='.$lat.'&lon='.$long.'&appid='.$api.'&units=metric');
        $res = $request->get('https://api.openweathermap.org/data/2.5/weather?q=Osaka,JP&appid='.$api.'&units=metric');
        //https://pro.openweathermap.org/data/2.5/forecast/hourly?lat=57&lon=-2.15&callback=test&appid='.$api.'
        //https://pro.openweathermap.org/data/2.5/forecast/hourly?lat={lat}&lon={lon}&appid={API key}

        $res->getStatusCode(); // 200
        $data = $res->getBody(); 
        $data = json_decode($data);
        $client  = new Client();
        $response = $client->request('GET', 'https://api.foursquare.com/v3/places/search?query=Osaka', [
            'headers' => [
              'Authorization' => 'fsq3GxcKhBm16UnioC5jrov5qwsUioJ+P6r8wYdB4L9gJKE=',
              'accept' => 'application/json',
            ],
          ]);
          $response = $client->request('GET', 'https://api.foursquare.com/v3/autocomplete?query=Osaka Japan', [
            'headers' => [
              'Authorization' => 'fsq3GxcKhBm16UnioC5jrov5qwsUioJ+P6r8wYdB4L9gJKE=',
              'accept' => 'application/json',
            ],
          ]);
          $clientCountry = new Client();
          $country = $clientCountry->request('GET','http://ip-api.com/json/');
          $country = $country->getBody();
          $country = json_decode($country);
          $country;
          $response = $response->getBody();
          $response = json_decode($response);
           $response;
            $data;*/
            
//die(json_encode($data->list));

        return view('pages.home');
    }
    public function weather(){
      $client = new Client();
      $response = $client->request('GET', 'https://api.foursquare.com/v3/places/search?query=coffee&ll=34.7520,135.4582&open_now=true&sort=distance', [
        'headers' => [
          'Authorization' => 'fsq3GxcKhBm16UnioC5jrov5qwsUioJ+P6r8wYdB4L9gJKE=',
          'accept' => 'application/json',
        ],
      ]);
      $response = $response->getBody();
      return $response;
    }

   
    /**
     * Show the application contact.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    




}
