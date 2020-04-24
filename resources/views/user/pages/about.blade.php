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


<div class="about">
	<div class="container">
		<div class="about-top wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
			<h1>Our Story</h1>
			<p>Online Bus Ticketing System – It is the online realtime bus ticket booking platform made as college project for final year of BSC.CSIT. This System came into existence with a vision of innovating business processes of Travel Operators in Nepal to provide quality service to road passengers.</p>

			<br>

			<h3>Scope</h3>


			<p>It ensures the tickets booking accessible to passengers at transparent prices with zero booking charges. Passengers can get the most accurate real time data of bus seat availability from among the list of operators.</p>
		</div>
		
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
 @endsection