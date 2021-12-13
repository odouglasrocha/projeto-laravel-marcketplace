<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SliderDot;
use Carbon\Carbon;
use Image;

class SliderDotController extends Controller
{
    public function SliderDotView(){
		$slider_dots = SliderDot::latest()->get();
		return view('backend.slider.sliderdot_view',compact('slider_dots'));

	}// end method 

    public function SliderDotStore(Request $request){

    	$request->validate([
    		 
    		'slider_img' => 'required',
			
    	],[
    		'slider_img.required' => 'Plz Select One Image',
			
    		 
    	]);

    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(70,70)->save('upload/slider/slider2_img/dot_img/'.$name_gen);
    	$save_url = 'upload/slider/slider2_img/dot_img/'.$name_gen;


    SliderDot::insert([
        
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'SliderDot Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 




    public function SliderDotEdit($id){
    $slider_dots = SliderDot::findOrFail($id);
		return view('backend.slider.sliderdot_edit',compact('slider_dots'));
    }


public function SliderDotUpdate(Request $request){
    	
    	$sliderdot_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('slider_img')) {

    	unlink($old_img);
    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(472,510)->save('upload/slider/slider2_img/dot_img/'.$name_gen);
    	$save_url = 'upload/slider/slider2_img/dot_img/'.$name_gen;

	SliderDot::findOrFail($sliderdot_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Slider Dot Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-sliderdot')->with($notification);

    	}else{

    	SliderDot::findOrFail($sliderdot_id)->update([
		//'title' => $request->title,
		//'description' => $request->description,
		//'description2' => $request->description2,
		

    	]);

	    $notification = array(
			'message' => 'Slider Dot Updated Without Image Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-sliderdot')->with($notification);

    	} // end else 
    } // end method 


    public function SliderDotDelete($id){
    	$sliderdot = SliderDot::findOrFail($id);
    	$img = $sliderdot->slider_img;
    	unlink($img);
    	SliderDot::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'Slider Dot Delectd Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method


    public function SliderDotInactive($id){
    	SliderDot::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'Slider Dot Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function SliderDotActive($id){
    	SliderDot::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'Slider Dot Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
