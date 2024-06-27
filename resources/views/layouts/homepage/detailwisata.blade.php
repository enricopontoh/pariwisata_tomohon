@include('layouts.component.headerhomepage')
    <main id="ts-main">
	
        <!--PAGE TITLE
            =========================================================================================================-->
        <section id="page-title" class="border-bottom ts-white-gradient">
            <div class="container">

                <div class="d-block d-sm-flex justify-content-between">

                    <!--Title-->
                    <div class="ts-title mb-0">
                        <h1>{{ $datawisata->nama_wisata }}</h1>
                        <h5 class="ts-opacity__90">
                            <i class="fa fa-map-marker text-primary"></i>
                            {{ $datawisata->foreign_daerah->nama_daerah }}
                        </h5>
                    </div>

                    <!--Price-->
                    <h3>
                        <span class="badge badge-primary p-3 font-weight-normal ts-shadow__sm">@currency($datawisata->biaya_tiket)</span>
                    </h3>

                </div>

            </div>
        </section>

        <!--CONTENT
            =========================================================================================================-->
        <section id="content">
            <div class="container">
                <div class="row flex-wrap-reverse">

                    <!--LEFT SIDE
                        =============================================================================================-->
                    <div class="col-md-5 col-lg-4">

                        <!--DETAILS
                            =========================================================================================-->
                        <section id="location">

                            <h3>Lokasi</h3>

                            <div class="ts-box p-0">
                                <div class="ts-map ts-map__detail" id="map"></div>
                                <div class="p-3 ts-text-color-light">
                                    <i class="fa fa-map-marker mr-2"></i>
                                    1496 Apple Lane
                                    San Jose, IL 62682
                                </div>
                            </div>

                        </section>
                    </div>
                    <!--end col-md-4-->

                    <!--RIGHT SIDE
                        =============================================================================================-->
                    <div class="col-md-7 col-lg-8">

                        <section id="gallery-carousel position-relative">

                            <h3>Gambar</h3>

                            <div class="owl-carousel ts-gallery-carousel" data-owl-auto-height="1" data-owl-dots="1" data-owl-loop="1">

                                <!--Slide-->
                                <div class="slide">
                                    <div class="ts-image" data-bg-image="{{ url ('gambarwisata/') }}/{{ $datawisata->gambar_wisata }}">
                                        <a href="{{ url ('gambarwisata/') }}/{{ $datawisata->gambar_wisata }}" class="ts-zoom popup-image"><i class="fa fa-search-plus"></i>Zoom</a>
                                    </div>
                                </div>

                            </div>

                        </section>
					
                        <section id="gallery" class="mb-5">

                            <!--Title-->
                            <h3 class="text-muted border-bottom">Gallery</h3>

                            <!--Uploaded images-->
                            <div class="file-uploaded-images">
								@forelse ($datagallery as $tampildatagallery)
                                <!--Image-->
                                <div class="image">
                                    <img src="{{ url ('gambarwisata/') }}/{{ $tampildatagallery->nama_file }}" alt="">
                                </div>
								@empty
											<h3 class="text-center">Tidak ada foto gallery</h3>
								@endforelse 

                            </div>

                        </section>					
					
                        <!--DESCRIPTION
                            =========================================================================================-->
                        <section id="description">

                            <h3>{{ $datawisata->nama_wisata }}</h3>

                            <p>
                                <?php echo $datawisata->deskripsi_tempat;?>
                            </p>

                            <dl class="ts-description-list__line mb-0 ts-column-count-1">

                                <dt>Nama Wisata:</dt>
                                <dd class="border-bottom pb-2">{{ $datawisata->nama_wisata }}</dd>

                                <dt>Alamat Wisata:</dt>
                                <dd class="border-bottom pb-2">{{ $datawisata->alamat_wisata }}</dd>

                                <dt>Kategori:</dt>
                                <dd class="border-bottom pb-2">{{ $datawisata->foreign_kategori->nama_kategori }}</dd>

                                <dt>Jam Buka:</dt>
                                <dd class="border-bottom pb-2"><?php echo $datawisata->jam_buka;?></dd>

                                <dt>Tiket:</dt>
                                <dd class="border-bottom pb-2">@currency($datawisata->biaya_tiket)</dd>

                                <dt>Fasilitas:</dt>
                                <dd class="border-bottom pb-2">{{ $datawisata->fasilitas }}</dd>

                                <!-- <dt>Longitude:</dt>
                                <dd class="border-bottom pb-2">{{ $datawisata->longitude }}</dd>

                                <dt>Latitude:</dt>
                                <dd class="border-bottom pb-2">{{ $datawisata->latitude }}</dd> -->

                                <dt>Tanggal diupload:</dt>
                                <dd class="border-bottom pb-2">{{ $datawisata->created_at }}</dd>

                                <!-- <dt>Tanggal diedit:</dt>
                                <dd class="border-bottom pb-2">{{ $datawisata->updated_at }}</dd> -->

                            </dl>

                        </section>
                       
                            <a href="#" class="ts-box d-block py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse-floor-2">
                                Route Map (Ijinkan Website Mengakses Lokasi Anda Untuk Mengaktifkan Fitur Lokasi)
                                <br>
									<div id="mapke2">
								<br>
                            </a>

                        </section>	
					
						
                    </div>
                    <!--end col-md-8-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

    </main>
    <!--end #ts-main-->
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
  
	  var map = L.map('map').setView([{{ $datawisata->latitude }}, {{ $datawisata->longitude }}], 11);
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
	  
	var marker = L.marker([{{ $datawisata->latitude }}, {{ $datawisata->longitude }}]).addTo(map).bindPopup("<div class='card'><img class='card-img-top' src='{{ url ('gambarwisata/') }}/{{ $datawisata->gambar_wisata }}' alt='gambar_wisata'><div class='card-body'><a href='{{ route ('homepage.detailwisata',$datawisata->id) }}'>{{ $datawisata->nama_wisata}} ({{ $datawisata->foreign_kategori->nama_kategori}})</a> </div></div>");
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
                polygon = L.polygon(layer,{color:zoneColor}).addTo(map).bindPopup("<div class='card' ><img class='card-img-top' src='{{ url ('gambarwisata/') }}/{{ $z->gambar }}' alt='gambar_wisata' style='object-fit:cover;height:150px' ><div class='card-body' style='font-size: 16px;'><a href='{{ route ('homepage.detailwisata',$z->id_wisata) }}'>{{ $z->wisata}} ({{ $z->daerah}})</a> </div></div>");;
                // polygon.on('click',function(){
                //     map.fitBounds(this.getBounds());
                // });
            @endforeach
        }
        @if(count($zonasi)>0)
            drawZone();
        @endif
</script>	

<script>
var mapke2 = L.map('mapke2').setView([1.3225758416471434, 124.83909045450656], 11);
navigator.geolocation.getCurrentPosition(function(location) {
  var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

  

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mapke2);
    L.Routing.control({
			waypoints: [
				L.latLng(latlng), //titik utama
				L.latLng({{ $datawisata->latitude }}, {{ $datawisata->longitude }}) //titik tujuan
			],
			routeWhileDragging: false
		}).addTo(mapke2);	
});
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
                polygon = L.polygon(layer,{color:zoneColor}).addTo(mapke2).bindPopup("<div class='card' ><img class='card-img-top' src='{{ url ('gambarwisata/') }}/{{ $z->gambar }}' alt='gambar_wisata' style='object-fit:cover;height:150px' ><div class='card-body' style='font-size: 16px;'><a href='{{ route ('homepage.detailwisata',$z->id_wisata) }}'>{{ $z->wisata}} ({{ $z->daerah}})</a> </div></div>");;
                // polygon.on('click',function(){
                //     map.fitBounds(this.getBounds());
                // });
            @endforeach
        }
        @if(count($zonasi)>0)
            drawZone();
        @endif
</script>

@include('layouts.component.footerhomepage')