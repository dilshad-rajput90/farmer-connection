<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.designstream.co.in/mantos/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jan 2020 20:11:42 GMT -->
    <head>
        @include('layouts/general/top')
    </head>
    <body>

        <div id="wrapper">
            <!-- BEGIN HEADER -->
            @include('layouts/general/header')
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT dropdown-divider -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT dropdown-divider -->



            <!-- BEGIN CONTAINER -->
            <div class="page-container">

                <aside class="sidebar">
                    @include('layouts/general/left_side');
                </aside>

                <!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">

                    @yield('content');

                </div>
                <!-- END CONTENT BODY -->
            </div>


            <!-- END CONTAINER -->
        </div>
        <!-- /wrapper -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        @include('layouts/general/bottom')

    </body>

<!-- Mirrored from html.designstream.co.in/mantos/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jan 2020 20:14:02 GMT -->
</html>
