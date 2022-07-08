@extends('user.layout.masterlayout')

@section('content')
<div class="container">

    <div class="container-fluid mt-3 mb-3">
        <div class="row">
            <div class="col-1">
                <div style="width:100px; height:100px; border-radius:50%; overflow:hidden; background-color:#4F46BA">
                    <img src="{{ asset('images/profile.png') }}" alt="" class="img-responsive" style="width: 100%" />
                </div>
            </div>
            <div class="col-4 pt-3 ms-4">
                <div class="row"><h2>Selamat Datang!</h2></div>
                <div class="row"><h5>Ahmad Rafif Alaudin</h5></div>
            </div>
        </div>
        <hr>
    </div>
    <div class="container-fluid d-flex flex-row-reverse mb-5">
        <p class="p-2">22/02/2022</p>
      </div>

    <div class="container-float">
        <h4>Calendar</h4>

    </div>


</div>
@endsection