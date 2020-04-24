@extends('user.index')
@section('main-content')
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
<div class="container" >
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div>
        <img class="carousel-img-width" src="{{asset('assets/slide_image/'.$s[0]->img)}}"
          alt="First slide" class="carousel-img-width" width="100%" height="300px">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">{{$s[0]->title}}</h3>
        <p>{{$s[0]->description}}</p>
      </div>
    </div>
    <div class="carousel-item">
    
      <div>
        <img class="carousel-img-width" src="{{asset('assets/slide_image/'.$s[1]->img)}}"
          alt="Second slide" class="carousel-img-width" width="100%" height="300px">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">{{$s[1]->title}}</h3>
        <p>{{$s[1]->description}}</p>
      </div>
    </div>
    <div class="carousel-item">
      <div>
        <img class="carousel-img-width" src="{{asset('assets/slide_image/'.$s[2]->img)}}"
          alt="Third slide" class="carousel-img-width" width="100%" height="300px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">{{$s[2]->title}}</h3>
        <p>{{$s[2]->description}}</p>
      </div>
    </div>
  </div>
        </div>

  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>


<form method="post" action="{{url('/bus_view')}}">
	{{csrf_field()}}
<div class="container">
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
		<i class="fa fa-columns"></i>
		<h3>Happy Travel</h3>
	</div>
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2>Online Tickets </h2>
		<div class="ban-top">
			<div class="form-group{{ $errors->has('journey') ? ' has-error' : '' }}">
				<label class="inputLabel">Journey</label>
				<select class="city" name="Journey" placeholder="Enter a city">
					
					@foreach($se as $m)
					<option value="{{$m->id}}">{{$m->fro_m}} to {{$m->destination}}</option>
					@endforeach
				</select>
				<!-- <input  type="text"  > -->
				@if ($errors->has('journey'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('journey') }}</strong>
                                    </span>
                                @endif
			</div>
			<div class="bnr-left">
				<!-- <label class="inputLabel">To</label>
				<select class="city" name="to" placeholder="Enter a city">
					<option></option>
					@foreach($se as $m)
					<option>{{$m->destination}}</option>
					@endforeach
				</select> -->
				<!-- <input class="city" type="text" name="to" plcaholder="Enter a city">
			</div> -->
				<div class="clearfix"></div>
		</div> 
		<div class="ban-bottom">
			<div class="form-group{{ $errors->has('trip_date') ? ' has-error' : '' }}">
				<label class="inputLabel">Date of Journey</label>
				<input class="city" name="trip_date" type="date" >
				@if ($errors->has('trip_date'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('trip_date') }}</strong>
                                    </span>
                                @endif
			</div>
			<!-- <div class="bnr-right">
				<label class="inputLabel">Date of Return<span class="opt">&nbsp;(Optional)</span></label>
				<input class="date" id="datepicker1" type="text">
			</div> -->
				<div class="clearfix"></div>
				<!---start-date-piker---->
				
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
			<!---/End-date-piker---->
		</div>
		<div class="sear">
			<!-- <form action="{{url('/bus_view')}}"> -->
				<button class="seabtn">Search Buses</button>
			<!-- </form> -->
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</form>
<!--- /banner ---->
<!--- rupes ---->


<!---track---->

<!--- /track ---->
<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-truck"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>{{$r}}</h3>
				<p>ROUTES</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>{{$u}}</h3>
				<p>Users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>{{$t}}</h3>
				<p>TICKETS SOLD</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Bus Operators</h3>
				<ul>
					<li><a href="">Sajha Yatayat </a></li>
					<li><a href="">Sajha Yatayat </a></li>
					<li><a href="">Sajha Yatayat </a></li>
					<li><a href="">Sajha Yatayat </a></li>
					<li><a href="">Orlando Charter</a></li>
					<li><a href="">New Orleans Charter</a></li>
					<li><a href="">Houston Charter</a></li>
					<li><a href="">Nashville Charter</a></li>
					<li><a href="">Charlotte Charter</a></li>
					<li><a href="">Toronto Charter</a></li>
					<li><a href="">Washington Charter</a></li>
					<li><a href="">Los Angeles Charter</a></li>
					<li><a href="">Chicago Charter</a></li>
					<li><a href="">Orlando Charter</a></li>
					<li><a href="">New Orleans Charter</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Bus Routes</h3>
				<ul>
					@foreach($ra as $m)
					<li><a href="">{{$m->fro_m}} - {{$m->destination}}</a></li>
					@endforeach
					
					<div class="clearfix"></div>
				</ul>
				<a href="{{url('admin/cusroute')}}">See All</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>



@endsection