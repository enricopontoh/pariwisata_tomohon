<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">

    <!--CSS -->
    <link rel="stylesheet" href="{{url('assetsdepan/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assetsdepan/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{url('assetsdepan/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{url('assetsdepan/css/jquery.scrollbar.css')}}">	
    <link rel="stylesheet" href="{{url('assetsdepan/css/style.css')}}">
  <link rel="icon" href="https://i0.wp.com/tomohon.go.id/wp-content/uploads/2017/03/logotomohon.png?resize=300%2C290&ssl=1">
	  <!-- Load Leaflet from CDN -->
	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
		 integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
		 crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>

	  <!-- Load Esri Leaflet from CDN -->
	<script src="https://unpkg.com/esri-leaflet@3.0.2/dist/esri-leaflet.js"
		integrity="sha512-myckXhaJsP7Q7MZva03Tfme/MSF5a6HC2xryjAM4FxPLHGqlh5VALCbywHnzs2uPoF/4G/QVXyYDDSkp5nPfig=="
		crossorigin=""></script>

	  <!-- Load Esri Leaflet Geocoder from CDN -->
	<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.css"
		integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
		crossorigin="">
	<script src="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.js"
		integrity="sha512-vZbMwAf1/rpBExyV27ey3zAEwxelsO4Nf+mfT7s6VTJPUbYmD2KSuTRXTxOFhIYqhajaBU+X5PuFK1QJ1U9Myg=="
		crossorigin=""></script>	
		<script src='https://unpkg.com/wicg-inert@latest/dist/inert.min.js'></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
		<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

	  <style>
		#map { height:500px;, position: absolute; top:0; bottom:0; right:0; left:0; }
	  </style>
	  <style>
		#mapke2 { height:500px;, position: absolute; top:0; bottom:0; right:0; left:0; }
	  </style>
	

    <title>Pariwisata Tomohon</title>

</head>

<body>

<!-- WRAPPER
=====================================================================================================================-->
<div class="ts-page-wrapper ts-homepage" id="page-top">

    <!--*********************************************************************************************************-->
    <!--HEADER **************************************************************************************************-->
    <!--*********************************************************************************************************-->
    <header id="ts-header" class="fixed-top">

        <!-- SECONDARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-secondary-navigation" class="navbar p-0">
            <div class="container justify-content-end justify-content-sm-between">

                <!--Left Side-->
                <div class="navbar-nav d-none d-sm-block">
                    <!--Phone-->
                    <span class="mr-4">
                            <i class="fa fa-phone-square mr-1"></i>
                            +62 822-3123-8302
                        </span>
                    <!--Email-->
                    <a href="#">
                        <i class="fa fa-envelope mr-1"></i>
                       admin@admin.com
                    </a>
                </div>

                <!--Right Side-->
                <div class="navbar-nav flex-row">

                    <!--Search Input-->
                    <input type="text" value="2024" readonly class="form-control p-2 border-left bg-transparent w-auto" placeholder="Search">


                </div>
                <!--end navbar-nav-->
            </div>
            <!--end container-->
        </nav>

        <!--PRIMARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-primary-navigation" class="navbar navbar-expand-md navbar-light">
            <div class="container">

                <!--Brand Logo-->
                <a class="navbar-brand" href="#">
                    <img height="50" src="https://i0.wp.com/tomohon.go.id/wp-content/uploads/2017/03/logotomohon.png?resize=300%2C290&ssl=1" alt="">
                </a>

                <!--Responsive Collapse Button-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Collapsing Navigation-->
                <div class="collapse navbar-collapse" id="navbarPrimary">

                    <!--LEFT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                    <ul class="navbar-nav">


						<li class="nav-item">
                            <a class="nav-link active" href="{{ route ('homepage.home') }}">
                                Home
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link active" href="{{ route ('homepage.maps') }}">
                                Maps
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link active" href="{{ route ('homepage.wisata') }}">
                                Wisata
                            </a>
                        </li>
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link" href="#">Daerah</a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">


                                <!-- EDIT PROPERTY (1st level)
                                =====================================================================================-->
								@forelse ($menudaerah as $tampilmenudaerah)
								
                                <li class="nav-item">
                                    <a href="{{ route ('homepage.detaildaerahmenu',$tampilmenudaerah->id) }}" class="nav-link">{{$tampilmenudaerah->nama_daerah}}</a>
                                </li>
								@empty
									<h3 class="text-center">Tidak ada data</h3>
								@endforelse 	
                                <li class="nav-item">
                                    <a href="{{ route ('homepage.daerah')}}" class="nav-link">Selengkapnya</a>
                                </li>									
                            </ul>
                            <!--end List (1st level) -->

                        </li>

                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link" href="#">Kategori</a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">


                                <!-- EDIT PROPERTY (1st level)
                                =====================================================================================-->
								@forelse ($menukategori as $tampilmenukategori)
                                <li class="nav-item">
                                    <a href="{{ route ('homepage.detailkategorimenu',$tampilmenukategori->id) }}" class="nav-link">{{$tampilmenukategori->nama_kategori}}</a>
                                </li>
								@empty
									<h3 class="text-center">Tidak ada data</h3>
								@endforelse 	
                            </ul>
                            <!--end List (1st level) -->

                        </li>

                        <!--end PAGES nav-item-->						
                    </ul>
                    <!--end Left navigation main level-->


                    <!--RIGHT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                    <ul class="navbar-nav ml-auto">

                        <!--SUBMIT (Main level)
                        =============================================================================================-->
                        @if (Auth::guest())
                        <li class="nav-item">
                            <a class="btn btn-outline-primary btn-sm m-1 px-3" href="{{ route('login') }}">
                                <i class="fa fa-plus small mr-2"></i>
                                Login
                            </a>
                        </li>
                        @elseif (Auth::user()->level =='admin')
                        <li class="nav-item">
                            <a class="btn btn-outline-primary btn-sm m-1 px-3" href="{{ route('admin.home') }}">
                                <i class="fa fa-home small mr-2"></i>
                                Dashboard
                            </a>
                        </li>
                        @endif

                    </ul>
                    <!--end Right navigation-->

                </div>
                <!--end navbar-collapse-->
            </div>
            <!--end container-->
        </nav>
        <!--end #ts-primary-navigation.navbar-->

    </header>
    <!--end Header-->