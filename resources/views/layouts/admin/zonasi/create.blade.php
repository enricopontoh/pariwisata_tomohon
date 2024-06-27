@include('layouts.component.header')
<style>
    #map {
        height: 500px;
        ,
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
    }

</style>
<style>
    #mapke2 {
        height: 500px;
        ,
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
    }

</style>
  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Zonasi Wisata</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Zonasi Wisata</h1>
          </div>
          <!-- End Col -->

        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->	  

      <div class="row">
        <div class="col-lg-8 mb-3 mb-lg-0">      
          <!-- Card -->
          <div class="card">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">
                Form Tambah Zonasi Wisata 
              </h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
                <form action="{{ route('zonasi.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <label class="col-sm-3 col-form-label">Daerah</label>
                        <div class="col-sm-9">
                            <select class="form-control" required name="id_daerah"
                                onchange="javascript:getWisata(this.value)">
                                <option selected disabled>Pilih Daerah</option>
                                @foreach ($daerah as $d)
                                <option value="{{ $d->id }}">{{$d->nama_daerah}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label class="col-sm-3 col-form-label">Tempat Wisata</label>
                        <div class="col-sm-9">
                            <select class="form-control" required name="id_wisata" id="id_wisata" onchange="javascript:changeColorAndPoint(this.value)">
                                <option selected disabled>Pilih Tempat Wisata</option>
                                @foreach ($wisata as $p)
                                <option value="{{ $p->id }}">{{$p->nama_wisata}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label class="col-sm-3 col-form-label">Pilih Titik Zonasi di Map</label>
                        <div class="col-sm-12">
                            <div id="map"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label class="col-sm-3 col-form-label">Latitude Longitude</label>
                        <div class="col-sm-12">
                            <input type="hidden" id="value_zone" name="zone_collections" />
                            <div id="zone_collections">

                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="col-sm-9">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="button" onclick="javascript:getLatLng()">Get Lat
                            Lng</button>
                    </div>

                </form>			
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        
		
       </div>
      <!-- End Row -->	  
	  
	<!-- End Content -->
<!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; SI Pariwisata Tomohon</p>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
  
  <script src="{{url('assets/plugins/tinymce/tinymce.min.js')}}"></script>
  <script>tinymce.init({ selector:'textarea' });</script>   
 <!--  <script>
  var map = L.map('map').setView([1.3225758416471434, 124.83909045450656], 12);
	const apiKey = "AAPKe1e02d452ac74e9b9a57913d49e6ca73XntLgl_BvHud8Lw7nn-265FcxkM-UOu2yJhz4CRUaUda6WCx5pElHcaF15IvkHoL";
  
	var rememberLat = document.getElementById('latitude').value;
	var rememberLong = document.getElementById('longitude').value;
  
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  var searchControl = L.esri.Geocoding.geosearch({
    position: 'topright',
    placeholder: 'Enter an address or place e.g. 1 York St',
    useMapBounds: false,
    providers: [L.esri.Geocoding.arcgisOnlineProvider({
      apikey: apiKey, // replace with your api key - https://developers.arcgis.com
      nearby: {
        lat: -33.8688,
        lng: 151.2093
      }
    })]
  }).addTo(map);

  var results = L.layerGroup().addTo(map);

  searchControl.on('results', function (data) {
    results.clearLayers();
    for (var i = data.results.length - 1; i >= 0; i--) {
      results.addLayer(L.marker(data.results[i].latlng));
    }
  });
  
	var marker = L.marker([rememberLat, rememberLong],{
	draggable: true
	}).addTo(map);
	marker.on('dragend', function (e) {
	updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
	});
	map.on('click', function (e) {
	marker.setLatLng(e.latlng);
	updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
	});
	function updateLatLng(lat,lng,reverse) {
	if(reverse) {
	marker.setLatLng([lat,lng]);
	map.panTo([lat,lng]);
	} else {
	document.getElementById('latitude').value = marker.getLatLng().lat;
	document.getElementById('longitude').value = marker.getLatLng().lng;
	map.panTo([lat,lng]);
	}
	}  
</script>   -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    let dataWisata = [];
    function getWisata(id) {
        $.get("{{url('api/get_wisata')}}/" + id, function (data) {
            // var element = JSON.parse(data);
            //   alert(JSON.stringify(data) + ":" + "{{url('api/get_reporter')}}/" + id);
            createOptions('id_wisata', data['data']);
            dataWisata = [];
            for (var i = 0; i < data['data'].length; i++) {
                dataWisata.push({'id':data['data'][i]['id'],'gps':data['data'][i]['latitude']+","+data['data'][i]['longitude'],'color':data['data'][i]['warna_zonasi']});
            }
            

        });
    }

    function createOptions(id, data) {
        var selectElement = document.getElementById(id);
        while (selectElement.options.length) {
            selectElement.remove(0);
        }
        for (let i = 0; i < data.length; i++) {
            var tmp = new Option(data[i]["nama_wisata"], data[i]["id"]);
            selectElement.options.add(tmp);
        }
    }

</script>

<!-- Load Leaflet from CDN -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<!-- Load Esri Leaflet from CDN -->
<script src="https://unpkg.com/esri-leaflet@3.0.2/dist/esri-leaflet.js"
    integrity="sha512-myckXhaJsP7Q7MZva03Tfme/MSF5a6HC2xryjAM4FxPLHGqlh5VALCbywHnzs2uPoF/4G/QVXyYDDSkp5nPfig=="
    crossorigin=""></script>

<!-- Load Esri Leaflet Geocoder from CDN -->
<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
<script src="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.js"
    integrity="sha512-vZbMwAf1/rpBExyV27ey3zAEwxelsO4Nf+mfT7s6VTJPUbYmD2KSuTRXTxOFhIYqhajaBU+X5PuFK1QJ1U9Myg=="
    crossorigin=""></script>
<script src='https://unpkg.com/wicg-inert@latest/dist/inert.min.js'></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet-draw@1.0.2/dist/leaflet.draw.css" />
<script src="https://unpkg.com/leaflet-draw@1.0.2/dist/leaflet.draw-src.js"></script>


<script>
    String.prototype.removeCharAt = function (i) {
        var tmp = this.split(''); // convert to an array
        tmp.splice(i - 1, 1); // remove 1 element from the array (adjusting for non-zero-indexed counts)
        return tmp.join(''); // reconstruct the string
    }
    var cloudmadeUrl = 'http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png';
    cloudmade = new L.TileLayer(cloudmadeUrl, {
        maxZoom: 18
    });
   
    


    var map = L.map('map', {
        layers: [cloudmade]
    }).setView([1.3234339197073528, 124.84063540933153], 12);
    const apiKey =
        "AAPKe1e02d452ac74e9b9a57913d49e6ca73XntLgl_BvHud8Lw7nn-265FcxkM-UOu2yJhz4CRUaUda6WCx5pElHcaF15IvkHoL";

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    


    var editableLayers = L.featureGroup().addTo(map);
    var tmp = [];
    let zoneColor = "#97009c";
    var drawControl = new L.Control.Draw({
        edit: {
            featureGroup: editableLayers
        },
        draw: {
          polygon: {
            allowIntersection: false, // Restricts shapes to simple polygons
            drawError: {
              color: '#e1e100', // Color the shape will turn when intersects
              message: '<strong>Oh snap!<strong> you can\'t draw that!' // Message that will show when intersect
            },
            shapeOptions: {
              color: '#97009c'
            }
          },
          marker:false,
          rectangle:false,
          circle:false,
          polyline:false,
          circlemarker:false,
          area:false
        }
    }).addTo(map);


    map.on(L.Draw.Event.CREATED, function (e) {
        var type = e.layerType,
            layer = e.layer;
        var LatLngsString = JSON.stringify(layer.getLatLngs());
        LatLngsString = LatLngsString.removeCharAt(1);
        LatLngsString = LatLngsString.removeCharAt(LatLngsString.length-1);
        var txt = document.getElementById('zone_collections');
        txt.innerHTML = LatLngsString;
        var val = document.getElementById('value_zone');
        val.value = LatLngsString;
        layer.setStyle({color:zoneColor});
        // alert(JSON.stringify(layer.getLatLngs()));
        editableLayers.addLayer(layer);
    });
    map.on('draw:edited',function(e){
      var layers = e.layers;
      layers.eachLayer(function(layer){
        var LatLngsString = JSON.stringify(layer.getLatLngs());
        LatLngsString = LatLngsString.removeCharAt(1);
        LatLngsString = LatLngsString.removeCharAt(LatLngsString.length-1);
        var txt = document.getElementById('zone_collections');
        txt.innerHTML = LatLngsString;
        var val = document.getElementById('value_zone');
        val.value = LatLngsString;
      });
      
    });
    //         map.on('draw:editvertex', function(e) {
    //     for (thisLayer in e.target._layers) {
    //         if (e.target._layers.hasOwnProperty(thisLayer)) {
    //             if (e.target._layers[thisLayer].hasOwnProperty("edited")) {
    //                 console.log("we think we found the polygon?");
    //                 console.log(e.target._layers[thisLayer]);
    //                 alert(JSON.stringify(e.target._layers[thisLayer]));
    //                 // the updated Polygon array points are here:
    //                 newPolyLatLngArray = e.target._layers[thisLayer].editing.latlngs[0];
    //             }
    //         }
    //     };
    // });

    function getLatLng() {
        alert(JSON.stringify(editableLayers.layer));
    }
    var marker;
    function changeColorAndPoint(data){
        // alert(data+":"+dataWisata.length);
        for(var i=0;i<dataWisata.length;i++){
            // alert(` Data ${data} : Data Wisata : ${dataWisata[i]['id']}`);
            if(data==dataWisata[i]['id']){
                var tmp = dataWisata[i]["gps"].split(',');
                if(marker!==undefined){
                    // alert('Marker : '+marker);
                    map.removeLayer(marker);
                    marker = undefined;
                } 
                marker = new L.Marker(new L.LatLng(parseFloat(tmp[0]),parseFloat(tmp[1])),{draggable:false});
                map.addLayer(marker);
                
                map.panTo(new L.LatLng(parseFloat(tmp[0]),parseFloat(tmp[1])));
                zoneColor = dataWisata[i]["color"];
                // alert(`GPS : ${tmp[0]}, ${tmp[1]} : color : ${dataWisata[i]['color']}`);
                break;
            }
        }
    }

</script>
@include('layouts.component.footer')
