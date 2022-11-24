<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width"/>
  <title>Weather App</title>
 <style>
  


</style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('public/adminlte/docs/assets/plugins/fontawesome-free/css/all.min.css')}}" media="all">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::to('/') }}/public/adminlte/docs/assets/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ URL::to('/') }}/public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ URL::to('/') }}/public/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ URL::to('/') }}/public/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
</head>
<body class="hold-transition sidebar-mini" style="background: url({{url('public/images/background.png')}});background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;background-size: cover;padding:2%;>
<!-- Site wrapper -->
<div class="wrapper">
  
  
  <!-- /.navbar -->
 
  <!-- Main Sidebar Container -->
  <section class="content">
    <!-- Default box -->
    @yield('content')
  </section>
  <!-- Content Wrapper. Contains page content -->
  
  
  <!-- /.content-wrapper -->
  
</div>
<!-- ./wrapper -->
 
<!-- jQuery -->
<script src="{{ URL::to('/') }}/public/adminlte/docs/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::to('/') }}/public/adminlte/docs/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ URL::to('/') }}/public/adminlte/docs/assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- jQuery UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ URL::to('/') }}/public/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

</body>
<script>
function beep() {
    var snd = new Audio("data:audio/wav;base64,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qJrx4KOQjahZxWbcZgztj2c49nKmkId44S71j0c8eV9yDK6uPRzx5X18eDvjvQ6yKo9ZSS6l//8elePK/Lf//IInrOF/FvDoADYAGBMGb7FtErm5MXMlmPAJQVgWta7Zx2go+8xJ0UiCb8LHHdftWyLJE0QIAIsI+UbXu67dZMjmgDGCGl1H+vpF4NSDckSIkk7Vd+sxEhBQMRU8j/12UIRhzSaUdQ+rQU5kGeFxm+hb1oh6pWWmv3uvmReDl0UnvtapVaIzo1jZbf/pD6ElLqSX+rUmOQNpJFa/r+sa4e/pBlAABoAAAAA3CUgShLdGIxsY7AUABPRrgCABdDuQ5GC7DqPQCgbbJUAoRSUj+NIEig0YfyWUho1VBBBA//uQZB4ABZx5zfMakeAAAAmwAAAAF5F3P0w9GtAAACfAAAAAwLhMDmAYWMgVEG1U0FIGCBgXBXAtfMH10000EEEEEECUBYln03TTTdNBDZopopYvrTTdNa325mImNg3TTPV9q3pmY0xoO6bv3r00y+IDGid/9aaaZTGMuj9mpu9Mpio1dXrr5HERTZSmqU36A3CumzN/9Robv/Xx4v9ijkSRSNLQhAWumap82WRSBUqXStV/YcS+XVLnSS+WLDroqArFkMEsAS+eWmrUzrO0oEmE40RlMZ5+ODIkAyKAGUwZ3mVKmcamcJnMW26MRPgUw6j+LkhyHGVGYjSUUKNpuJUQoOIAyDvEyG8S5yfK6dhZc0Tx1KI/gviKL6qvvFs1+bWtaz58uUNnryq6kt5RzOCkPWlVqVX2a/EEBUdU1KrXLf40GoiiFXK///qpoiDXrOgqDR38JB0bw7SoL+ZB9o1RCkQjQ2CBYZKd/+VJxZRRZlqSkKiws0WFxUyCwsKiMy7hUVFhIaCrNQsKkTIsLivwKKigsj8XYlwt/WKi2N4d//uQRCSAAjURNIHpMZBGYiaQPSYyAAABLAAAAAAAACWAAAAApUF/Mg+0aohSIRobBAsMlO//Kk4soosy1JSFRYWaLC4qZBYWFRGZdwqKiwkNBVmoWFSJkWFxX4FFRQWR+LsS4W/rFRb/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VEFHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAU291bmRib3kuZGUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMjAwNGh0dHA6Ly93d3cuc291bmRib3kuZGUAAAAAAAAAACU=");  
    snd.play();
}

$(document).ready(function(){
  
$('#searchlist').on('click','li.id',function() {   
  $("#pageloader").fadeIn();
          $('#location').text($(this).text()); 
          $("#query").val('');
          $('#location-id').text(this.id); 
          $('#searchlist').fadeOut(); 
          var bodyRef = document.getElementById('daily-forecast'); 
                    bodyRef.innerHTML = '';
                    bodyRef = document.getElementById('weather-forecast'); 
                    bodyRef.innerHTML = '';
          $.ajax({
                url: '{{ route('getCityDetails') }}',
                method: "get",
                data: {
                    search: this.id,  
                },
                success: function(data) {
                  $("#loc-lat").val(data.lat);
                  $("#loc-long").val(data.lng);
                  $.ajax({
                    url: '{{ route('fetchOpenWeatherLongLat') }}',
                    method: "get",
                    data: {
                        lat: data.lat,
                        long:data.lng,  
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
            });
    }); 

});
  </script>
</html>