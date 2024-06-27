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
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Daerah</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Daerah {{ $daerah->nama_daerah }}</h1>
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
                Form Edit Daerah {{ $daerah->nama_daerah }}
              </h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
            <form action="{{ route('daerah.prosesupdate', $daerah->id) }}" method="post" enctype="multipart/form-data">
              @csrf		              
			   @method('PUT')  
				<div class="row">
				  <label class="col-sm-3 col-form-label">Nama Daerah</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" value="{{ $daerah->nama_daerah }}" required name="nama_daerah">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Gambar/Tumbnail</label>
				  <div class="col-sm-9">
					<input type="file" class="form-control" name="gambar">
					<strong class="text-info"><a href="{{ url ('gambardaerah/') }}/{{ $daerah->gambar }}" target="_blank">Gambar/Tumbnail Sekarang: {{ $daerah->gambar }}</a></strong>
                                    @error('gambar')
									<span class="badge badge-danger" role="alert"> <strong class="text-danger">{{ $message }}</strong></span>
                                     @enderror    					
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Penjelasan/Deskripsi Daerah</label>
				  <div class="col-sm-9">
					<textarea name="penjelasan_daerah">{{ $daerah->penjelasan_daerah }}</textarea>
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

@include('layouts.component.footer')
