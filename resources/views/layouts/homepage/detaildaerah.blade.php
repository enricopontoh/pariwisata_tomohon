@include('layouts.component.headerhomepage')
    
    <!--BREADCRUMB
            =========================================================================================================-->
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
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
                    <h1>Agent Detail</h1>
                </div>

            </div>
        </section>

        <!--AGENT INFO
            =========================================================================================================-->
        <section id="agent-info">
            <div class="container">

                <!--Box-->
                <div class="ts-box ts-has-talk-arrow">

                    <!--Ribbon-->
                    <div class="ts-ribbon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>

                    <!--Row-->
                    <div class="row">

                        <!--Brand-->
                        <div class="col-md-4 ts-center__both">
                            <div class="ts-circle__xxl ts-shadow__md" data-bg-image="{{ url('gambardaerah/')}}/{{$daerah->gambar}}"></div>
                        </div>

                        <!--Description-->
                        <div class="col-md-8">

                            <div class="py-4">

                                <!--Title-->
                                <div class="ts-title mb-2">
                                    <h2 class="mb-1">{{$daerah->nama_daerah}}</h2>
                                </div>

                                <!--Row-->
                                <div class="row">

                                    <div class="col-md-12">
                                        <p>
                                          <?php echo $daerah->penjelasan_daerah; ?>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                            <!--end p-4-->

                            <div class="ts-bg-light p-3 ts-border-radius__md d-block d-sm-flex ts-center__vertical justify-content-between ts-xs-text-center">
                 
                                <small class="ts-opacity__50">{{$daerah->created_at}}</small>
                            </div>

                        </div>
                        <!--end col-md-8-->
                    </div>
                    <!--end row-->
                </div>
                <!--end ts-box-->

            </div>
            <!--end container-->
        </section>
        <!--end #agent-info-->
        <section id="latest-listings" class="ts-block pt-4 pb-0">
            <div class="container">

                <!--Title-->
                <div class="ts-title">
                    <h2>Wisata yang berada di {{ $daerah->nama_daerah}}</h2>
                </div>

                <!--Row-->
                <div class="row">

					@forelse ($wisatadaerah as $tampilwisataterbaru)  
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

  
@include('layouts.component.footerhomepage')
		