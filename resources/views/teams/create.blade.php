@extends('layouts.app', ['activePage' => 'team', 'titlePage' => __('Teams List')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('team.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Team') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('team.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Name</label>
                    <input type="text" class="form-control" id="inputCity" name="name">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="inputSport">Sports</label>
                    <select id="inputSport" class="form-control" name="sport_id">
                      <option selected>Select Sport</option>
                      @foreach ($sports as $sport)
                        <option value="{{$sport["id"]}}">{{$sport["name"]}} - {{$sport->get_tournament_name()}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Team') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
