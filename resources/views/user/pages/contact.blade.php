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

				
					
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<div class="contact">
	<div class="container">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>512-421-3940</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
                        <p>bus@support.com </p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
                        <p>Kathmandu Chabahil </p>
					</div>
				</div>
    </div>
    <div class="container">
				
    <!-- contacts card -->
    <div class="card card-default" id="card_contacts">
        <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
            <ul class="list-group pull-down" id="contact-list">
                <li class="list-group-item">
                    <div class="row w-100">
                        <div class="col-12 col-sm-6 col-md-3 px-0">
                            <img src="{{asset('fassets/images/ch (1).jpg')}}" height="128px" width="128px"  class="rounded-circle mx-auto d-block img-fluid">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                            <span class="fa fa-mobile fa-2x text-success float-right pulse" title="online now"></span>
                            <label class="name lead">Chhewang Lama</label>
                            <br> 
                            <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5842 Hillcrest Rd"></span>
                            <span class="text-muted">Naranthan</span>
                            <br>
                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(870) 288-4149"></span>
                            <span class="text-muted small">(870) 288-4149</span>
                            <br>
                            <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                            <span class="text-muted small text-truncate">chhewang.lama@gmail.com</span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row w-100">
                        <div class="col-12 col-sm-6 col-md-3 px-0">
                            <img src="{{asset('fassets/images/raj.jpg')}}" height="128px" width="128px"  class="rounded-circle mx-auto d-block img-fluid">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                            <span class="name lead">Rajesh Karki</span>
                            <br>
                            <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="7396 E North St"></span>
                            <span class="text-muted">Kapan</span>
                            <br>
                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(560) 180-4143"></span>
                            <span class="text-muted small">(560) 180-4143</span>
                            <br>
                            <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="seth.frazier@example.com"></span>
                            <span class="text-muted small text-truncate">rajesh500@gmail.com</span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row w-100">
                        <div class="col-12 col-sm-6 col-md-3 px-0">
                            <img src="{{asset('fassets/images/ch (3).jpg')}}" height="128px" width="128px"  class="rounded-circle mx-auto d-block img-fluid">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                            <span class="fa fa-envelope fa-lg text-danger float-right" title="left you a message"></span>
                            <span class="name lead">Laxamn Adhikari</span>
                            <br> <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5267 Cackson St"></span>
                            <span class="text-muted">Namgel</span>
                            <br>
                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(497) 160-9776"></span>
                            <span class="text-muted small">(497) 160-9776</span>
                            <br>
                            <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="rosemary.porter@example.com"></span>
                            <span class="text-muted small text-truncate">laxman434@gmail.com</span>
                            <br>

                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row w-100">
                        <div class="col-12 col-sm-6 col-md-3 px-0">
                            <img src="{{asset('fassets/images/ch (2).jpg')}}" height="128px" width="128px"  class="rounded-circle mx-auto d-block img-fluid">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                            <label class="name lead">Surendra Maharjan </label>
                            <br>

                            <span class="fa fa-fw fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="3903 W Alexander Rd"></span>
                            <span class="text-muted">Chakrapath</span>
                            <br>

                            <span class="fa fa-fw fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(867) 322-1852"></span>
                            <span class="text-muted small">(867) 322-1852</span>
                            <br>

                            <span class="fa fa-fw fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="debbie.schmidt@example.com"></span>
                            <span class="text-muted small text-truncate">surnd1245@gmail.com</span>

                        </div>
                    </div>
                </li>
            </ul>
            <!--/contacts list-->
        </div>
    </div>
    </div>

		</div>
					
				
 @endsection