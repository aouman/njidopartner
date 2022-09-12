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
              @if(auth()->user()->role=='locataire')
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
            @endif
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
                @if(auth()->user()->role=='Admin')
                <div class="row justify-content-center">
                  <a class="col-lg-4 col-md-12" href="/mesappartements">
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
                  <a class="col-lg-4 col-md-12" href="/payeShow">
                    <div class="shadow text-center font-bold text-uppercase" >
                        <div class="white-box analytics-info">
                          <h1><i class="fas fa-coins"></i></h1>
                            <h3 class="box-title">Les paiements</h3>
                        </div>
                    </div>
                  </a>
                </div>
                @else
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-2">
                        <!--div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="{{asset('backend/plugins/images/large/img1.jpg')}}">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="{{asset('backend/plugins/images/users/genu.jpg')}}"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2">{{auth()->user()->name}}</h4>
                                        <h5 class="text-white mt-2">{{auth()->user()->email}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <input type="file" name="avatarUsers" value="ajouter une photo">
                            </div>
                        </div-->
                    </div>
                    <!-- Column -->
                    <!-- Column -->

                        <div class="col-lg-8 col-xlg-9 col-md-12">
                            <div class="white-box">
                                <div class="table-responsive">
                                  <a href="#" target="_blank"
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
                                            {{-- @foreach($all as $key=>$row)
                                            <tr>
                                                <td class="text-uppercase font-bold">Type d'appartement :</td>
                                                <td>{{ $row->AppName }}</td>
                                            </tr>
                                            @endforeach --}}
                                            <tr>
                                                <td class="text-uppercase font-bold">Type d'appartement :</td>
                                                <td>{{auth()->user()->AppName }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase font-bold">Montant du loyer :</td>
                                                <td>{{auth()->user()->AppPrice}}80 000 Fcfa</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2"></div>


                    <!-- Column -->
                </div>
                <!-- Row -->
                @endif
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
