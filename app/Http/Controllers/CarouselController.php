<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;

class CarouselController extends Controller
{
        public function edit($id){
        $data = Carousel::find($id)->toArray();

    	return view('admin.carousel_edit',[
            'carousel'=> $data
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
	            $carousel = new Carousel();
	            $carousel->fill($input);
	            if($carousel->save()){
	                return redirect('/admin')->with('status','Slide added');
	            }
	        }


	        return view('admin.add_carousel');
    }
}