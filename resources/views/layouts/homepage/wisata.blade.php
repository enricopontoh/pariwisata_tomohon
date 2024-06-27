@include('layouts.component.headerhomepage')

        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Wisata</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!--PAGE TITLE
            =========================================================================================================-->
        <section id="page-title">
            <div class="container">

                <div class="ts-title">
                    <h1>Data Wisata</h1>
                </div>

            </div>
        </section>

        <!--SEARCH FORM
        =============================================================================================================-->
        <section id="search-form">
            <div class="container">

                <form class="ts-form" action="{{ route('homepage.cariwisata2') }}" method="get">
					@csrf
                    <section class="ts-box p-0">
                        <!--PRIMARY SEARCH INPUTS
                            =========================================================================================-->
                        <div class="form-row px-4 py-3">

                            <!--Keyword-->
                            <div class="col-sm-10 col-md-10">
                                <div class="form-group my-2">
                                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari Wisata Berdasarkan Nama">
                                </div>
                            </div>

                            <!--Other inputs-->
                            <div class="col-md-2">
                                <div class="form-row">

                                    <!--Submit button-->
                                    <div class="col-sm-12">
                                        <div class="form-group my-2">
                                            <button type="submit" class="btn btn-primary w-100" id="search-btn">Search
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <!--end row-->
                            </div>
                            <!--end col-md-8-->

                        </div>
                        <!--end form-row-->

                        <!--MORE OPTIONS - ADVANCED SEARCH
                            =========================================================================================-->
                        
                    </section>

                </form>
                <!--end #form-search-->

            </div>
            <!--end container-->
        </section>
        <!--end #search-form-->

        <!--DISPLAY CONTROL
        <!-ITEMS LISTING
            =========================================================================================================-->
        <section id="items-grid">
            <div class="container">

                <!--Row-->
                <div class="row">

                    <!--Item-->
					@forelse ($wisatadilihat as $tampilwisataterbaru)  					
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Card Image-->
                            <a href="{{ route ('homepage.detailwisata',$tampilwisataterbaru->id) }}" class="card-img ts-item__image" data-bg-image="{{ url ('gambarwisata/') }}/{{ $tampilwisataterbaru->gambar_wisata }}">
                                <figure class="ts-item__info">
                                    <h4>{{$tampilwisataterbaru->nama_wisata}}</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        {{$tampilwisataterbaru->foreign_daerah->nama_daerah}}
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">@currency($tampilwisataterbaru->biaya_tiket) </div>
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


@include('layouts.component.footerhomepage')