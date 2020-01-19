<!DOCTYPE html>
<html>

<head>
    @include('layouts/front/top');
</head>

<body>

    <div class="page-wrapper">
        <!-- Main Header-->
        <header class="main-header">
            @include('layouts/front/header');
        </header>
        <!--End Main Header -->



        @yield('content');

        <!--Main Footer / Footer Style One-->

        @include('layouts/front/footer');

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


    @include('layouts/front/bottom');


</body>

</html>
