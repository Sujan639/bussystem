<!DOCTYPE html>
<html lang="en">

@include('include.header')

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       @include('include.nevigation')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('include.upper_bar')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            @yield('main-content')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    @include('include.footer_script')

</body>

</html>
<!-- end document-->
