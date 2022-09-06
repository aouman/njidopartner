@extends('layouts.homeApp')

@section('content')

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('/includes.homeSidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                  <a class="col-lg-4 col-md-12" href="#">
                    <div class="shadow text-center font-bold text-uppercase" >
                        <div class="white-box analytics-info">
                            <h1><i class="fas fa-city"></i></h1>
                            <h3 class="box-title">Mes appartements</h3>
                        </div>
                    </div>
                  </a>

                  <a class="col-lg-4 col-md-12" href="/meslocataires">
                    <div class="shadow text-center font-bold text-uppercase" >
                        <div class="white-box analytics-info">
                            <h1><i class="fas fa-users"></i></h1>
                            <h3 class="box-title">Mes locataires</h3>
                        </div>
                    </div>
                  </a>
                  <a class="col-lg-4 col-md-12" href="#">
                    <div class="shadow text-center font-bold text-uppercase" >
                        <div class="white-box analytics-info">
                          <h1><i class="fas fa-coins"></i></h1>
                            <h3 class="box-title">Les payements</h3>
                        </div>
                    </div>
                  </a>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
  @endsection
