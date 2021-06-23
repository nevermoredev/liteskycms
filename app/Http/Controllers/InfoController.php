<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class InfoController extends Controller
{

    public function edit(Request $request,Contact $contact){
    	$contact = Contact::find(1);

    	if($request->isMethod('post')) {

			$input = $request->except('_token');
			
			if($request->hasFile('favicon')) {
				$file = $request->file('favicon');
				$file->move(public_path().'/assets/img',$file->getClientOriginalName());
				$input['favicon'] = $file->getClientOriginalName();
			}
			else {
				$input['favicon'] = $input['old_favicon'];
			}
			unlink(public_path().'/img/'.$input['old_favicon']);
			unset($input['old_favicon']);
			
			$contact->fill($input);
			
			if($contact->update()) {
				return redirect('admin')->with('status','Info Update');
			}
		}
    	else{
    		$info = [
    		'info'=>$contact
    		];
    		return view('admin.info_edit',$info);
    	}
    }
 }
