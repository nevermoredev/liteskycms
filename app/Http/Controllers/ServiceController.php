<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\COntact;

class ServiceController extends Controller
{
    public function view($id){
    	$data = Service::find($id)->toArray();
    	$info = Contact::first()->toArray();
    	$service_id = $id;

    	return view('view_service',[

    		'maininfo'=>$info,
    		'service'=>$data
    	]);

    }

    public function edit($id){
        $data = Service::find($id)->toArray();

    	return view('admin.service_edit',[
            'service'=> $data
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
            $service = new Service();
            $service->fill($input);
            if($service->save()){
                return redirect('/admin')->with('status','Service added');
            }
        }


        return view('admin.add_service');
    }
}
