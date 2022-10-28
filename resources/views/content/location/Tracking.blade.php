@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')
@section('page-style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<link rel="stylesheet" href="https://leaflet.github.io/Leaflet.draw/src/leaflet.draw.css"/>
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

<link rel="stylesheet" href="https://leaflet.github.io/Leaflet.draw/src/leaflet.draw.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Page -->i
  <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection
@section('content')
@csrf
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Localisation</h1>
</div>
<div class="row">

	<div class="col-lg-12 mb-8">
            <div id="map" style="width: 100%; height: 800px;position: relative;   float: right;"></div>
    </div>
    <script>
		var greenIcon = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});



var blueIcon=  new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

var redIcon=  new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

var orangeIcon=  new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

var yellowIcon=  new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-yellow.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});


function getIcon (){

     return redIcon;
    
}
function run(lng,lat) {
        console.log(document.getElementById("userIdFirstWay").value);
        map.flyTo([lng, lat],14);
    }

function print(id) {
        window.location.assign("/rides/"+id);

    }

        /// MAP MODULE
        var center = [34.079, 9.701];
        // Create the map
        var map = L.map('map').setView(center, 7);
        // Set up the OSM layer 
        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);



            $(function(){

              $.ajax({
                 url: "/admin/ajax/tracks",
                type: 'GET',
            
                
               success: function(data) {
     
                $.each(data['data'], function( key, track ) {
                    console.log( getIcon(track['status']));
                    console.log(key);
                    L.marker( [track['lat'],track['lng']],{icon: getIcon(track['status'])} )
                     .bindPopup( `<b>Velo n°:</b>${track['id']}  <br/><b>Longtitude :</b>${track['lng']}  <br/>  <b> Latitude </b>  ${track['lat']} <br/> <br/><div style="text-align:center;"> <button type="button" onclick="print(${track['id']})" class="edit btn btn-outline-secondary btn-pills waves-effect waves-themed" >View Tracking</button></div>` )
                     .on('click', function (e) {
                     map.flyTo([track['lat'],track['lng']], 10) }).addTo(map);
                })
              },
               error: function(data) {

            }

   
        });
    })

    
    </script>



</div>


</div>
@endsection