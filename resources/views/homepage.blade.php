@extends('admin.admin_index')
@section('main-content')

<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>


   <?php $s=Auth::user()->type;
   if($s=="admin"){

   ?>

<div class="u">
    <div class="panel panel-danger" width="400px">
    <div class="panel-heading"><i class="fas fa-comment" style="font-size:24px;">Feedbacks</i></div>
    <div class="panel-body">
<h1 align="center" style="color:black;">{{$f}}</h1>
    </div>
</div>
</div>
<div class="b">
    <div class="panel panel-info" width="400px">
    <div class="panel-heading"><i class="fa fa-bus" style="font-size:24px;">Buses</i></div>
    <div class="panel-body">
<h1 align="center" style="color:black;">{{$bu}}</h1>
    </div>
</div>
</div>
<div class="t">
    <div class="panel panel-success" width="400px">
    <div class="panel-heading"><i class="fas fa-ticket-alt" style="font-size:24px;">Tickets</i></div>
    <div class="panel-body">
<h1 align="center" style="color:black;">{{$res}}</h1>
    </div>
</div>
</div>

<div class="a">
    <div class="panel panel-warning" width="400px">
    <div class="panel-heading"><i class="fas fa-address-book " style="font-size:24px;">Reservation</i></div>
    <div class="panel-body">
<h1 align="center" style="color:black;">{{$re}}</h1>
    </div>
</div>
</div>
<div class="r">
    <div class="panel panel-primary" width="400px">
    <div class="panel-heading"><i class="fas fa-users" style="font-size:24px;">Users</i></div>
    <div class="panel-body">
<h1 align="center" style="color:black;">{{$u}}</h1>
    </div>
</div>
</div>
<?php } ?>

<div class="slide">
                                <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="{{asset('assets/slide_image/'.$si[0]->img)}}" alt="Los Angeles" width="100%" height="400px">
      <div class="carousel-caption">
        <h3>{{$si[0]->title}}</h3>
        <p>{{$si[0]->description}}</p>
      </div>   
    </div>
    
    <div class="carousel-item">
      <img src="{{asset('assets/slide_image/'.$si[1]->img)}}" alt="Chicago" width="1100" height="400">
      <div class="carousel-caption">
        <h3>{{$si[1]->title}}</h3>
        <p>{{$si[1]->description}}</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/slide_image/'.$si[2]->img)}}" alt="New York" width="1100" height="400">
      <div class="carousel-caption">
        <h3>{{$si[2]->title}}</h3>
        <p>{{$si[2]->description}}</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>


<div id="myDIV" class="mt-3">
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Index Page Details</h6>
            </div>
            <div class="card-body">
<div class="buses">
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">Buses.</div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                <th>Bus No.</th>
                <th>Company</th>
                <th>Capacity</th>
                <th>Type</th>
            </tr>
            </thead>
            <tbody>
            
@foreach($b as $b)
                <tr>
                
                <td>{{$b->bus_no}}</td>
                <td>{{$b->company}}</td>
                <td>{{$b->capacity}}</td>
                <td>{{$b->type}}</td>
            </tr>
            @endforeach
           
            
            </tbody>
        </table>


    </div>
</div>
<a href="<?php if($s=='custumer'){?>{{url('admin/cusbus')}}<?php }
elseif($s=='admin'){?>{{url('admin/bus')}}<?php }?>">
    <button class="btn btn-primary btn-xs">View More buses</button></a>
</div>


<div class="available">
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">Availability of  Buses.</div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                <th>Bus No.</th>
                <th>From</th>
                <th>To</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            
@foreach($a as $b)
                <tr>
                
                <td>{{$b->bus_no}}</td>
                <td>{{$b->fro_m}}</td>
                <td>{{$b->destination}}</td>
                <td>{{$b->date}}</td>
            </tr>
            @endforeach
           
            
            </tbody>
        </table>


    </div>
</div>
<a href="<?php if($s=='custumer'){?>{{url('admin/cusavailable')}}<?php }
elseif($s=='admin'){?>{{url('admin/available')}}<?php }?>">
    <button class="btn btn-primary btn-xs">View More Availables</button></a>
</div>


<div class="route">
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">Routes.</div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                <th>From</th>
                <th>To</th>
                <th>Distance</th>
                <th>Cost</th>
            </tr>
            </thead>
            <tbody>
            
@foreach($r as $b)
                <tr>
                
                <td>{{$b->fro_m}}</td>
                <td>{{$b->destination}}</td>
                <td>{{$b->distance}}</td>
                <td>{{$b->cost}}</td>
            </tr>
            @endforeach
           
            
            </tbody>
        </table>


    </div>
</div>
<a href="<?php if($s=='custumer'){?>{{url('admin/cusroute')}}<?php }
elseif($s=='admin'){?>{{url('admin/route')}}<?php }?>">
    <button class="btn btn-primary btn-xs">View More Routes.</button></a>
</div>




</div>
</div>
</div>
</div>
</div>

<footer class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #E0FFFF;">
    <div class="container">


<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Online Bus System</h6>
        <p>Here you can book any available bus ticket.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">DEVELOPED BY:</h6>
        <p>
          <a href="#!">Chhewang Lama</a>
        </p>
        <p>
          <a href="#!">Rajesh Karki</a>
        </p>
        <p>
          <a href="#!">Laxman Adhikari</a>
        </p>
        <p>
          <a href="#!">Surendra Maharjan</a>
        </p>
      </div>
      <!-- Grid column -->



      <!-- Grid column -->
      

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">ADDRESS</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Budanilkantha, KTM, NP</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> bussystem@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
      </div>
      <!-- Grid column -->

    </div>
      <!-- Grid row-->

    </div>
  </div>

  <
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright:
    <a class="dark-grey-text" href="#"> OBS</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
            

            <style type="text/css">
                .available
                {
                    /*border: 1px solid;*/
                    margin-top: 5px;
                    margin-bottom: 5px;
                   /* width: 480px;
                    float: right;*/
                }
                .slide
                {
                  /*height:400px;*/
                    margin-bottom: 15px;
                }
                .route
                {
                    /*border: 1px solid;*/
                    margin-top: 5px;
                    margin-bottom: 5px;
                    /*width: 500px;*/
                    /*float: right;*/
                    
                }
                p{
                  color: black;
                }
                .com_detail
                {
                    margin-left: 510px;
                    margin-top: 150px;
                    /*width: 400px;*/
                }
                
  .footer-copyright{
    background-color: #00BFFF;
  }
  hr{
    color: white;
  }
  .info{
    width: 400px;
float: right;
  }
  .contact{
    width: 400px;
    text-align:right;
  }
  .tex{
    margin-top: 20px;
  }
  .u
  {
margin-right:35px;
    width: 180px;
    float: right;
  }
  .b{
    margin-right:35px;
    width: 180px;
float: right;
  }
  .t{
    margin-right:35px;
    width: 180px;
float: right;
  }
  .a{
    margin-right:35px;
    width: 180px;
float: right;
  }
  .r{
    margin-right:35px;
    width: 180px;
float: none;

  }
            </style>
            @endsection