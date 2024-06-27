@include('layouts.component.header')
<style>
.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}
.l-bg-cherry {
    background: linear-gradient(to right, #493240, #f09) !important;
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #373b44, #4286f4) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #a86008, #ffba56) !important;
    color: #fff;
}

.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.card .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -5px;
    top: 20px;
    opacity: 0.1;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}
</style>
  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">

	
<div class="container">
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0 text-white">Jumlah Daerah</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex text-white align-items-center mb-0">
                                {{$countdaerah}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                    <div class="mb-4">
                        <h5 class="text-white card-title mb-0">Jumlah Wisata</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex text-white align-items-center mb-0">
                                {{$countwisata}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0 text-white">Jumlah Fasilitas</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex text-white align-items-center mb-0">
                                {{$countfasilitas}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title text-white mb-0">Jumlah Kategori</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex text-white align-items-center mb-0">
                                {{$countkategori}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header card-header-content-between">
          <h4 class="card-header-title">Maps</h4>
<br>
<br><br>
<br>
        </div>
        <!-- End Header -->

        <!-- End Body -->

        <!-- Vector Map -->
        <div class="jsvectormap-custom-wrapper">
          <div id="map"></div>
        </div>
        <!-- End Vector Map -->
      </div>
      <!-- End Card -->
  
    </div>
    <!-- End Content -->
	  
	<!-- End Content -->
<!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
		<p class="fs-6 mb-0">&copy; Pariwisata Kota Tomohon</p>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <script>
  
	var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
		});

	var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/satellite-v9'
		});


	var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		});

	var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/dark-v10'
		});  
  
	  var map = L.map('map').setView([1.3225758416471434, 124.83909045450656], 11);
	  const apiKey = "AAPKe1e02d452ac74e9b9a57913d49e6ca73XntLgl_BvHud8Lw7nn-265FcxkM-UOu2yJhz4CRUaUda6WCx5pElHcaF15IvkHoL";
	  
	  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
	  }).addTo(map);
	  
	  var baseMaps = {
		"Light": peta1,
		"Satelite": peta2,
		"Streets": peta3,
		"Dark": peta4
	};

	var layerControl = L.control.layers(baseMaps).addTo(map);

	  @foreach ($maps as $tampilmaps)  
	  var marker = L.marker([{{ $tampilmaps->latitude }}, {{ $tampilmaps->longitude }}]).addTo(map).bindPopup("<div class='card'><img class='card-img-top' src='{{ url ('gambarwisata/') }}/{{ $tampilmaps->gambar_wisata }}' alt='gambar_wisata'><div class='card-body'><a href='{{ route ('homepage.detailwisata',$tampilmaps->id) }}'>{{ $tampilmaps->nama_wisata}} ({{ $tampilmaps->foreign_kategori->nama_kategori}})</a> </div></div>");
	  @endforeach
  
     
        function drawZone(){
            // alert("Called Draw Zone");
            
            let layers = [];
            let layerCoords = [];
            let layer = [];
            let zoneColor = '';
            var polygon;
            @foreach($zonasi as $z)
                layerCoords = {!!$z->zone_collections!!};
                layer = [];
                zoneColor = '{!!$z->warna!!}';
                layerCoords.forEach((latlng)=>{
                    layer.push([latlng.lat,latlng.lng]);
                });
                polygon = L.polygon(layer,{color:zoneColor}).addTo(map).bindPopup("<div class='card' ><img class='card-img-top' src='{{ url ('gambarwisata/') }}/{{ $z->gambar }}' alt='gambar_wisata' style='object-fit:cover;height:150px' ><div class='card-body' style='font-size: 16px;'><p style='display:block;width:100%'>{{$z->wisata}}</p><a href='#' class='btn btn-success btn-sm'>Detail</a> </div></div>");;
                // polygon.on('click',function(){
                //     map.fitBounds(this.getBounds());
                // });
            @endforeach
        }
        @if(count($zonasi)>0)
            drawZone();
        @endif
  
</script>
@include('layouts.component.footer')
