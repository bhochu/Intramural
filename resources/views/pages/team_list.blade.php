@extends('layouts.app', ['activePage' => 'Teams', 'titlePage' => __('Team List')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <label class="radio-inline"><input type="radio" name="optradio" onclick="disp('football')" checked>Football&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <label class="radio-inline"><input type="radio" name="optradio" onclick="disp('baseball')">Baseball&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <label class="radio-inline"><input type="radio" name="optradio" onclick="disp('basketball')">Basketball&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <label class="radio-inline"><input type="radio" name="optradio" onclick="disp('soccer')">Soccer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <label class="radio-inline"><input type="radio" name="optradio" onclick="disp('hockey')">Hockey&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <button type="button" onclick="{{route('add_team')}}">Add New </button>
  </div>

    <div class="row">

      <div class="col-md-12 sports-team" id="football">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Football Teams</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Team Name
                  </th>
  <!--                <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>   -->
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Riders
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Harrisburg hoopers
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Saints
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 sports-team" id="baseball">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Baseball Teams</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Team Name
                  </th>
  <!--                <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>   -->
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Belmount Raiders
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Hersher Bears
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Smoke 'n' guns
                    </td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 sports-team" id="basketball">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Basketball Teams</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Team Name
                  </th>
  <!--                <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>   -->
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Hoop Hoop
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Big Boys
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Little Sissly
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 sports-team" id="soccer">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Soccer Teams</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Team Name
                  </th>
  <!--                <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>   -->
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      S Kickers
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Goalya
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Boots
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 sports-team" id="hockey">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Hockey Teams</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Team Name
                  </th>
  <!--                <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>   -->
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Team India
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Bappu ni lakdi
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sardar gang
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
