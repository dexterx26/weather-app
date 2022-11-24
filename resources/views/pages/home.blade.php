@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'dashboard'
])
@include('layouts.loader')
@include('layouts.partials.modals._modal')
@section('content')
<style>
.weather-margin-top{
  margin-top:-3vh;
}
.weather-margin-top2{
  margin-top:-2vh;
}
.weather-margin-top5{
  margin-top:-5vh;
}
h1{
  font-size:2em;
}
h2{
  font-size:1.5em;
}
h3{
  font-size:1.17em;
}
h4{
  font-size:1em;
}
h5{
  font-size:0.83em;
}
h6{
  font-size:0.67em;
}
.responsive {
  width: 100%;
  height: auto;
}
.modal.left_modal {
  position: fixed;
  z-index: 99999;
}


.modal.left_modal .modal-dialog {
  position: fixed;
  margin: auto;
  width: 50vw;
  max-width: 90%;
  height: 100%;    

   -webkit-transform: translate3d(50%);
      -ms-transform: translate3d(50%);
       -o-transform: translate3d(50%);
          transform: translate3d(50%);

}

.modal.left_modal .modal-content {
    height: 100vh !important;
}

.modal.left_modal.fade .modal-dialog{
  left: -100%;
  -webkit-transition: opacity 0.6s linear, left 0.6s ease-out;
  -moz-transition: opacity 0.6s linear, left 0.6s ease-out;
  -o-transition: opacity 0.6s linear, left 0.6s ease-out;
  transition: opacity 0.6s linear, left 0.6s ease-out;
}

.modal.left_modal.fade.show .modal-dialog{
  left: 0%;
  box-shadow: 0px 0px 19px rgba(0,0,0,.5);
}

.modal_outer .modal-body {
    overflow-y: auto;
    overflow-x: hidden;
    height: 100vh;
}


.modal_outer .modal-body::-webkit-scrollbar {
    display: none;
}

 
.fa-arrow-circle-right {
   color: #e8576f;
}

.c-m-h {
   border-bottom: 2px solid #e8576f; 
   background: #1f2236;
}

.c-m-f {
   border-top: 2px solid #e8576f;
   background: #1f2236;
}

.card-li li {
   color: #fff;
}

.cards-body {
   background: #2b2f4b;

}

.web-card {
   background: #1f2236;
   border: 2px solid #e8576f; 
   border-radius: 15px;
}

.m-c-l { 
   border: 4px solid #e8576f;
   border-left: none;
   border-top-right-radius: 15px;
   border-bottom-right-radius: 15px;
   background: #1f2236;
}

.m-l-dialog {
   border-left: none;
   border-top-right-radius: 15px;
   border-bottom-right-radius: 15px;
}


.card-category {
   font-size: 1.4rem;
   font-weight: 580;
   color: #fff;
}

.card-title {
   font-size: 1.2rem;
   font-weight: 520;
   color: #e8576f;
}

.card-price {
   font-size: 1.2rem;
   font-weight: 520;
   color: #e8576f;
}


.web-card-btn {
   padding: 0px 12px;
   background: #e8576f;
   color: #fff;
   font-size: 16px;
   font-weight: 600;
   border-radius: 50px;
   transition: 0.5s;
}

.web-card-btn:hover {
   background: #fff;
   color: #e8576f;
   transition: 0.5s;
}

.card-hr {
   margin: 0px; 
   border-top: 2px solid #e8576f;
   max-width: 90%; 
   margin: auto;
}  
.card-li li:not(:last-child) { 
   padding-bottom: 5px;  
}

</style>
        <div id="main-div" style="width:50vw;height:20vh; margin: auto; background: rgba(0, 0, 0, 0.5);border-radius:15px;padding:2%">
          <div class="card-body" style="width:100%;height:auto">
            <form><center><button class='btn btn-secondary' style="float:right;margin-top:-10px" onclick="getLocation()">Get my location's status</button></center>  
              
            <input  class="form-control" type="text" id="query" name="query" onkeyup="chk_me()" style="border-radius:15px;border: 0;outline: 0;border-bottom: 1px solid black; " placeholder="search a city" > 
            <div id="searchlist" class="autocomplete-list" style="position: absolute;"></div><br><center><button hidden class="btn " style="background: rgba(255, 255, 255, 0.5);" id="search" onclick="search()"><i class="fas fa-search" style="color:white"></i></button></center>
          </div>
          
          <button class="btn  btn-primary  mt-3" id="modal_view_left" data-toggle="modal"  data-target="#left-modal" hidden>Open left modal</button>
          <input type="text" id="loc-lat" value="34.752" hidden><input type="text" id="loc-long" value="135.4582" hidden>
          
        <div id="div-weather" style="display:none" class="weather-margin-top5">
       
        <button class="btn btn-primary" onclick="getDining(13000)" href="#">Dining</button><button class="btn btn-primary" onclick="getDining(16000)" href="#">Landmarks</button><button class="btn btn-primary" onclick="getDining(14000)" href="#">Events</button><button class="btn btn-primary" onclick="getDining(14000)" href="#">Retail</button>
          <br>
          <center>
          
          <h1 id="location" class="weather-margin-top5" style="color:white"></h1>
          <h1 id="location-id" hidden></h1>
          
          <img id="img-weather" style="width:5vw;height:10vh" src="first.jpg" alt="Insert link 1 alt text here" class="responsive" /></center>
            <div style="float:left;color:white;">
            <h1 class="weather-margin-top2" id="location-weather"></h1>
            </div>
            <div style="float:right;color:white;" class="weather-margin-top5">
              <center>
              <h6 id="location-heat-index"></h6>
              <h6 id="location-humidity"></h6>  
              <h6 id="location-wind-speed"></h6></center>
            </div>
            <div style="clear:both"></div>
            <div style="color:white">
              <center><h5>Weather forecast</h5> </center>
              <hr>
              <div id="weather-forecast">
              </div>

              
              <center><h5>Daily forecast</h5> </center>
                <hr>
                <div id="daily-forecast">
                </div>
                
              <!--
              <div style="float:left">
                <center><p> 5:30pm</p>
                <img src="https://openweathermap.org/img/wn/01d@2x.png" class="weather-margin-top" alt="">
                <p>22°</p></center>
              </div>
              <div style="float:left">
                <center><p> 5:30pm</p>
                <img src="https://openweathermap.org/img/wn/01d@2x.png" class="weather-margin-top" alt="">
                <p>22°</p></center>
              </div>
              <div style="float:left">
                <center><p> 5:30pm</p>
                <img src="https://openweathermap.org/img/wn/01d@2x.png" class="weather-margin-top" alt="">
                <p>22°</p></center>
              </div>-->
              
            </div>
          </form>
        <!-- /.card-footer-->
      </div>
    </div>
      <!-- /.card -->
@endsection

<script>


var timer;
function chk_me(){
 
   clearTimeout(timer);
   timer=setTimeout(function validate(){
    var query = $("#query").val();
    autoComplete(query);
   },500);
}

async function getDining2() {
  var lat=$("#loc-lat").val();
  var long = $("#loc-long").val();
    try {
        const searchParams = new URLSearchParams({
          query: 'coffee',
          ll: lat+','+long,
          open_now: 'true',
          sort: 'DISTANCE'
        });
        const results = await fetch(
          `https://api.foursquare.com/v3/places/search?${searchParams}`,
          {
            method: 'GET',
            headers: {
              Accept: 'application/json',
              Authorization: 'fsq3GxcKhBm16UnioC5jrov5qwsUioJ+P6r8wYdB4L9gJKE=',
            }
          }
        );
        const data = await results.json();
        return data;
    } catch (err) {
        console.error(err);
    }
}
function getLocation() {
  $("#pageloader").fadeIn();
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    //x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  //position.coords.latitude;
  //position.coords.longitude;
  $("#loc-lat").val(position.coords.latitude);
                  $("#loc-long").val(position.coords.longitude);
  var search = 'll='+position.coords.latitude+'%2C'+position.coords.longitude;
  $.ajax({
                url: '{{ route('autocomplete2') }}',
                method: "get",
                data: {
                    search: search,                                   
                    lat:position.coords.latitude,
                    long:position.coords.longitude,
                },
                success: function(data) {
                  $('#location').text(data.name);                    
                }
            });



  $.ajax({
                    url: '{{ route('fetchOpenWeatherLongLat') }}',
                    method: "get",
                    data: {
                        lat: position.coords.latitude,
                        long:position.coords.longitude,  
                    },
                    success: function(data){
                      //$.each(data,function(index,screen){
                        
                        
                        coord = data.weather.coord;
                        
                        coord = data.weather.coord;
                        main = data.weather.main;
                        wind = data.weather.wind;

                        wind.speed;
                        main.temp;
                        main.humidity;
                        weather = data.weather.weather;
                        
                        var weather2 = Object.values(weather);
                        imgUrl='https://openweathermap.org/img/wn/'+weather2[0].icon+'@2x.png';
                        //alert(imgUrl);
                       // $("#img-weather").attr("src",imgUrl);
                       
                       $("#location-weather").text(parseInt(main.temp));
                       $("#location-weather").append(String.fromCharCode(176));
                       $("#div-weather").css('display','block');
                       $("#location-heat-index").text('Heat index: '+ parseInt(main.feels_like));
                       $("#location-heat-index").append(String.fromCharCode(176));
                        $("#location-humidity").text('Heat index: '+main.humidity+'%');
                        $("#location-wind-speed").text('Wind: '+main.feels_like+' km/h');


                      forecast = data.forecast.list;

                      //alert(forecast[0].main.temp);
                      //alert(forecast[0].weather[0].icon);
                      var html ='';
                      var html2='';
                      const daysOfWeek = ["Mon","Tue","Wed","Thurs","Fri","Sat","Sun"];
                      for(var i=0;i<5;i++){

                        var dt = forecast[i].dt;
                        dt = new Date(dt*1000);
                        
                        let ampm = dt.getHours()>=12 ? 'pm' : 'am';;
                        let hours = dt.getHours()%12;
                        let minutes = dt.getMinutes();
                        //let day = dt.getDay();
                        hours = hours % 12;
                        hours = hours ? hours : 12;
                        
                        hours = hours < 10 ? '0'+hours : hours;
                        minutes = minutes<10 ? '0'+minutes :minutes;
                        //let minute = dt.getMinutes();
                        forecastIcon = forecast[i].weather[0].icon;
                        //alert(forecast[i].main.temp);
                        html+='<div style="float:left;width:20%"><center><p > '+hours+':'+minutes+' '+ampm+'</p>';
                        html+='<img style="width:5vw;height:10vh" src="https://openweathermap.org/img/wn/'+forecastIcon+'@2x.png" class="weather-margin-top responsive" alt="">';
                        html+='<p class="weather-margin-top2">'+parseInt(forecast[i].main.temp)+'°</p>';
                        html+='</center></div>';
                        
                
                
               
                        //alert(html);

                        daily = data.daily;
                              //alert(daily.daily[i+1].temp.day);
                        
                        var today = daily.daily[i+1].dt;
                          //alert(today);
                        
                        var dt2= new Date(today*1000);
                        let day = dt2.getDay();
                        //day = 0,1,2,3,4,5,6
                        
                        rainChance = daily.daily[i+1].pop*100;
                        dailyIcon = daily.daily[i+1].weather[0].icon;
                        //alert(rainChance)
                        html2+='<div style="float:left;width:20%"><center><p > '+daysOfWeek[day]+'</p>';
                        html2+='<img style="width:5vw;height:10vh" src="https://openweathermap.org/img/wn/'+dailyIcon+'@2x.png" class="weather-margin-top responsive" alt="">';
                        html2+='<p class="weather-margin-top2">'+parseInt(daily.daily[i].temp.day)+'°</p>';
                        html2+='<p class=""> Rain: '+parseInt(rainChance)+'%</p></center></div>';


                      }
                      //alert(html2);
                        $('#weather-forecast').append(html);
                        $('#daily-forecast').append(html2);
                        //$('#main-div').animate({height:'90vh'}, 500);
                      //$("#main-div").css('height','90vh');
                      
                      $( "#main-div" ).animate({
                      //width: "300px",
                      height: "90vh", 
                        }, 1000 );
                        $("#pageloader").fadeOut();
                        $('#img-weather').attr('src', imgUrl).load(function(){
                          //  this.width;   // Note: $(this).width() will not work for in memory images

                        });
                        
                        
                        $("#pageloader").fadeOut();
                       

                        //alert(weather2[0].description);
                        //$('#weather-desc').text(weath.description);

                        
                       // $("#screenname").append('<option value="' +screen.coord + '">' +screen.coord +'</option>');
                    //}); // where html is the key of array that you want, $response['html'] = "<a>something..</a>";
                    },
                    error: function(data){
                      var json = $.parseJSON(data);
                      alert(json.error);
                    } 
                  });
}
async function getDining(catcat) {
  $("#pageloader").fadeIn();
  bodyRef = document.getElementById('fetchedPlaces'); 
  bodyRef.innerHTML = '';
  var html='';
  var cat=catcat;
  if(cat==13000){
    $("#modal-title-header").text('DINING');
  }else if(cat==16000){
    $("#modal-title-header").text('LANDMARKS');
  }
  else if(cat==14000){
    $("#modal-title-header").text('EVENTS');
  }
  else if(cat==17000){
    $("#modal-title-header").text('RETAIL');
  }
        $.ajax({
                url: '{{ route('fetchDining') }}',
                method: "get",
                //async: false,
                data: {
                    lat: $("#loc-lat").val(),                                   
                    long: $("#loc-long").val(),  
                    cat:catcat, 
                },
                success: function(data) {
                    
                  var places = data;
                  //working name
                  //alert(places[0].name);
                  //alert(places[1].name);

                  //working for image
                  //alert(places[0].images[0].imgUrl)
                 // alert(places[0].images[1].imgUrl)
                  // alert(places[0].images.length);
                  for(var i = 0; i<places.length;i++){
                    //alert(places[i].fsq_id);
                    //alert(i);
                    
                    html+='<div class="col-12 mb-4 mt-2">';
                      html+='<div class="web-card">';
                        html+='<div class="cards-inner">';                            
                          html+='<div class="fetchPlacesHeader text-center" stlye="width:25vw">';
                            html+='<h1>'+places[i].name+'</h1>';
                            html+='<h2>'+places[i].category+'</h2>';
                            html+='<h3>'+places[i].address+'</h3><br>';
                            html+='<img style="width:5vw;height:10vh" src="'+places[i].weather+'" class="weather-margin-top responsive" alt="">'
                            html+='<h2>'+places[i].temperature+'°</h3>';
                            html+='<img ng-click="mapClick()" style="width:70%;" src="https://maps.googleapis.com/maps/api/staticmap?zoom=16&size=640x3200&maptype=roadmap&markers=color:blue%7Clabel:S%7C'+places[i].lat+','+places[i].long+'&key=AIzaSyBGmoYFxRHlmsK6LUPiPLWkeh0ti6iw2i4" />';
                            
                            html+='</div>';
                            html+='<hr class="card-hr">'                                               
                            html+='<div style="">';                             
                              html+='<ul class="card-li" >';
                        
                        for(var x=0;x<places[i].images.length;x++){
                          html+='<li><img class="fetchPhotos" src="'+places[i].images[x].imgUrl+'"></li>';
                        }
                        
                        //alert(i);
                        html+='</ul>';
                        html+='<div style="clear:both"></div>'; 
                        html+='<hr class="card-hr">';                          
                        html+='</div>';
                        html+='</div>';
                        html+='</div></div>';
                  }
                    //alert(html);
                  //setTimeout(function() { 
                  //  alert("t");
                   // $("#").modal('toggle');
                   //alert(html);
                   $("#pageloader").fadeOut();
                    $("#fetchedPlaces").append(html);
                    $("#modal_view_left").trigger('click');
              
                    //
                  //}, 5000);
                }
                
          });
          
}
async function autoComplete(query) {
    try {
      if (query == '') {
            $('#searchlist').fadeOut();
        }
        if (query != '') {
            var _token = $('input[name="_token"]').val();
            //alert(_token);
            query = encodeURIComponent(query);
            $.ajax({
                url: '{{ route('autocomplete') }}',
                method: "get",
                data: {
                    search: query,                                   

                },
                success: function(data) {
                    //alert(data);
                    $('#searchlist').fadeIn();
                    $('#searchlist').html(data);
                }
            });
        }
    } catch (err) {
        console.error(err);
    }
}


async function placeSearch(query) {
    try {
        const searchParams = new URLSearchParams({
          query: query,
          sort: 'DISTANCE'
        });
        const results = await fetch(
          `https://api.foursquare.com/v3/places/search?${searchParams}`,
          {
            method: 'GET',
            headers: {
              Accept: 'application/json',
              Authorization: 'fsq3GxcKhBm16UnioC5jrov5qwsUioJ+P6r8wYdB4L9gJKE=',
            }
          }
        );
        const data = await results.json();
        console.log(data);
        return data;
    } catch (err) {
        console.error(err);
    }
}
function search(){
  
  var query = $('#query').val();
  doneTyping;
  placeSearch(query);

}


function doneTyping(){
  alert("Test");
}


//placeSearch();


</script>