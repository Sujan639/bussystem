@extends('user.index')
@section('main-content')
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
<div class="container">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div>
        <img class="carousel-img-width" src="{{asset('assets/slide_image/'.$s[0]->img)}}"
          alt="First slide" class="carousel-img-width">
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
          alt="Second slide" class="carousel-img-width">
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
          alt="Third slide" class="carousel-img-width">
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

<div class="hotels-top">
	<div class="container">
		<h3>Available Yatayat</h3>
		@foreach($y as $n)
		<div class="col-md-4 hotels-left wow fadeInLeft animated" data-wow-delay=".5s">
			<a href="{{url('yat_td_finder/'.$n->id)}}">
					<div class="view1 view1-sixth" width="200px">
						<img src="{{asset('assets/yatayat/'.$n->img)}}" class="img-responsive" alt="" height="300px">
							<div class="mask">
								<h2>{{$n->dis}}</h2>
							</div>
							
					</div>
				<h2>{{$n->dis}}</h2>
			</a>
		</div>
		@endforeach
		
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="hotels-top"> 
	<div class="container">
	<h3>Top Destinations</h3>
	@foreach($t as $c)
		<div class="col-md-4 hotels-left wow fadeInLeft animated" data-wow-delay=".5s">
			<a href="{{url('yat_td_finder/'.$c->id.'/edit')}}"><div class="view1 view1-sixth">
				<img src="{{asset('assets/top_des_img/'.$c->img)}}" class="img-responsive" alt="" height="300px">
				<div class="mask">
                    <h2>{{$c->name}}</h2>
                </div>
                
			</div>
			</a>
<h2>{{$c->name}}</h2>
		</div>
		@endforeach
				<div class="clearfix"></div>
		</div>
	</div>
</div>

 @endsection