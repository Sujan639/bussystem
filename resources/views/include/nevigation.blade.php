<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          
          <img src="{{asset('fassets/images/logo.png')}}" width="180px" height="70px">
        </div>
       <!--  <div class="sidebar-brand-text mx-3" style="color: lightgreen;">Online Bus Ticketing</div> -->
      </a>

      <!-- Divider -->
      <?php $r=Auth::user()->type;
if($r=="admin")
  { ?>
      
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/home')}}">
          <i class="fas fa-fw fa-tachometer-alt" style="font-size:24px;"></i>
          <span>{{$r=Auth::user()->type}} Dashboard</span></a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin/customer')}}">
          <i class="fas fa-users" style="font-size:24px;"></i>
          <span>Custumers</span></a>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/bus')}}">
          <i class="fa fa-bus" style="font-size:24px;"></i>
          <span>Buses</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item active ">
        <a class="nav-link" href="{{url('admin/route')}}">
          <i class=" fas fa-route" style="font-size:24px;"></i>
          <span>Routes</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item active ">
        <a class="nav-link" href="{{url('admin/available')}}">
          <i class="far fa-copy" style="font-size:24px;"></i>
          <span>Availability</span></a>
      </li>
       <hr class="sidebar-divider">

      <li class="nav-item active ">
        <a class="nav-link" href="{{url('admin/reservation')}}">
          <i class="fas fa-address-book " style="font-size:24px;"></i>
          <span>Reservations</span></a>
      </li>
       <hr class="sidebar-divider">

      <li class="nav-item active ">
        <a class="nav-link" href="{{url('admin/ticket')}}">
          <i class="fas fa-ticket-alt" style="font-size:24px;"></i>
          <span>Tickets</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item active ">
        <a class="nav-link" href="{{url('admin/feedback/create')}}">
          <i class="fas fa-comment" style="font-size:24px;"></i>
          <span>Customer's Feedbacks</span></a>
      </li>
      <hr class="sidebar-divider">

      <div class="dropdown">
      <li class="nav-item active ">
          <i class="fas fa-fw fa-tachometer-alt" style="font-size:24px;"></i>
          

    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
      Frontend Controls
    </button>
    <div class="dropdown-menu">
      <hr class="sidebar-divider">
      <a class="dropdown-item" href="{{url('admin/frontcon')}}">cus/front slide show</a>
      <hr class="sidebar-divider">
      <a class="dropdown-item" href="{{url('admin/yatayat')}}">Yatayat images</a>
      <hr class="sidebar-divider">
      <a class="dropdown-item" href="{{url('admin/top_des')}}">Top Destination images</a>
    </div>
  </div>
      </li>
    <?php }
    elseif($r=="custumer"){ ?>
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/home')}}">
          <i class="fas fa-fw fa-tachometer-alt" style="font-size:24px;"></i>
          <span>{{$r=Auth::user()->type}} Dashboard</span></a>
      </li>


      
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/cusmyinfo/'.Auth::user()->id)}}">
          <i class="fas fa-user" style="font-size:24px;"></i>
          <span>Personal Detail</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item active ">
        <a class="nav-link" href="{{url('/admin/cusbus')}}">
          <i class="fa fa-bus-alt" style="font-size:24px;"></i>
          <span>Buses</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin/cusroute')}}">
          <i class=" fas fa-route" style="font-size:24px;"></i>
          <span>Routes</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin/cusavailable')}}">
          <i class="far fa-copy" style="font-size:24px;"></i>
          <span>Availability</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/cusmyreservation/'.Auth::user()->id)}}">
          <i class="fas fa-ticket-alt" style="font-size:24px;"></i>
          <span>My Tickets</span></a>
      </li>
<hr class="sidebar-divider">
       <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/wbs/'.Auth::user()->id)}}">
          <i class="fas fa-address-book " style="font-size:24px;"></i>
          <span>My Reservation</span></a>
      </li>
      <hr class="sidebar-divider">
       <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/feedback')}}">
          <i class="fas fa-comment" style="font-size:24px;"></i>
          <span>Feedback</span></a>
      </li>

<?php } ?>



      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Interface
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link " href="#" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a> -->
        <!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div> -->
      </li>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
     <!--  <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> -->

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block"> -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>