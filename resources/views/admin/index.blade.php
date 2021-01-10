@extends('layouts.master_admin')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Overview</h2>
            </div>
        </div>
        <div class="col-md-4">
        	<div class="card">
  <div class="card-header  bg-info text-white">Reservation</div>
  <div class="card-body">
    <ul>
    	<li>New Reservation &nbsp; <span class="text-muted">{{count($booking->where('status','Pending'))}}</span></li>
    	<li>Confirm Reservation &nbsp; <span class="text-muted">{{count($booking->where('status','Confirmed'))}}</span></li>
    	<li>Reject Reservation &nbsp; <span class="text-muted">{{count($booking->where('status','Rejected'))}}</span></li>
    </ul>
    	
    
  </div>
  <div class="card-footer text-muted"><a href="{{action('Admin\BookingController@index')}}" class="btn btn-primary">New</a> || <a href="{{action('Admin\BookingController@confirmed')}}" class="btn btn-primary">Confirmed</a> || <a href="{{action('Admin\BookingController@rejected')}}" class="btn btn-primary">Rejected</a></div>
</div>
        </div>
        <div class="col-md-4">
        	<div class="card">
  <div class="card-header bg-secondary">Services</div>
  <div class="card-body">
    
     <ul>
    	<li>Photography &nbsp; <span class="text-muted">{{count($photo_pkg)}}</span></li>
    	<li>Cinematography &nbsp; <span class="text-muted">{{count($cine_pkg)}}</span></li>
    	
    </ul>	
    
  </div>
  <div class="card-footer text-muted"><a href="{{action('Admin\PhotoPackageController@index')}}" class="btn btn-primary">See Photographs</a> || <a href="{{action('Admin\CinePackageController@index')}}" class="btn btn-primary">See Cinematographs</a></div>
</div>
        </div>
        <div class="col-md-4">
        	<div class="card">
  <div class="card-header bg-primary">Team</div>
  <div class="card-body">
    <h5 class="card-title">Total Team Member &nbsp; <span class="text-muted">{{count($teams)}}</span></h5>
    
  </div>
  <div class="card-footer text-muted"><a href="{{action('Admin\PhotographerController@index')}}" class="btn btn-primary">See More</a></div>
</div>
        </div>
        <div class="col-md-4">
        	<div class="card">
  <div class="card-header bg-danger text-white">Gallery</div>
  <div class="card-body">
    <h5 class="card-title">Total photos &nbsp; <span class="text-muted">{{count($photos)}}</span></h5>
    
    
  </div>

  <div class="card-footer text-muted"><a href="{{asset('Admin\PhotosController@index')}}" class="btn btn-primary">See More</a></div>
</div>
        </div>
        <div class="col-md-4">
        	<div class="card">
  <div class="card-header bg-warning text-white">Users</div>
  <div class="card-body">
    
    <ul>
    	<li>Total Member &nbsp; <span class="text-muted">{{count($user)}}</span></li>
    	<li>Total User &nbsp; <span class="text-muted">{{count($user->where('userType','User'))}}</span></li>
    	<li>Total Admin &nbsp; <span class="text-muted">{{count($user->where('userType','Admin'))}}</span></li>
    </ul>
    	
    
  </div>
  <div class="card-footer text-muted"><a href="{{action('Admin\UserController@index')}}" class="btn btn-primary">Go to</a></div>
</div>
        </div>
        
    </div>
@endsection