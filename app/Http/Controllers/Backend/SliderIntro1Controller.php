<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SliderIntro1;
use Carbon\Carbon;
use Image;

class SliderIntro1Controller extends Controller
{
    public function SliderIntro1View(){
		$slider_intro1s = SliderIntro1::latest()->get();
		return view('backend.slider.slider-intro1_view',compact('slider_intro1s'));

	}// end method 

    public function SliderIntro1Store(Request $request){

    	$request->validate([
    		 
    		'slider_img' => 'required',
			
    	],[
    		'slider_img.required' => 'Plz Select One Image',
			
    		 
    	]);

    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1903,510)->save('upload/slider-intro1/'.$name_gen);
    	$save_url = 'upload/slider-intro1/'.$name_gen;


    SliderIntro1::insert([
		'title' => $request->title,
		'description' => $request->description,
		'description2' => $request->description2,
        'description3' => $request->description3,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Slider Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 




    public function SliderIntro1Edit($id){
    $slider_intro1s = SliderIntro1::findOrFail($id);
		return view('backend.slider.slider-intro1_edit',compact('slider_intro1s'));
    }


public function SliderIntro1Update(Request $request){
    	
    	$slider_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('slider_img')) {

    	unlink($old_img);
    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1903,510)->save('upload/slider-intro1/'.$name_gen);
    	$save_url = 'upload/slider-intro1/'.$name_gen;

    SliderIntro1::findOrFail($slider_id)->update([
		'title' => $request->title,
		'description' => $request->description,
		'description2' => $request->description2,
        'description3' => $request->description3,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Slider Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-intro1')->with($notification);

    	}else{

    SliderIntro1::findOrFail($slider_id)->update([
		'title' => $request->title,
		'description' => $request->description,
		'description2' => $request->description2,
        'description3' => $request->description3,
		

    	]);

	    $notification = array(
			'message' => 'Slider Updated Without Image Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-intro1')->with($notification);

    	} // end else 
    } // end method 


    public function SliderIntro1Delete($id){
    	$slider_intro1 = SliderIntro1::findOrFail($id);
    	$img = $slider_intro1->slider_img;
    	unlink($img);
    	SliderIntro1::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'Slider Intro 1 Delectd Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method


    public function SliderIntro1Inactive($id){
    	SliderIntro1::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'Slider Intro 1 Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function SliderIntro1Active($id){
    	SliderIntro1::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'Slider Intro 1 Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
