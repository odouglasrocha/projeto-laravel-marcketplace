<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SliderIntroImage1;
use Carbon\Carbon;
use Image;

class SliderIntroImage1Controller extends Controller
{
    public function SliderIntroImage1View(){
		$slider_intro_image1s = SliderIntroImage1::latest()->get();
		return view('backend.slider.slider_intro_image1_view',compact('slider_intro_image1s'));

	}// end method 

    public function SliderIntroImage1Store(Request $request){

    	$request->validate([
    		 
    		'slider_img' => 'required',
			
    	],[
    		'slider_img.required' => 'Plz Select One Image',
			
    		 
    	]);

    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(598,377)->save('upload/slider-intro1/intro_image1/'.$name_gen);
    	$save_url = 'upload/slider-intro1/intro_image1/'.$name_gen;


    SliderIntroImage1::insert([
        
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage1 Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 




    public function SliderIntroImage1Edit($id){
    $slider_intro_image1s = SliderIntroImage1::findOrFail($id);
		return view('backend.slider.slider_intro_image1_edit',compact('slider_intro_image1s'));
    }


public function SliderIntroImage1Update(Request $request){
    	
    	$slider2_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('slider_img')) {

    	unlink($old_img);
    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(598,377)->save('upload/slider-intro1/intro_image1/'.$name_gen);
    	$save_url = 'upload/slider-intro1/intro_image1/'.$name_gen;

    SliderIntroImage1::findOrFail($slider2_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage1 Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-introimage1')->with($notification);

    	}else{

    SliderIntroImage1::findOrFail($slider2_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage1 Updated Without Image Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-introimage1')->with($notification);

    	} // end else 
    } // end method 


    public function SliderIntroImage1Delete($id){
    	$slider_introimage1 = SliderIntroImage1::findOrFail($id);
    	$img = $slider_introimage1->slider_img;
    	unlink($img);
    	SliderIntroImage1::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'SliderIntroImage1 Delectd Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method


    public function SliderIntroImage1Inactive($id){
    	SliderIntroImage1::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'SliderIntroImage1 Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function SliderIntroImage1Active($id){
    	SliderIntroImage1::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'SliderIntroImage1 Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
