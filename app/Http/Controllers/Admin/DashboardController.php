<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Gallery;
use App\Photographer;
use App\PhotographyPackage;
use App\CenematographyPackage;
use App\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
    	$user = User::all();
    	$photos = Gallery::all();
    	$teams = Photographer::all();
    	$cine_pkg = CenematographyPackage::all();
    	$photo_pkg = PhotographyPackage::all();
    	$booking = Booking::all();
        return view('admin.index',compact('user','photos','teams','cine_pkg','photo_pkg','booking'));
    }
}
