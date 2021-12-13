<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SliderIntroImage1Dot;
use Carbon\Carbon;
use Image;

class SliderIntroImage1DotController extends Controller
{
    public function SliderIntroImage1DotView(){
		$slider_intro_image1_dots = SliderIntroImage1Dot::latest()->get();
		return view('backend.slider.slider_intro_image1dot_view',compact('slider_intro_image1_dots'));

	}// end method 

    public function SliderIntroImage1DotStore(Request $request){

    	$request->validate([
    		 
    		'slider_img' => 'required',
			
    	],[
    		'slider_img.required' => 'Plz Select One Image',
			
    		 
    	]);

    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(71,71)->save('upload/slider-intro1/intro_image2/'.$name_gen);
    	$save_url = 'upload/slider-intro1/intro_image2/'.$name_gen;


    SliderIntroImage1Dot::insert([
        
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage1Dot Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 




    public function SliderIntroImage1DotEdit($id){
    $slider_intro_image1_dots= SliderIntroImage1Dot::findOrFail($id);
		return view('backend.slider.slider_intro_image1dot_edit',compact('slider_intro_image1_dots'));
    }


public function SliderIntroImage1DotUpdate(Request $request){
    	
    	$slider_introimage1dot_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('slider_img')) {

    	unlink($old_img);
    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(71,71)->save('upload/slider-intro1/intro_image2/'.$name_gen);
    	$save_url = 'upload/slider-intro1/intro_image2/'.$name_gen;

    SliderIntroImage1Dot::findOrFail($slider_introimage1dot_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage1Dot Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-introimage1dot')->with($notification);

    	}else{

    SliderIntroImage1Dot::findOrFail($slider2_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage1Dot Updated Without Image Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-introimage1dot')->with($notification);

    	} // end else 
    } // end method 


    public function SliderIntroImage1DotDelete($id){
    	$slider_introimage1dot = SliderIntroImage1Dot::findOrFail($id);
    	$img = $slider_introimage1dot->slider_img;
    	unlink($img);
    	SliderIntroImage1Dot::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'SliderIntroImage1Dot Delectd Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method


    public function SliderIntroImage1DotInactive($id){
    	SliderIntroImage1Dot::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'SliderIntroImage1Dot Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function SliderIntroImage1DotActive($id){
    	SliderIntroImage1Dot::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'SliderIntroImage1Dot Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
