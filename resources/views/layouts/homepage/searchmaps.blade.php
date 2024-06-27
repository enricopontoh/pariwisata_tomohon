@include('layouts.component.headerhomepage')

    <!-- HERO SLIDER
    =================================================================================================================-->
      <section id="ts-hero" class=" mb-0">

        <!--Fullscreen mode-->
        <div class="ts-full-screen d-flex">

            <!-- MAP
            =========================================================================================================-->
            <div class="ts-map w-100 ts-z-index__1">
                <div id="map" class="h-100 ts-z-index__1">
                </div>
            </div>

            <!-- RESULTS
            =========================================================================================================-->
            <div class="ts-results__vertical ts-results__grid ts-shadow__sm w-100 h-100 scrollbar-inner bg-white ts-z-index__2">

                <!-- FORM
                =====================================================================================================-->
                <section class="ts-form__grid" data-bg-color="#f6f6f6">

                    <!--Title-->
                    <h4 class="font-weight-normal ts-text-color-light">Pencarian Wisata</h4>

                    <!--Form-->
                    <form class="ts-form ts-box mb-0" action="{{ route('homepage.cariwisata') }}" method="get">
						@csrf
                        <div class="form-row">

                            <!--Keyword-->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" placeholder="Nama Tempat Wisata">
                                </div>
                            </div>

                            <!--Category-->
                            <div class="col-md-4">
                                <select class="custom-select mb-3" id="daerah" name="daerah">
                                    <option value="" selected disabled>Daerah Wisata</option>
											@forelse ($daerah as $tampildaerah)		
											<option value="{{ $tampildaerah->id }}"> {{ $tampildaerah->nama_daerah }}</option>
											@empty
												<option disabled> tidak ada data</option>
											@endforelse									
                                </select>
                            </div>

                            <!--Status-->
                            <div class="col-md-4">
                                <select class="custom-select mb-4" id="kategori" name="kategori">
                                    <option value="" selected disabled>Kategori</option>
											@forelse ($kategori as $tampilkategori)		
											<option value="{{ $tampilkategori->id }}"> {{ $tampilkategori->nama_kategori }}</option>
											@empty
												<option disabled> tidak ada data</option>
											@endforelse	
                                </select>
                            </div>
							
                            <div class="col-md-12">
                                <!--Checkboxes-->
                                <div id="features-checkboxes" class="w-100">
                                    <h6 class="mb-3">Fasilitas</h6>

                                    <div class="ts-column-count-3">

									@forelse ($fasilitas as $tampilfasilitas)		
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_1{{ $loop->iteration }}" name="fasilitas[]" value="{{ $tampilfasilitas->fasilitas }}">
                                            <label class="custom-control-label" for="ch_1{{ $loop->iteration }}">{{ $tampilfasilitas->fasilitas }}</label>
                                        </div>									
									@empty
											<p class="text-center"> Tidak ada Data </p>
									@endforelse										

                                    </div>
                                    <!--end ts-column-count-3-->

                                </div>
                                <!--end #features-checkboxes-->
                            </div>			
			
							<div class="ts-center__vertical justify-content-between">

								<!--Submit button-->
								<div class="form-group mb-0">			<br>
									<button type="submit" class="btn btn-primary w-100" id="search-btn">Search</button>
								</div>

							</div>
						
                        </div>

                    </form>
                    <!--end ts-form-->
                </section>
                <!--end ts-form__grid-->

                <!-- TITLE and CONTROLS
                =====================================================================================================-->

                <section class="ts-center__vertical justify-content-between px-4 pt-3 pb-0">
                    <h4 class="font-weight-normal ts-text-color-light mb-0">{{$datajumlah}} Wisata ditemukan</h4>	

                </section>


                <!-- RESULTS
                =====================================================================================================-->
                <section id="ts-results" class="h-100">
                    <div class="ts-results-wrapper">
					@forelse ($wisata as $tampilwisata)  
                            <a href="{{ route ('homepage.detailwisata',$tampilwisata->id) }}" class="card ts-item ts-item__list ts-card">

                                <!--Card Image-->
                                <div class="card-img ts-item__image" data-bg-image="{{ url ('gambarwisata/') }}/{{ $tampilwisata->gambar_wisata }}"></div>

                                <!--Card Body-->
                                <div class="card-body ts-item__body">

                                    <figure class="ts-item__info">
                                        <h4>{{$tampilwisata->nama_wisata}}</h4>
                                        <aside>
                                            <i class="fa fa-map-marker mr-2"></i>
                                            {{$tampilwisata->foreign_daerah->nama_daerah}}
                                        </aside>
                                    </figure>

                                    <div class="ts-item__info-badge">@currency($tampilwisata->biaya_tiket )</div>

                                    <div class="ts-description-lists">
									<dl>
										<dt>Kategori</dt>
										<dd>{{$tampilwisata->foreign_kategori->nama_kategori}}</dd>
									</dl>
									<dl>
										<dt>Fasilitas</dt>
										<dd>{{$tampilwisata->fasilitas}}</dd>
									</dl>
                                    </div>
                                </div>

                                <!--Card Footer-->
                                <div class="card-footer ts-item__footer">
                                    <span class="ts-btn-arrow">Detail</span>
                                </div>

                            </a>
						@empty
							<h3 class="text-center">Tidak ada data</h3>
						@endforelse 					
					</div>
                </section>
            </div>
            <!--end ts-results-vertical-->

        </div>
        <!--end full-screen-->

    </section>
    <!--end ts-hero-->
	
        <section id="latest-listings" class="ts-block pt-5">
            <div class="container">

                <!--Title-->
                <div class="ts-title">
                    <h2>Wisata Terbaru</h2>
                </div>

                <!--Row-->
                <div class="row">

					@forelse ($wisataterbaru as $tampilwisataterbaru)  
                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <div class="badge badge-dark">{{$tampilwisataterbaru->foreign_kategori->nama_kategori}}</div>

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="{{ url ('gambarwisata/') }}/{{ $tampilwisataterbaru->gambar_wisata }}">
                                <figure class="ts-item__info">
                                    <h4>{{$tampilwisataterbaru->nama_wisata}}</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        {{$tampilwisataterbaru->foreign_daerah->nama_daerah}}
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">
                                    <span>@currency($tampilwisataterbaru->biaya_tiket )</span>
                                </div>
                            </a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">
                                <div class="ts-description-lists">
									<dl>
										<dt>Fasilitas</dt>
										<dd>{{$tampilwisataterbaru->fasilitas}}</dd>
									</dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="{{ route ('homepage.detailwisata',$tampilwisataterbaru->id) }}" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item ts-card-->
                    </div>
                    <!--end Item col-md-4-->
					@empty
						<h3 class="text-center">Tidak ada data</h3>
					@endforelse 
						
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

	
    </main>
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

	  @foreach ($maps_hasil as $tampilhasil)  
	  var marker = L.marker([{{ $tampilhasil->latitude }}, {{ $tampilhasil->longitude }}]).addTo(map).bindPopup("<div class='card'><img class='card-img-top' src='{{ url ('gambarwisata/') }}/{{ $tampilhasil->gambar_wisata }}' alt='gambar_wisata'><div class='card-body'><a href='{{ route ('homepage.detailwisata',$tampilhasil->id) }}'>{{ $tampilhasil->nama_wisata}} ({{ $tampilhasil->foreign_kategori->nama_kategori}})</a> </div></div>");
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
@include('layouts.component.footerhomepage')
	
