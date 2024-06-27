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
                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Wisata {{ $wisata->nama_wisata}}</h1>
          </div>
          <!-- End Col -->

        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->	  

      <div class="row">
        <div class="col-lg-12 mb-3 mb-lg-0">      
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
            <form action="{{ route('wisata.prosesupdate', $wisata->id)}}" method="post" enctype="multipart/form-data">
              @csrf		              
			   @method('PUT')  	              
				<div class="row">
				  <label class="col-sm-3 col-form-label">Nama Wisata</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{ $wisata->nama_wisata }}" required name="nama_wisata">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Alamat Wisata</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required value=" {{ $wisata->alamat_wisata }}" name="alamat_wisata">
				  </div>
				</div>
				<br>	
				<div class="row">
				  <label class="col-sm-3 col-form-label">Kecamatan Wisata</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required value="{{ $wisata->kecamatan_wisata }}" name="kecamatan_wisata">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Daerah Wisata</label>
				  <div class="col-sm-9">
				  <select class="form-control" name="daerah_wisata">
				  <option selected value="{{ $wisata->foreign_daerah->id }}">{{ $wisata->foreign_daerah->nama_daerah }}</option>
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
                    <input id="jumlah_pengeluaran" required value="{{$wisata->biaya_tiket}}" type="text" name="biaya_tiket" 
                    class="form-control" data-inputmask="'alias': 'numeric','prefix' : 'Rp. ','digits' : 2, 'GroupSeparator':',', 'autoGroup' : false, 'rightAlign' : false, 'removeMaskOnSubmit' : true, 'autoUnmask' : true">      
				  </div>
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Jam Buka</label>
				  <div class="col-sm-6">
					<textarea name="jam_buka"><?php echo $wisata->jam_buka;?></textarea>
				  </div>
				</div>
				<br>	
				<div class="row">
				  <label class="col-sm-3 col-form-label">Kategori Wisata</label>
				  <div class="col-sm-9">
				  <select class="form-control" name="kategori">
				  <option selected value="{{ $wisata->foreign_kategori->id }}">{{ $wisata->foreign_kategori->nama_kategori }}</option>
					@forelse ($kategori as $tampilkategori)
						<option value="{{ $tampilkategori->id }}"> {{ $tampilkategori->nama_kategori }}</option>
					@empty
						<option disabled> tidak ada data</option>
					@endforelse
				   </select>
				  </div>
				</div>
				<br>	
				<!-- <div class="row">
				  <label class="col-sm-3 col-form-label">Maps</label>
				  <div class="col-sm-9">
				  <strong class="text-info">Jika tidak ingin mengganti lokasi maps tidak perlu mengisi kembali titik maps</strong>
					<input id="latitude" name="latitude" type="hidden" value="{{$wisata->latitude}}" />
					<input id="longitude" name="longitude" type="hidden" value="{{$wisata->longitude}}" />
					<div id="map"></div>
				  </div>
				</div> -->
					<div class="row">
				  <label class="col-sm-3 col-form-label">Latitude</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{$wisata->latitude}}" required name="latitude">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Longitude</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{$wisata->longitude}}" required name="longitude">
				  </div>
				</div>	
				<div class="row">
					<label class="col-sm-3 col-form-label">Warna Zonasi</label>
					<div class="col-sm-9">
					  <input type="color" class="form-control" value="{{$wisata->warna_zonasi}}" required name="warna_zonasi" placeholde="contoh : #FFFFFF ">
					</div>
				  </div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Fasilitas</label>
				  <div class="col-sm-9">
					<select id="select-state" class="form-select" name="fasilitas[]" multiple placeholder="Pilih Fasilitas (Max 10)...." autocomplete="off">
					<option value="{{ $wisata->fasilitas }}" selected>{{ $wisata->fasilitas }}</option>
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
					<input type="file" class="form-control" name="gambar_wisata">
					<strong class="text-info"><a href="{{ url ('gambarwisata/') }}/{{ $wisata->gambar_wisata }}" target="_blank">Gambar/Tumbnail Sekarang: {{ $wisata->gambar_wisata }}</a></strong>
                                    @error('gambar_wisata')
									<span class="badge badge-danger" role="alert"> <strong class="text-danger">{{ $message }}</strong></span>
                                     @enderror    					
					</div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Link Traveloka</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{$wisata->link_traveloka}}" name="link_traveloka" placeholder="Link Traveloka Jika Ada">
				  </div>
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label">Penjelasan/Deskripsi Wisata</label>
				  <div class="col-sm-9">
					<textarea name="deskripsi_tempat"><?php echo $wisata->deskripsi_tempat;?></textarea>
				  </div>
				</div>
				<br>				
				<div class="row">
				  <label class="col-sm-3 col-form-label"></label>
				  <div class="col-sm-9">
					<button class="btn btn-primary" type="submit">Update</button>
				  </div>
				</div>				
            </form>					
            </div>
            <!-- End Body -->
          </div>
          </div>
          </div>
          <!-- End Card -->
		           <!-- End Card -->
				            <!-- End Card -->
							<br>
							<br>

  <div class="row">
        <div class="col-lg-6 mb-3 mb-lg-0">      
          <!-- Card -->
          <div class="card">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">
                List Gambar
              </h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
			<div class="row">
			@forelse ($images as $image)     
				<div class="col-lg-4" style="margin-bottom:16px;" align="center">
				<img src="{{ url ('gambarwisata/') }}/{{ $image->nama_file }}" class="img-thumbnail" style="img-fluid" />			
<form action="{{ route('dropzone.hapus', $image->id) }}" method="post">
																			@csrf
																			@method('DELETE')				
				<button type="submit" class="btn btn-link">Remove</submit>		
</form>				
			</div>	
			@empty
			<p class="text-center">Tidak ada data </p>                                           
			@endforelse			
		    </div>		
			</div>	
            <!-- End Body -->
          </div>
          <!-- End Card -->
		  
        </div>
		
        <div class="col-lg-6 mb-3 mb-lg-0">      
          <!-- Card -->
          <div class="card">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">
                Tambah Gambar 
              </h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
				<form action="{{ route('dropzone.upload')}}" method="post" id="image-upload" class="dropzone" enctype="multipart/form-data">
				  @csrf   
				  <input type="hidden" class="form-control" name="idwisata" value="{{$wisata->id}}">
				</form>           
		    </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
		  
        </div>		
		  
		  
        </div>

		
		
       </div>
       </div>
      <!-- End Row -->	  

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
</script>    


<script type="text/javascript">

    Dropzone.options.dropzoneForm = {
        autoProcessQueue : false,
        acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

        init:function(){
            var submitButton = document.querySelector("#submit-all");
            myDropzone = this;

            submitButton.addEventListener('click', function(){
                myDropzone.processQueue();
            });

            this.on("complete", function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                {
                    var _this = this;
                    _this.removeAllFiles();
                }
            });

        }

    };



</script> -->
@include('layouts.component.footer')
