<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Contact;

class ProductController extends Controller
{
    public function view($id){
    	$data = Product::find($id)->toArray();
    	$info = Contact::first()->toArray();
    	$product_id = $id;

    	return view('view_product',[

    		'maininfo'=>$info,
    		'product'=>$data,
    	]);

}


    public function add(Request $request){
        if($request->isMethod('POST')){
            $input = $request->except('_token');
            if($request->hasFile('img')){

                $file = $request->file('img');
                $input['img'] = $file->getClientOriginalName();
                $file->move(public_path().'/img',$input['img']);
            }
            $product = new Product();
            $product->fill($input);
            if($product->save()){
                return redirect('/admin')->with('status','Product added');
            }
        }


        return view('admin.add_product');
    }
}
