<section class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8">
                <div class="header-left">
                    <a href=""><i class="fa fa-envelope"></i> info@photographs.com</a>
                    <a href=""><i class="fa fa-phone"></i> +8801671621860</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 text-right">
                <div class="header-social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Header Area Start -->
<header class="header header-fixed">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar navbar-expand-xl navbar-light">
                    <a style="font-family: 'Dancing Script', cursive;" class="navbar-brand" href="{{action('User\IndexController@index')}}">Photographs</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ml-auto mainmenu" id="navbarNav">
                        <ul class="navbar-nav ml-auto another">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About Us
                                </a>
                                <div class="dropdown-menu my-dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item my-dropdown-item transition" href="{{action('User\OtherPageController@about')}}">=> Who We Are</a>
                                    <a class="dropdown-item my-dropdown-item transition" href="{{action('User\OtherPageController@client_review')}}">=> Client Reviews</a>
                                </div>
                            </li>
                            <li><a href="{{action('User\PhotographerController@index')}}">Photographers</a></li>
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    services
                                </a>
                                <div class="dropdown-menu my-dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item my-dropdown-item transition" href="{{action('User\PackageController@photo_package')}}">=> Photography</a>
                                    <a class="dropdown-item my-dropdown-item transition" href="{{action('User\PackageController@cine_package')}}">=> Cinematography</a>
                                </div>
                            </li>
                           <!--  <li><a href="{{action('User\OtherPageController@faq')}}">Faq</a></li> -->
                            <li><a href="{{url('gallery')}}">Gallery</a></li>
                            <li><a href="{{action('User\OtherPageController@contact')}}">Contact</a></li>
                            @if(isset(Auth::user()->email))
                                <li><a href="{{action('User\OtherPageController@profile')}}">{{Auth::user()->name}}</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <li><a href="{{route('login')}}">Login</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>