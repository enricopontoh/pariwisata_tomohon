@include('layouts.component.headerhomepage')

        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Kategori</a></li>
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
                    <h1>Data Kategori {{ $datanamakategori->nama_kategori }}</h1>
                </div>

            </div>
        </section>

        <section id="items-grid">
            <div class="container">

            <h5>Daftar Wisata Berkategori <span class="badge badge-info">{{ $datanamakategori->nama_kategori }}</span></h5>
            <br>
                <!--Row-->
                <div class="row">

                    <!--Item-->
					@forelse ($datakategori as $tampilwisataterbaru)					
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