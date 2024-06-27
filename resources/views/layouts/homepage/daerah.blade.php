 @include('layouts.component.headerhomepage')
         <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Daerah</a></li>
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
                    <h1>Data Daerah</h1>
                </div>

            </div>
        </section>
		
       <section id="agencies-list">
            <div class="container">

                <!--AGENTS
                    =================================================================================================-->
                <section id="agents">

                    <div class="row">

                        <!--Person-->
						@forelse ($daerah as $tampildaerah)
                        <div class="col-md-3">
						
                            <div class="card ts-person ts-card">

                                <!--Image-->
                                <a href="{{ route ('homepage.detaildaerahmenu',$tampildaerah->id) }}" class="card-img" data-bg-image="{{ url ('gambardaerah/') }}/{{ $tampildaerah->gambar }}">
                                </a>

                                <!--Body-->
                                <div class="card-body">

                                    <figure class="ts-item__info">
                                        <h4>{{$tampildaerah->nama_daerah}}</h4>
                                    </figure>

                                    <dl>
                                        <dt>Upload Date</dt>
                                        <dd>{{$tampildaerah->created_at}}</dd>
                                    </dl>

                                </div>

                                <!--Footer-->
                                <a href="{{ route ('homepage.detaildaerahmenu',$tampildaerah->id) }}" class="card-footer">
                                    <span class="ts-btn-arrow">Detail</span>
                                </a>

                            </div>
                        </div>
                        <!--end col-md-3-->
								@empty
									<h3 class="text-center">Tidak ada data</h3>
								@endforelse 						
                    </div>
                    <!--end row-->

                </section>
                <!--end #agencies-->

            </div>
            <!--end container-->
        </section>
        <!--end #items-list-->
@include('layouts.component.footerhomepage')