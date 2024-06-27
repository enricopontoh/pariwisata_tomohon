@if(request()->segment(2)!="zonasi")
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
	new Dropzone("#image-upload", {
		thum	
	})
  </script>  
@endif
  <!-- JS Global Compulsory  -->
  <script src="{{url('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{url('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  @if(request()->segment(2)!="zonasi")
    <script src="{{url('/assets/plugins/rp/jquery.mask.min.js')}}"></script>    
    <script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
                $('#jumlah_pengeluaran').inputmask()
                isi();

            })
        </script>    

  <!-- JS Implementing Plugins -->
  <script src="{{url('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
  <script src="{{url('assets/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{url('assets/js/theme.min.js')}}"></script>
  
  <script src="{{url('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{url('assets/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('assets/vendor/datatables.net.extensions/select/select.min.js')}}"></script>
  <script src="{{url('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{url('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{url('assets/vendor/jszip/dist/jszip.min.js')}}"></script>
  <script src="{{url('assets/vendor/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{url('assets/vendor/pdfmake/build/vfs_fonts.js')}}"></script>
  <script src="{{url('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{url('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{url('assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>    
        <script src="{{url('assets/plugins/notifications/js/lobibox.min.js')}}"></script>
        <script src="{{url('assets/plugins/notifications/js/notifications.min.js')}}"></script>   
        <script src="{{url('assets/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>   

        <script>
            @if (Session::has('success'))
                Lobibox.notify('success', {
                    pauseDelayOnHover: true,
                    continueDelayOnInactiveTab: false,
                    position: 'top right',
                    icon: 'bi bi-bookmark-check-fill',
                    msg: "{{ Session::get('success')}}"
                });
            @endif
        </script>
        <script>
            @if ($message = Session::get('error'))
            Lobibox.notify('error', {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: 'top right',
                icon: 'bi bi-bookmark-x',
                msg: "{{ Session::get('error')}}"
            });			
            @endif
        </script>   
  <!-- JS Plugins Init. -->
<script>
	new TomSelect("#select-state",{
		maxItems: 10
	});
</script>
  <!-- JS Plugins Init. -->

<script>
  (function () {
    // INITIALIZATION OF DATATABLES
    // =======================================================
    HSCore.components.HSDatatables.init('.js-datatable')
    const exportDatatable = HSCore.components.HSDatatables.getItem('exportDatatable')

    document.getElementById('export-copy').addEventListener('click', function () {
      exportDatatable.button('.buttons-copy').trigger()
    })

    document.getElementById('export-excel').addEventListener('click', function () {
      exportDatatable.button('.buttons-excel').trigger()
    })

    document.getElementById('export-csv').addEventListener('click', function () {
      exportDatatable.button('.buttons-csv').trigger()
    })

    document.getElementById('export-pdf').addEventListener('click', function () {
      exportDatatable.button('.buttons-pdf').trigger()
    })

    document.getElementById('export-print').addEventListener('click', function () {
      exportDatatable.button('.buttons-print').trigger()
    })
  })()
</script>
  <!-- JS Plugins Init. -->  
  
  <script>
    (function() {
      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>
@endif
</body>
</html>