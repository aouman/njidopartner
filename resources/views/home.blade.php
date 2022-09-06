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
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Mes informations</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        @include('includes.usersPayeBtn')
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
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

                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-2"></div>
                    <!-- Column -->
                    <!-- Column -->

                        <div class="col-md-8">
                            <div class="white-box">
                                <div class="table-responsive">
                                  <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                      class="btn btn-danger text-uppercase font-bold pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">
                                      Payer mon loyer
                                    </a>
                                    <table class="table text-nowrap">

                                        <tbody>
                                            <tr>
                                                <td class="text-uppercase font-bold">Nom et prénoms :</td>
                                                <td>{{auth()->user()->name}}</td>

                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-bold">Email :</td>
                                                <td>{{auth()->user()->email}}</td>

                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-bold">N° de téléphone :</td>
                                                <td>{{auth()->user()->phone}}</td>

                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-bold">Type de loyer :</td>
                                                <td>2 pièces</td>

                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-bold">Montant du loyer :</td>
                                                <td>150000 Fcfa</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <!-- Column -->
                    <div class="col-md-2"></div>
                </div>
                <!-- Row -->

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
