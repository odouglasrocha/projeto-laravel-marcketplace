<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SliderIntro2;
use Carbon\Carbon;
use Image;

class SliderIntro2Controller extends Controller
{
    public function SliderIntro2View(){
		$slider_intro2s = SliderIntro2::latest()->get();
		return view('backend.slider.slider-intro2_view',compact('slider_intro2s'));

	}// end method 

    public function SliderIntro2Store(Request $request){

    	$request->validate([
    		 
    		'slider_img' => 'required',
			
    	],[
    		'slider_img.required' => 'Plz Select One Image',
			
    		 
    	]);

    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1903,510)->save('upload/slider-intro2/'.$name_gen);
    	$save_url = 'upload/slider-intro2/'.$name_gen;


    SliderIntro2::insert([
		'title' => $request->title,
		'description' => $request->description,
		'description2' => $request->description2,
        'description3' => $request->description3,
        'description4' => $request->description4,
        'description5' => $request->description5,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Slider Inserted 2 Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 




    public function SliderIntro2Edit($id){
    $slider_intro2s = SliderIntro2::findOrFail($id);
		return view('backend.slider.slider-intro2_edit',compact('slider_intro2s'));
    }


public function SliderIntro2Update(Request $request){
    	
    	$slider_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('slider_img')) {

    	unlink($old_img);
    	$image = $request->file('slider_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1903,510)->save('upload/slider-intro2/'.$name_gen);
    	$save_url = 'upload/slider-intro2/'.$name_gen;

    SliderIntro2::findOrFail($slider_id)->update([
		'title' => $request->title,
		'description' => $request->description,
		'description2' => $request->description2,
        'description3' => $request->description3,
        'description4' => $request->description4,
        'description5' => $request->description5,
		'slider_img' => $save_url,

    	]);

	    $notification = array(
			'message' => 'Slider Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-intro1')->with($notification);

    	}else{

    SliderIntro2::findOrFail($slider_id)->update([
		'title' => $request->title,
		'description' => $request->description,
		'description2' => $request->description2,
        'description3' => $request->description3,
        'description4' => $request->description4,
        'description5' => $request->description5,
		

    	]);

	    $notification = array(
			'message' => 'Slider Updated Without Image Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('manage-slider-intro1')->with($notification);

    	} // end else 
    } // end method 


    public function SliderIntro2Delete($id){
    	$slider_intro2 = SliderIntro2::findOrFail($id);
    	$img = $slider_intro2->slider_img;
    	unlink($img);
    	SliderIntro2::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'Slider Intro 2 Delectd Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method


    public function SliderIntro2Inactive($id){
    	SliderIntro2::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'Slider Intro 2 Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


    public function SliderIntro2Active($id){
    	SliderIntro2::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'Slider Intro 2 Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
