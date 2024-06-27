
           <section id="submit-banner" class="ts-block">
            <div class="container">

                <div class="ts-block-inside text-center ts-separate-bg-element text-white" data-bg-image-opacity=".4" data-bg-image="https://ik.imagekit.io/tvlk/blog/2020/03/Wisata-Tomohon-2-Dinas-Komunikasi-dan-Informatika-Kota-Tomohon.jpg" data-bg-color="#000">
                    <figure class="h1 font-weight-light mb-2">Ingin Mencari Wisata di Tomohon?</figure>
                    <p class="mb-5">Website yang menyediakan informasi mengenai data-data wisata yang berada <br>di Tomohon, silahkan tekan tombol dibawah untuk melihat data-data wisata</p>
                    <a href="{{ route('homepage.wisata') }}" class="btn btn-light">Wisata</a>
                </div>

            </div>
        </section>
   
   <footer id="ts-footer">

        <!--MAIN FOOTER CONTENT
        =============================================================================================================-->
        <section id="ts-footer-main">
            <div class="container">
                <div class="row">

                    <!--Brand and description-->
                    <div class="col-md-6">
                        <a href="#" class="brand">
                         <img height="50" src="https://i0.wp.com/tomohon.go.id/wp-content/uploads/2017/03/logotomohon.png?resize=300%2C290&ssl=1" alt="">
                        </a>
                        <p class="mb-4">
                            Website Parwisata Kota Tomohon
                        </p>
                    </div>

                    <!--Navigation-->
                    <div class="col-md-2">
                        <h4>Navigation</h4>
                        <nav class="nav flex-row flex-md-column mb-4">
                            <a href="{{ route ('homepage.home') }}" class="nav-link">Home</a>
                            <a href="{{ route ('homepage.maps') }}" class="nav-link">Maps</a>
                            <a href="{{ route ('homepage.wisata') }}" class="nav-link">Wisata</a>
                        </nav>
                    </div>

                    <!--Contact Info-->
                    <div class="col-md-4">
                        <h4>Contact</h4>
                        <address class="ts-text-color-light">
                            Data Contact
                            <br>
                            Data alamat
                            <br>
                            <strong>Email: </strong>
                            <a href="#" class="btn-link">admin@gmail.com</a>
                            <br>
                            <strong>Phone:</strong>
                             +1 123 456 789 
                        </address>
                    </div>

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-main-->

        <!--SECONDARY FOOTER CONTENT
        =============================================================================================================-->
        <section id="ts-footer-secondary">
            <div class="container">

                <!--Copyright-->
                <div class="ts-copyright">(C) 2023, All rights reserved</div>

                <!--Social Icons-->
                <div class="ts-footer-nav">
                    <nav class="nav">
                        <a href="#" class="nav-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </nav>
                </div>
                <!--end ts-footer-nav-->

            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-secondary-->

    </footer>
    <!--end #ts-footer-->

</div>
<!--end page-->

<script src="{{url('assetsdepan/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('assetsdepan/js/popper.min.js')}}"></script>
<script src="{{url('assetsdepan/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assetsdepan/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('assetsdepan/js/owl.carousel.min.js')}}"></script>
<script src="{{url('assetsdepan/js/custom.js')}}"></script>
<script src="{{url('assetsdepan/js/dragscroll.js')}}"></script>
<script src="{{url('assetsdepan/js/jquery.scrollbar.min.js')}}"></script>

</body>
</html>