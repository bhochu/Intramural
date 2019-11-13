@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center">{{ __('University of Chester Brook') }}</h1>
          <h2 class="text-white text-center">{{ __('Club Sports Organizers') }}</h2>
      </div>
  </div>
</div>
@endsection
