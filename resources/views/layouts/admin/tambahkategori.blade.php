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
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Kategori</h1>
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
                Form Tambah Kategori 
              </h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
            <form action="{{ route('kategori.prosestambah')}}" method="post">
              @csrf		              
				<div class="row">
				  <label class="col-sm-3 col-form-label">Nama Kategori</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="nama_kategori">
				  </div>
				</div>
				<br>
				<div class="row">
				  <label class="col-sm-3 col-form-label">Hastag Kategori</label>
				  <div class="col-sm-9">
					<input type="text" class="form-control" required name="hastag_kategori">
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

@include('layouts.component.footer')
