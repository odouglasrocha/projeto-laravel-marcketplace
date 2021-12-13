<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Slider2;
use Carbon\Carbon;
use Image;

class Slider2Controller extends Controller
{
    public function Slider2View(){
		$slider2s = Slider2::latest()->get();
		return view('backend.slider.slider2_view',compact('slider2s'));

	}// end method 

    public function Slider2Store(Request $request){

    	$request->validate([
    		 
    		'slider_img' => 'required',
			
    	],[
    		'slider_img.required' => 'Plz Select One Image',
			
    		 
    	]);

    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(472,510)->save('upload/slider/slider2_img/'.$name_gen);
    	$save_url = 'upload/slider/slider2_img/'.$name_gen;


	Slider2::insert([
        
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Slider2 Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 




    public function Slider2Edit($id){
    $slider2s = Slider2::findOrFail($id);
		return view('backend.slider.slider2_edit',compact('slider2s'));
    }


public function Slider2Update(Request $request){
    	
    	$slider2_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('slider_img')) {

    	unlink($old_img);
    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(472,510)->save('upload/slider/slider2_img/'.$name_gen);
    	$save_url = 'upload/slider/slider2_img/'.$name_gen;

	Slider2::findOrFail($slider2_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Slider2 Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider')->with($notification);

    	}else{

    	Slider2::findOrFail($slider2_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		

    	]);

	    $notification = array(
			'message' => 'Slider2 Updated Without Image Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider2')->with($notification);

    	} // end else 
    } // end method 


    public function Slider2Delete($id){
    	$slider2 = Slider2::findOrFail($id);
    	$img = $slider2->slider_img;
    	unlink($img);
    	Slider2::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'Slider2 Delectd Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method


    public function Slider2Inactive($id){
    	Slider2::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'Slider2 Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function Slider2Active($id){
    	Slider2::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'Slider2 Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
