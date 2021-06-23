<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Contact;
use App\Product;
use App\Service;
use DB;

class IndexController extends Controller
{

	public function execute(){

        $carousel = Carousel::all()->toArray();
        $info = Contact::first()->toArray();
        $product_list = Product::all()->toArray();
        $service_list = Service::all()->toArray();
		return view('main',
            [

            'maininfo' => $info,
            'sliders'=>$carousel,
            'products'=>$product_list,
            'services'=>$service_list

            ]);
	}
}
