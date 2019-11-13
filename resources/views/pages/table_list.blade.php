@extends('layouts.app', ['activePage' => 'Sports', 'titlePage' => __('Sports List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <label class="radio-inline"><input type="radio" name="optradio" onclick="disp('fall2019')" checked>fall2019&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <label class="radio-inline"><input type="radio" name="optradio" onclick="disp('spring2020')">spring2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </div>
    <div class="row">
      <div class="col-md-12 tournament-sports" id="fall2019">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Fall2019 Sports</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Football
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Baseball
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Basketball
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Soccer
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Hockey
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 tournament-sports" id="spring2020">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Spring2020 Sports</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Football
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Baseball
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Basketball
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Soccer
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Hockey
                    </td>
                  </tr>

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
  disp("fall2019");
  function disp(ele){
    rem();
    document.getElementById(ele).style.display="block";
  }
  function rem(){
    var divsToHide = document.getElementsByClassName("tournament-sports"); //divsToHide is an array
    for(var i = 0; i < divsToHide.length; i++){
//        divsToHide[i].style.visibility = "hidden"; // or
        divsToHide[i].style.display = "none";
  }
}
</script>

@endsection
