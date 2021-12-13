<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SliderIntroImage2Dot;
use Carbon\Carbon;
use Image;

class SliderIntroImage2DotController extends Controller
{
    public function SliderIntroImage2DotView(){
		$slider_intro_image2_dots = SliderIntroImage2Dot::latest()->get();
		return view('backend.slider.slider_intro_image2dot_view',compact('slider_intro_image2_dots'));

	}// end method 

    public function SliderIntroImage2DotStore(Request $request){

    	$request->validate([
    		 
    		'slider_img' => 'required',
			
    	],[
    		'slider_img.required' => 'Plz Select One Image',
			
    		 
    	]);

    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(71,71)->save('upload/slider-intro2/intro_image2/'.$name_gen);
    	$save_url = 'upload/slider-intro2/intro_image2/'.$name_gen;


    SliderIntroImage2Dot::insert([
        
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage2Dot Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 




    public function SliderIntroImage2DotEdit($id){
    $slider_intro_image2_dots= SliderIntroImage2Dot::findOrFail($id);
		return view('backend.slider.slider_intro_image2dot_edit',compact('slider_intro_image2_dots'));
    }


public function SliderIntroImage2DotUpdate(Request $request){
    	
    	$slider_introimage2dot_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('slider_img')) {

    	unlink($old_img);
    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(71,71)->save('upload/slider-intro2/intro_image2/'.$name_gen);
    	$save_url = 'upload/slider-intro2/intro_image2/'.$name_gen;

    SliderIntroImage2Dot::findOrFail($slider_introimage2dot_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage2Dot Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-introimage2dot')->with($notification);

    	}else{

    SliderIntroImage2Dot::findOrFail($slider_introimage2dot_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		

    	]);

	    $notification = array(
			'message' => 'SliderIntroImage2Dot Updated Without Image Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-introimage2dot')->with($notification);

    	} // end else 
    } // end method 


    public function SliderIntroImage2DotDelete($id){
    	$slider_introimage2dot = SliderIntroImage2Dot::findOrFail($id);
    	$img = $slider_introimage2dot->slider_img;
    	unlink($img);
    	SliderIntroImage2Dot::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'SliderIntroImage2Dot Delectd Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method


    public function SliderIntroImage2DotInactive($id){
    	SliderIntroImage2Dot::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'SliderIntroImage2Dot Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function SliderIntroImage2DotActive($id){
    	SliderIntroImage2Dot::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'SliderIntroImage2Dot Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
