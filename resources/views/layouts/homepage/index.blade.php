@include('layouts.component.headerhomepage')

    <!-- HERO SLIDER
    =================================================================================================================-->
    <section id="ts-hero" class="ts-hero-slider ts-bg-black mb-0 ">

        <div class="ts-min-h__70vh w-100">

            <!--Owl Carousel-->
            <div class="owl-carousel" data-owl-loop="1" data-owl-nav="1">

			
			@forelse ($slide as $tampilslide)  
                <!-- SLIDE
                =====================================================================================================-->
                <div class="ts-slide" data-bg-image="{{ url ('gambarwisata/') }}/{{ $tampilslide->gambar_wisata }}">
                    <div class="ts-slide-description h-100 ts-center__vertical pb-0">
                        <div class="container">

                            <!--Title-->
                            <h1 class="mb-3">{{$tampilslide->nama_wisata}}</h1>

                            <!--Location-->
                            <figure class="ts-opacity__50">
                                <i class="fa fa-map-marker mr-2"></i>
								{{$tampilslide->foreign_daerah->nama_daerah}}
                            </figure>

                            <!--Features-->
                            <div class="ts-description-lists d-none d-md-block ts-responsive-block">
                                <dl>
                                    <dt>Kategori</dt>
                                    <dd>{{$tampilslide->foreign_kategori->nama_kategori}}</dd>
                                </dl>
                                <dl>
                                    <dt>Fasilitas</dt>
                                    <dd>{{$tampilslide->fasilitas}}</dd>
                                </dl>
                                <dl>
                                    <dt>Tiket</dt>
                                    <dd>@currency($tampilslide->biaya_tiket )</dd>
                                </dl>
                            </div>

                            <a href="{{ route ('homepage.detailwisata',$tampilslide->id) }}" class="btn btn-primary ts-btn-arrow">Detail Wisata</a>

                        </div>
                    </div>
                </div>
                <!--end slide-->
			@empty
				<h3 class="text-center">Tidak ada data</h3>
			@endforelse 

            </div>
            <!--end owl-carousel-->

            <!--Hero slider control-->
            <div class="ts-hero-slider-control">
                <div class="container" id="owl-control"></div>
            </div>

        </div>

    </section>
    <!--end ts-hero-->

    <!--*********************************************************************************************************-->
    <!-- MAIN ***************************************************************************************************-->
    <!--*********************************************************************************************************-->

    <main id="ts-main">

        <!-- FEATURED PROPERTIES
        =============================================================================================================-->
        <section id="featured-properties" class="ts-block pt-5">
            <div class="container">

                <!--Title-->
                <div class="ts-title text-center">
                    <h2>Wisata Paling Banyak Dilihat</h2>
                </div>

                <div class="row">

					@forelse ($wisatadilihat as $tampilwisatadilihat)  
                    <!--Item-->
                    <div class="col-sm-6 col-lg-4">

                        <div class="card ts-item ts-card ts-item__lg">

                            <!--Ribbon-->
                            <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>

                            <!--Card Image-->
                            <a href="{{ route ('homepage.detailwisata',$tampilwisatadilihat->id) }}" class="card-img ts-item__image" data-bg-image="{{ url ('gambarwisata/') }}/{{ $tampilwisatadilihat->gambar_wisata }}">
                                <div class="ts-item__info-badge">@currency($tampilwisatadilihat->biaya_tiket )</div>
                                <figure class="ts-item__info">
                                    <h4>{{$tampilwisatadilihat->nama_wisata}}</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        {{$tampilwisatadilihat->foreign_daerah->nama_daerah}}
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
									<dl>
										<dt>Kategori</dt>
										<dd>{{$tampilwisatadilihat->foreign_kategori->nama_kategori}}</dd>
									</dl>
									<dl>
										<dt>Fasilitas</dt>
										<dd>{{$tampilwisatadilihat->fasilitas}}</dd>
									</dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="{{ route ('homepage.detailwisata',$tampilwisatadilihat->id) }}" class="card-footer">
                                <a href="{{ route ('homepage.detailwisata',$tampilwisatadilihat->id) }}" class="btn btn-primary ts-btn-arrow">Detail Wisata</a>
                            </a>

                        </div>
                        <!--end ts-item-->
                    </div>
                    <!--end Item col-md-4-->
					@empty
						<h3 class="text-center">Tidak ada data</h3>
					@endforelse 
                </div>
                <!--end row-->

                <!--All properties button-->
                <div class="text-center mt-3">
                    <a href="{{ route('homepage.wisata')}}" class="btn btn-outline-dark ts-btn-border-muted">Tampil Semua WIsata</a>
                </div>

            </div>
            <!--end container-->
        </section>

        <!-- SUBSCRIBE
        =============================================================================================================-->
        <section id="subscribe" class="ts-block text-white ts-separate-bg-element" data-bg-image="https://cdn.idntimes.com/content-images/community/2021/02/lihaga-island-159d3fc451d391961a73204b1b20b3cd-b855f60bcd880c73dadde686b615c67d_600x400.jpg" data-bg-color="#000" data-bg-image-opacity=".3">
            <div class="container">
                <div class="offset-lg-1 col-lg-10">

                    <h3 class="font-weight-light">Data Website</h3>

                    <div class="ts-promo-numbers">
                        <div class="row">

                            <div class="col-sm-4">
                                <div class="ts-promo-number">
                                    <h2>{{ $countwisata }}</h2>
                                    <h4 class="mb-0 ts-opacity__50">Wisata</h4>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-3-->

                            <div class="col-sm-4">
                                <div class="ts-promo-number">
                                    <h2>{{ $countdaerah }}</h2>
                                    <h4 class="mb-0 ts-opacity__50">Daerah</h4>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-3-->

                            <div class="col-sm-4">
                                <div class="ts-promo-number">
                                    <h2>{{ $countkategori }}</h2>
                                    <h4 class="mb-0 ts-opacity__50">Kategori</h4>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-3-->
							
                        </div>
                        <!--end row-->
                    </div>

                </div>
            </div>
        </section>

        <!--LATEST LISTINGS
        =============================================================================================================-->
        <section id="latest-listings" class="ts-block bg-white">
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
                            <a href="{{ route ('homepage.detailwisata',$tampilwisataterbaru->id) }}" class="card-img ts-item__image" data-bg-image="{{ url ('gambarwisata/') }}/{{ $tampilwisataterbaru->gambar_wisata }}">
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

        <!--SUBMIT BANNER
        =============================================================================================================-->
        <section id="submit-banner" class="ts-block">
            <div class="container">


               <figure class="h1 font-weight-light mb-2">Maps Pariwisata Tomohon</figure>

				<div id="map"></div>

            </div>
        </section>

        <!--PARTNERS
        =============================================================================================================-->
        <section id="partners" class="ts-block pt-4 pb-0">
            <div class="container">

                <!--Logos-->
                <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners py-3">

                    <a href="#">
                        <img src="assets/img/logo-01.png" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/logo-02.png" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/logo-03.png" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/logo-04.png" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/logo-05.png" alt="">
                    </a>

                </div>
                <!--end logos-->
            </div>
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
	
