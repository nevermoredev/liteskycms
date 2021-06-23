<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Service;
use App\Contact;
use App\Carousel;


class AdminController extends Controller
{
    public function show(){

    	$maininfo = Contact::first()->toArray();
    	$product_list = Product::all()->toArray();
    	$service_list = Service::all()->toArray();
    	$carousel_item = Carousel::all()->toArray();
        $user = Auth::user()->toArray();
    	$data = [
    		'maininfo' => $maininfo,
    		'products' => $product_list ,
    		'services' => $service_list ,
    		'carousels' => $carousel_item 
    	];

    	return view('admin/admin_panel',$data);
    }

}
