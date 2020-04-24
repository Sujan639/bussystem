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

<div class="terms">
	<div class="container">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" align="center" >Terms and Conditions</h3>
    <br>
    <br>
    <br>
		<h6 class="wow fadeInDown animated animated" data-wow-delay=".5s"  > Our Responsibilities</h6>
		<p class="wow fadeInDown animated animated" data-wow-delay=".5s"><span>1. </span>Issuing a valid ticket for its’ network of bus operators.</p>
    <p class="wow fadeInDown animated animated" data-wow-delay=".5s"><span>2. </span>Providing refund and support in the case of cancellation.</p>
    <p class="wow fadeInDown animated animated" data-wow-delay=".5s"><span>3. </span>Providing customer support and information in customer queries.</p>
    


    <h6 class="wow fadeInDown animated animated" data-wow-delay=".5s">We Are Not Responsible For</h6>
    <p class="wow fadeInDown animated animated" data-wow-delay=".5s"><span>1. </span>The bus not departing / reaching on time.</p>
    <p class="wow fadeInDown animated animated" data-wow-delay=".5s"><span>2. </span>The bus operator canceling the trip due to unavoidable reasons.</p>
    <p class="wow fadeInDown animated animated" data-wow-delay=".5s"><span>3. </span>The baggage of the customer getting lost / stolen / damaged.</p>
    <p class="wow fadeInDown animated animated" data-wow-delay=".5s"><span>4. </span>The bus operator changing a customer’s seat at the last minute to accommodate a lady / child.</p>
    <p class="wow fadeInDown animated animated" data-wow-delay=".5s"><span>5. </span>The bus left because of customer waiting at the wrong boarding point.</p>
    
    
		</div>
	</div>
</div>
@endsection