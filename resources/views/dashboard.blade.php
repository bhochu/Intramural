@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <a href="{{ route('tournament') }}">Tournaments</a>
          <!--    <p class="card-category">Tournaments</p> -->
              <h3 class="card-title">2
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <a href="{{ route('table') }}">Sports</a>
            <!--  <p class="card-category">Sports</p> -->
              <h3 class="card-title">5
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <a href="{{ route('team') }}">Teams</a>
          <!--    <p class="card-category">Teams</p>  --
              <h3 class="card-title">15</h3>
            </div>
            <div class="card-footer">
        <!--      <div class="stats">
                <i class="material-icons">date_range</i> 1 min ago
              </div> -->
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
