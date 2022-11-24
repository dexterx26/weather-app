<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use App\Models\Cities;
use DB;
class ApiController extends Controller

{
    //
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function getCountry(){
        $clientCountry = new Client();
        $country = $clientCountry->request('GET','http://ip-api.com/json/');
          $country = $country->getBody();
          $country = json_decode($country);
        return $country;
    }
    public function autocomplete(Request $request){
        $client = new Client();
        $country = $this->getCountry();
        
        $response = $client->request('GET', 'https://api.foursquare.com/v3/autocomplete?query='.$request->search.'&types=city', [
            'headers' => [
              'Authorization' => 'fsq3GxcKhBm16UnioC5jrov5qwsUioJ+P6r8wYdB4L9gJKE=',
              'accept' => 'application/json',
            ],
          ]);
          
          
          $search = $request->search;
          $cities =  Cities::where('city', 'like', '%'. $search .'%')

            ->orWhere('country', 'like', '%'. $search .'%')           

            ->orWhere(DB::raw("CONCAT(`city`,' ',`country`)"), 'like', '%' . $search . '%')

            ->orderBy('id', 'desc')->get();

            $output = '<ul class="dropdown-menu" style="display:block;position:relative;float:left">';

            if($cities){
              foreach ($cities as $row){
                //$output .= '<li id="test" class="id" style="padding:10px;width:20vw><a href="#">'.$row->city.', ' .$row->country.'</a></li>';
                $output .= '<li id="'.$row->id.'" class="id" style="padding:5px" ><a href="#">'.$row->city.', ' .$row->country.'</a></li>';
           
              }


              
              //$output;
            }
            
          $output .= '</ul>';
        echo $output;
          
    }
    public function autocomplete2(Request $request){
      $api = '4c0421a61acf58c523a0863fbd80fe5a';
      $client = new Client();
      $country = $this->getCountry();
      $lat = $request->lat;
      $long = $request->long;
      //https://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$long.'&appid='.$api.'&units=metric';
      $weather = $client->get('https://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$long.'&appid='.$api.'&units=metric');
         $weather = $weather->getBody(); 
       return  $weather = json_decode($weather);
        
        
        return $response =  $response->getBody();
        return $response= json_decode($response);
          
       
      echo $response;
        
  }

    public function getCityDetails(Request $request){
      $city = Cities::where('id',$request->search)->first();
      return response()->json($city);
    }

    public function fetchOpenWeatherLongLat(Request $request){
      $api = '4c0421a61acf58c523a0863fbd80fe5a';
      $api2 = '1fa9ff4126d95b8db54f3897a208e91c';
      $lat = $request->lat;
      $long = $request->long;
        //://pro.openweathermap.org/data/2.5/forecast/hourly?lat=44.34&lon=10.99&appid={API key}
        $request = new Client();
        $forecast = $request->get('https://api.openweathermap.org/data/2.5/forecast?lat='.$lat.'&lon='.$long.'&appid='.$api.'&units=metric');
        
        $forecast = $forecast->getBody(); 
        $forecast = json_decode($forecast);
        $weather = $request->get('https://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$long.'&appid='.$api.'&units=metric');
        $weather = $weather->getBody(); 
        $weather = json_decode($weather);
        $daily = $request->get('https://api.openweathermap.org/data/2.5/onecall?lat='.$lat.'&lon='.$long.'&appid='.$api.'&units=metric');
        $daily = $daily->getBody(); 
        $daily = json_decode($daily);
        return response()->json(['weather'=>$weather,'forecast'=>$forecast,'daily'=>$daily]);
    }

    public function fetchDining(Request $request){
      $api = '4c0421a61acf58c523a0863fbd80fe5a';

      $lat = $request->lat;
      $long = $request->long;
      $cat = $request->cat;
      $client = new Client();
      $response = $client->request('GET', 'https://api.foursquare.com/v3/places/search?ll='.$lat.'%2C'.$long.'&radius=1000&categories='.$cat.'&open_now=true&sort=DISTANCE&limit=5', [
        'headers' => [
          'Authorization' => 'fsq3GxcKhBm16UnioC5jrov5qwsUioJ+P6r8wYdB4L9gJKE=',
          'accept' => 'application/json',
        ],
      ]);
      
      $places = array();
      
      $response =  $response->getBody();
      $response= json_decode($response);

      foreach($response->results as $r){
        //$r->geocodes->main->latitude;
        $weather = new Client();
        $weather = $weather->get('https://api.openweathermap.org/data/2.5/weather?lat='.$r->geocodes->main->latitude.'&lon='.$r->geocodes->main->longitude.'&appid='.$api.'&units=metric');
        $weather = $weather->getBody(); 
        $weather = json_decode($weather);
        //return $weather->weather[0]->icon;
        
        $r->fsq_id;
        $client2= new Client();
        $response2 = $client2->request('GET', 'https://api.foursquare.com/v3/places/'.$r->fsq_id.'/photos', [
          'headers' => [
            'Authorization' => 'fsq3GxcKhBm16UnioC5jrov5qwsUioJ+P6r8wYdB4L9gJKE=',
            'accept' => 'application/json',
          ],
        ]);
        $response2 =  $response2->getBody();
        $response2= json_decode($response2);
        $images=array();
        $imgCounter=0;
        foreach($response2 as $respo){
          if($imgCounter<5){
            $images[] = array(
              'imgUrl'=>$respo->prefix.'150x150'. $respo->suffix,
             );
          }
          $imgCounter++;
          
        }
        //return $r->location;
        //$r->geocodes->main->latitude;
       // return $r->location->formatted_address.', '.$r->location->locality;
       // return $r->name;
          //foreach($r as $r2){
            //return $r2;
            //echo $r2->name.'<br>';
            //return $r2->name;
            $places[] = array(
              'name'=>$r->name,
              'category'=>$r->categories[0]->name,
              'lat'=>$r->geocodes->main->latitude,
              'long'=>$r->geocodes->main->longitude,
              'address'=>$r->location->formatted_address.', '.$r->location->locality,
              'temperature'=>intval($weather->main->temp),
              'weather'=>'https://openweathermap.org/img/wn/'.$weather->weather[0]->icon.'@2x.png',
              'images'=>$images,
              
            );
          //}
      }
      return $places;
      //return($response->getBody());
      //$response = $response->getBody(); 

      //echo $response->getBody();
      //$response = json_decode($response);
      //return response()->json(['places'=>$response]);


    }
    public function fetchFSQID(Request $request){
      $fsq_id = $request->fsq_id;
      $client = new \GuzzleHttp\Client();

      $response = $client->request('GET', 'https://api.foursquare.com/v3/places/'.$fsq_id.'/photos', [
        'headers' => [
          'Authorization' => 'fsq3GxcKhBm16UnioC5jrov5qwsUioJ+P6r8wYdB4L9gJKE=',
          'accept' => 'application/json',
        ],
      ]);
      $response =  $response->getBody();
      return $response= json_decode($response);
      
    }

}