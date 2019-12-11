@extends('layouts.app', ['activePage' => 'tournament', 'titlePage' => __('Tournament List')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">{{ __('Tournaments') }}</h4>
              <p class="card-category"> {{ __('Here you can manage tournaments') }}</p>
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
                  <a href="{{ route('tournament.create') }}" class="btn btn-sm btn-primary">{{ __('Add Tournament') }}</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      {{ __('Name') }}
                    </th>
                    <th class="text-right">
                      {{ __('Actions') }}
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($tournaments as $row)
                      <tr>
                        <td>
                          {{ $row['name'] }}
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
