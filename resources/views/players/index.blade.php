@extends('layouts.app', ['activePage' => 'player', 'titlePage' => __('Players List')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">{{ __('Players') }}</h4>
              <p class="card-category"> {{ __('Here you can manage players') }}</p>
            </div>
            <div class="card-body">
              @if (session('status'))
                <div class="row">
                  <div class="col-sm-12">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                      <span>{{ session('status') }}</span>
                    </div>
                  </div>
                </div>
              @endif
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('player.create') }}" class="btn btn-sm btn-primary">{{ __('Add Player') }}</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      {{ __('Name') }}
                    </th>
                    <th>
                      {{ __('Team Name') }}
                    </th>
                    <th>
                      {{ __('Sport Name') }}
                    </th>

                    <th class="text-right">
                      {{ __('Actions') }}
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($players as $player)
                      <tr>
                        <td>
                          {{ $player['first_name']}}
                        </td>
                        <td>
                          {{ $player['student_id']}}
                        </td>
                        <td>
                          {{ $player->get_team_name() }}
                        </td>


                        <td class="td-actions text-right">
                            <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('profile.edit') }}" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<script>

rem();
  disp("football");
  function disp(ele){
    rem();
    document.getElementById(ele).style.display="block";
  }
  function rem(){
    var divsToHide = document.getElementsByClassName("sports-team"); //divsToHide is an array
    for(var i = 0; i < divsToHide.length; i++){
//        divsToHide[i].style.visibility = "hidden"; // or
        divsToHide[i].style.display = "none";
  }
}
</script>
@endsection
