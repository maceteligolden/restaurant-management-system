@extends('layouts.main')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
    
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New Reservation</a>
          
          </div>
        </div>
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">All Reservations</h5>
                    <span class="h2 font-weight-bold mb-0">350,897</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Open Reservations</h5>
                    <span class="h2 font-weight-bold mb-0">2,356</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                      <i class="ni ni-chart-pie-35"></i>
                    </div>
                  </div>
                </div>
             
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">CLosed Reservations</h5>
                    <span class="h2 font-weight-bold mb-0">924</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
  
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Page visits</h3>
              </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Page name</th>
                  <th scope="col">Visitors</th>
                  <th scope="col">Unique users</th>
                  <th scope="col">Bounce rate</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    /argon/
                  </th>
                  <td>
                    4,569
                  </td>
                  <td>
                    340
                  </td>
                  <td>
                    <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/index.html
                  </th>
                  <td>
                    3,985
                  </td>
                  <td>
                    319
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/charts.html
                  </th>
                  <td>
                    3,513
                  </td>
                  <td>
                    294
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/tables.html
                  </th>
                  <td>
                    2,050
                  </td>
                  <td>
                    147
                  </td>
                  <td>
                    <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/profile.html
                  </th>
                  <td>
                    1,795
                  </td>
                  <td>
                    190
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
     
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
            &copy; 2022 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Restaurant Management System</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
@endsection