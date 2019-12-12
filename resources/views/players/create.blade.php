@extends('layouts.app', ['activePage' => 'player', 'titlePage' => __('Players List')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('player.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Player') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('player.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="s_id">Student Id</label>
                    <input type="text" class="form-control" id="inputCity" name="student_id">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="f_name">First Name</label>
                    <input type="text" class="form-control" id="inputCity" name="first_name">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="l_name">Last Name</label>
                    <input type="text" class="form-control" id="inputCity" name="last_name">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="maj">Major</label>
                    <input type="text" class="form-control" id="inputCity" name="major">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="inputSport">Teams</label>
                    <select id="inputTeam" class="form-control" name="team_id">
                      <option selected>Select Team</option>
                      @foreach ($teams as $team)
                        <option value="{{$team["id"]}}">{{$team["name"]}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add Player') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
