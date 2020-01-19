        @extends('layouts/admin/master');

        @section('content')

                 <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">

                                    <h4 class="float-left">Admin Dashboard</h4>

                                    <ol class="breadcrumb float-left float-md-right">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                                        <li class="breadcrumb-item">Admin Dashboard</li>
                                    </ol>
                     <br><br>

                        <?php
                        if (session('message'))
                        {
                        ?>
                            <p class="alert alert-danger text-center">
                                {{ Session::get('message') }}
                            </p>
                        <?php
                        }
                        ?>

                                </div>
                            </div>
                        </div><!-- end .page title-->
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->

                                    <div class="card-block text-xs-center">
                                        <i class="icon-layers widget-icon"></i>  <h1 class="right panel-middle margin-b-0">3,100</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div><!-- End .panel -->



                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->

                                    <div class="card-block text-xs-center">
                                        <i class="icon-user widget-icon"></i>  <h1 class="right panel-middle margin-b-0">6,782</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div><!-- End .panel -->



                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->

                                    <div class="card-block text-xs-center">
                                        <i class="icon-list widget-icon"></i>  <h1 class="right panel-middle margin-b-0">6,782</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div><!-- End .panel -->



                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->

                                    <div class="card-block text-xs-center">
                                        <i class="icon-like widget-icon"></i>  <h1 class="right panel-middle margin-b-0">1,782</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div><!-- End .panel -->



                            </div>


                        </div>



                    </div>
                    <div class="clearfix"></div>


        @endsection
