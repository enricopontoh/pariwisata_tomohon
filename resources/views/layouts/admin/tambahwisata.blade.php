@include('layouts.component.header')

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
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Wisata</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Wisata</h1>
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
                Form Tambah Wisata 
              </h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
            <form action="{{ route('wisata.prosestambah')}}" method="post" enctype="multipart/form-data">
              @csrf		              
				<div class="row">
				  <label class="col-sm-3 col-form-label">Nama Wisata</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="nama_wisata">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Alamat Wisata</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="alamat_wisata">
				  </div>
				</div>
				<br>	
				<div class="row">
				  <label class="col-sm-3 col-form-label">Kecamatan Wisata</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="kecamatan_wisata">
				  </div>
				</div>
				<br>
				<!-- <div class="row">
				  <label class="col-sm-3 col-form-label">Maps</label>
				  <div class="col-sm-9">
					<input id="latitude" name="latitude" type="hidden" />
					<input id="longitude" name="longitude" type="hidden" />
					<div id="map"></div>
				  </div>
				</div> -->
				<div class="row">
				  <label class="col-sm-3 col-form-label">Latitude</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="latitude">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Longitude</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="longitude">
				  </div>
				</div>
				<div class="row">
					<label class="col-sm-3 col-form-label">Warna Zonasi</label>
					<div class="col-sm-9">
					  <input type="color" class="form-control" value="#FFFFFF" required name="warna_zonasi" placeholde="contoh : #FFFFFF ">
					</div>
				  </div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Daerah Wisata</label>
				  <div class="col-sm-9">
				  <select class="form-control" name="daerah_wisata">
				  <option selected disabled>Pilih Daerah</option>
					@forelse ($daerah as $tampildaerah)						
						<option value="{{ $tampildaerah->id }}"> {{ $tampildaerah->nama_daerah }}</option>
					@empty
						<option disabled> tidak ada data</option>
					@endforelse
					</select>
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Biaya Tiket</label>
				  <div class="col-sm-9">
                    <input id="jumlah_pengeluaran" type="text" name="biaya_tiket" 
                    class="form-control" data-inputmask="'alias': 'numeric','prefix' : 'Rp. ','digits' : 2, 'GroupSeparator':',', 'autoGroup' : false, 'rightAlign' : false, 'removeMaskOnSubmit' : true, 'autoUnmask' : true">      
				  </div>
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Jam Buka</label>
				  <div class="col-sm-9">
					<textarea name="jam_buka"></textarea>
				  </div>
				</div>
				<br>	
				<div class="row">
				  <label class="col-sm-3 col-form-label">Kategori Wisata</label>
				  <div class="col-sm-9">
				  <select class="form-control" name="kategori">
				  <option selected disabled>Pilih Kategori</option>
					@forelse ($kategori as $tampilkategori)
						<option value="{{ $tampilkategori->id }}"> {{ $tampilkategori->nama_kategori }}</option>
					@empty
						<option disabled> tidak ada data</option>
					@endforelse
				   </select>
				  </div>
				</div>
				<br>	
				<div class="row">
				  <label class="col-sm-3 col-form-label">Fasilitas</label>
				  <div class="col-sm-9">
					<select id="select-state" class="form-select" name="fasilitas[]" multiple placeholder="Pilih Fasilitas (Max 10)...." autocomplete="off">
					@forelse ($fasilitas as $tampilfasilitas)
						<option value="{{ $tampilfasilitas->fasilitas }}"> {{ $tampilfasilitas->fasilitas }}</option>
					@empty
						<option disabled> tidak ada data</option>
					@endforelse
					</select>
				  </div>
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Gambar/Tumbnail</label>
				  <div class="col-sm-9">
					<input type="file" class="form-control" required name="gambar_wisata">
                                    @error('gambar_wisata')
									<span class="badge badge-danger" role="alert"> <strong class="text-danger">{{ $message }}</strong></span>
                                     @enderror    					
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Link Traveloka</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" name="link_traveloka" placeholder="Link Traveloka Jika Ada">
				  </div>
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Penjelasan/Deskripsi Wisata</label>
				  <div class="col-sm-9">
					<textarea name="deskripsi_tempat"></textarea>
				  </div>
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<button class="btn btn-primary" type="submit">Submit</button>
				  </div>
				</div>				
            </form>					
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <div class="col-lg-4 mb-3 mb-lg-0">      
          <!-- Card -->
          <div class="card">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">
				Upload Gambar Wisata
              </h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
            <form action="{{ route('wisata.prosestambahgambar')}}" method="post" id="image-upload" class="dropzone" enctype="multipart/form-data">
              @csrf   
			  <input type="hidden" class="form-control" name="idterakhir" value="{{$datafix}}">
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
@include('layouts.component.footer')
