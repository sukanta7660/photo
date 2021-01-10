<div class="nav-left-sidebar sidebar-light">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="{{url('admin')}}">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{url('admin')}}" ><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>

                    </li>
                    <li class="nav-divider">
                        Features
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/booking/*','admin/booking') ? 'active' : '') }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#booking" aria-controls="booking"><i class="fa fa-download"></i>Reservation</a>
                        <div id="booking" class="collapse submenu {{ (Request::is('admin/booking/*','admin/booking') ? 'show' : '') }}" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ (Request::is('admin/booking') ? 'active' : '') }}" href="{{action('Admin\BookingController@index')}}">New Reservation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ (Request::is('admin/booking/confirmed') ? 'active' : '') }}" href="{{action('Admin\BookingController@confirmed')}}">Confirmed Reservation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ (Request::is('admin/booking/rejected') ? 'active' : '') }}" href="{{action('Admin\BookingController@rejected')}}">Reject List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/package/*','admin/package') ? 'active' : '') }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#package" aria-controls="package"><i class="far fa-chart-bar"></i>Services</a>
                        <div id="package" class="collapse submenu {{ (Request::is('admin/package/*','admin/package') ? 'show' : '') }}" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ (Request::is('admin/package/photography') ? 'active' : '') }}" href="{{action('Admin\PhotoPackageController@index')}}">Photography</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ (Request::is('admin/package/cinematography') ? 'active' : '') }}" href="{{action('Admin\CinePackageController@index')}}">Cinematography</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/photographer') ? 'active' : '') }}" href="{{action('Admin\PhotographerController@index')}}" ><i class="fas fa-camera"></i>Team</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/gallery/photos') ? 'active' : '') }}" href="{{action('Admin\PhotosController@index')}}" ><i class="fas fa-image"></i>Gallery</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/users') ? 'active' : '') }}" href="{{action('Admin\UserController@index')}}" ><i class="fas fa-users"></i>Users</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>