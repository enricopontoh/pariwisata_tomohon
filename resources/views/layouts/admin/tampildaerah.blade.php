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
                <li class="breadcrumb-item active" aria-current="page">Tampil Data</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Daerah</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <a class="btn btn-primary" href="{{ route ('daerah.tambah') }}">
              <i class="bi-person-plus-fill me-1"></i> Tambah Daerah
            </a>
          </div>
          <!-- End Col -->		  
		  
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="card">
  <!-- Header -->
  <div class="card-header">
    <div class="row justify-content-between align-items-center flex-grow-1">
      <div class="col-12 col-md">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="card-header-title">Data Daerah</h5>
        </div>
      </div>

      <div class="col-md-auto">
        <!-- Filter -->
        <div class="row align-items-center">

          <div class="col">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>
                <input id="datatableWithFilterSearch" type="search" class="form-control" placeholder="Search Data" aria-label="Search data">
              </div>
              <!-- End Search -->
            </form>
          </div>
        </div>
        <!-- End Filter -->
      </div>
    </div>
  </div>
  <!-- End Header -->

  <!-- Table -->
  <div class="table-responsive datatable-custom">
    <table id="datatbleWithFilter" class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
           data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [1],
                      "orderable": false
                   }],
                   "order": [],
                   "search": "#datatableWithFilterSearch",
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatableWithFilterPagination"
                 }'>
      <thead class="thead-light">
      <tr>
        <th>No</th>
        <th>Nama Daerah</th>
        <th>Tanggal Dibuat</th>
        <th>Terakhir Diedit</th>
        <th>Aksi</th>
      </tr>
      </thead>

      <tbody>
      @forelse ($daerah as $tampildaerah)         
      <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{$tampildaerah->nama_daerah}}</td>
      <td>{{$tampildaerah->created_at}}</td>
      <td>{{$tampildaerah->updated_at}}</td>
      <td>
            <a href="{{ route ('daerah.edit', $tampildaerah->id) }}" class="btn btn-primary btn-sm">
                        <i class="bi-pencil-fill me-1"></i> Edit 
            </a>  
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalhapus{{ $tampildaerah->id }}" class="btn btn-danger btn-sm">
                        <i class="bi-trash-fill me-1"></i> Hapus 
            </a>  			
															<form action="{{ route('daerah.hapus', $tampildaerah->id) }}" method="post">
																			@csrf
																			@method('DELETE')
																				<!-- Button trigger modal -->
																				<!-- Modal -->
																				<div class="modal fade" id="modalhapus{{ $tampildaerah->id }}"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																					<div class="modal-dialog">
																						<div class="modal-content">
																							<div class="modal-header">
																								<h5 class="modal-title mt-0" id="myModalLabel">Hapus Data {{ $tampildaerah->nama_daerah }}?</h5>
																								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
																								</button>
																							</div>
																							<div class="modal-body">
																								<h6 class="text-center"> 
																									Apa anda yakin ingin menghapus data ini ?
																								</h6>
																							</div>
																							<div class="modal-footer">
																							<button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Tutup</button>
																								<button type="submit" class="btn btn-danger">Hapus</button>
																							</div>
																						</div>
																					</div>
																				</div>											  
																</form>  			
      </td>		
        @empty
        <tr>
         <td colspan="5" class="text-center">Tidak ada data</td>																			
        </tr>                                                
        @endforelse     
      </tbody>
    </table>
  </div>
  <!-- End Table -->

  <!-- Footer -->
  <div class="card-footer">
    <!-- Pagination -->
    <div class="d-flex justify-content-center justify-content-sm-end">
      <nav id="datatableWithFilterPagination" aria-label="Activity pagination"></nav>
    </div>
    <!-- End Pagination -->
  </div>
  <!-- End Footer -->
</div>
      
    </div>
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

@include('layouts.component.footer')
