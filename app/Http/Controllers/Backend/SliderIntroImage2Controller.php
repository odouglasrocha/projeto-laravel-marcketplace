<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SliderIntroImage2;
use Carbon\Carbon;
use Image;

class SliderIntroImage2Controller extends Controller
{
    public function SliderIntroImage2View(){
		$slider_intro_image2s = SliderIntroImage2::latest()->get();
		return view('backend.slider.slider_intro_image2_view',compact('slider_intro_image2s'));

	}// end method 

    public function SliderIntroImage2Store(Request $request){

    	$request->validate([
    		 
    		'slider_img' => 'required',
			
    	],[
    		'slider_img.required' => 'Plz Select One Image',
			
    		 
    	]);

    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(488,510)->save('upload/slider-intro2/intro_image1/'.$name_gen);
    	$save_url = 'upload/slider-intro2/intro_image1/'.$name_gen;


    SliderIntroImage2::insert([
        
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage2 Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 




    public function SliderIntroImage2Edit($id){
    $slider_intro_image2s = SliderIntroImage2::findOrFail($id);
		return view('backend.slider.slider_intro_image2_edit',compact('slider_intro_image2s'));
    }


public function SliderIntroImage2Update(Request $request){
    	
    	$slider_introimage2_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('slider_img')) {

    	unlink($old_img);
    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(488,510)->save('upload/slider-intro2/intro_image1/'.$name_gen);
    	$save_url = 'upload/slider-intro2/intro_image1/'.$name_gen;

    SliderIntroImage2::findOrFail($slider_introimage2_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage2 Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-introimage2')->with($notification);

    	}else{

    SliderIntroImage2::findOrFail($slider_introimage2_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage2 Updated Without Image Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-introimage2')->with($notification);

    	} // end else 
    } // end method 


    public function SliderIntroImage2Delete($id){
    	$slider_introimage2 = SliderIntroImage2::findOrFail($id);
    	$img = $slider_introimage2->slider_img;
    	unlink($img);
    	SliderIntroImage2::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'SliderIntroImage2 Delectd Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method


    public function SliderIntroImage2Inactive($id){
    	SliderIntroImage2::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'SliderIntroImage2 Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function SliderIntroImage2Active($id){
    	SliderIntroImage2::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'SliderIntroImage2 Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
