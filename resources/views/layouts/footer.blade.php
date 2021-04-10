<div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <script>document.write(new Date().getFullYear())</script> <a target="_blank" href="https://beautyebooking.com">BeautyeBooking</a>, All rights reserved.</p>
                </div>
            </div>
              <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('public/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('public/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('public/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('public/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ url('public/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
   <!--  <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dash_1.js') }}"></script> -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

     <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
 <script>
       
    $(document).ready(function(){
           
            $('.summernote').summernote({
                height: 200   //set editable area's height
            });
        });
    </script>
    
</body>
</html>