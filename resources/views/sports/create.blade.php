@extends('layouts.app', ['activePage' => 'sport', 'titlePage' => __('Sports List')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('sport.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Sport') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('sport.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Names</label>
                    <input type="text" class="form-control" id="inputCity" name="name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="inputTournament">Tournament</label>
                    <select id="inputTournament" class="form-control" name="tournament_id">
                      <option selected>Select Tournament</option>
                      @foreach ($tournaments as $tournament)
                        <option value="{{$tournament["id"]}}">{{$tournament["name"]}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Sport') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
