@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="margin-left: 0;">
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
        <div class="row">
          <div class="col-sm-3"></div>
            <div class="col-sm-6">
              <div class="card shadow rounded rounded-3">
                  <div class="card-body">
                      <form class="form-horizontal form-material" action="{{route('register')}}" method="post">
                        @csrf
                          <div class="form-group mb-4">
                              <label class="col-md-12 p-0">Nom et Prénoms</label>
                              <div class="col-md-12 border-bottom p-0">
                                <input type="text" placeholder="Koffi jean" class="form-control p-0 border-0" name="name" value="{{ old('name') }}">
                              </div>
                          </div>
                          <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Email</label>
                              <div class="col-md-12 border-bottom p-0">
                                  <input type="email" placeholder="exemple@gmail.com"
                                      class="form-control p-0 border-0" name="email" id="email">
                              </div>
                          </div>
                          <!--div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">N° de téléphone</label>
                              <div class="col-md-12 border-bottom p-0">
                                  <input type="tel" placeholder="05 05 0478562"
                                      class="form-control p-0 border-0" name="phone"
                                      id="phone">
                              </div>
                          </div>
                          <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Date de la location</label>
                              <div class="col-md-12 border-bottom p-0">
                                  <input type="date" placeholder="25/03/2022"
                                      class="form-control p-0 border-0" name="date"
                                      id="date">
                              </div>
                          </div-->
                          <div class="form-group mb-4">
                              <label class="col-md-12 p-0">Mot de passe</label>
                              <div class="col-md-12 border-bottom p-0">
                                  <input type="password" name="password" class="form-control p-0 border-0"
                                      id="password">
                              </div>
                          </div>
                          <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Confirmer Mot de passe</label>
                              <div class="col-md-12 border-bottom p-0">
                                  <input class="form-control p-0 border-0" type="password" name="password_confirmation"
                                      id="password-confirm">
                              </div>
                          </div>

                          <div class="form-group mb-4">
                              <div class="col-sm-12">
                                  <button type="submit" class="btn btn-success text-uppercase px-md-5">S'enregistrer</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
            <div class="col-sm-3"></div>
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

</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

@endsection
