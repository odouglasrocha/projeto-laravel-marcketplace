<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
//use Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\CategoryHeader;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Slider2;
use App\Models\SliderDot;
use App\Models\SliderIntro1;
use App\Models\SliderIntro2;
use App\Models\SliderIntroImage1;
use App\Models\SliderIntroImage2;
use App\Models\SliderIntroImage1Dot;
use App\Models\SliderIntroImage2Dot;
use App\Models\Product;
use App\Models\MultiImg; 
use Illuminate\Support\Facades\Hash;
use App\Models\BlogPost;

use App\Models\SubCategory;
use App\Models\SubSubCategory;

class IndexController extends Controller
{
    public function index(){
		$slider_intro_image1_dots = SliderIntroImage1Dot::where('status',1)->orderBy('id','DESC')->limit(1)->get();
		$slider_intro_image1s = SliderIntroImage1::where('status',1)->orderBy('id','DESC')->limit(1)->get();
		$slider_intro1s = SliderIntro1::where('status',1)->orderBy('id','DESC')->limit(1)->get();
		$slider_intro_image2_dots = SliderIntroImage2Dot::where('status',1)->orderBy('id','DESC')->limit(1)->get();
		$slider_intro_image2s = SliderIntroImage2::where('status',1)->orderBy('id','DESC')->limit(1)->get();
		$slider_intro2s = SliderIntro2::where('status',1)->orderBy('id','DESC')->limit(1)->get();
		$slider_dots = SliderDot::where('status',1)->orderBy('id','DESC')->limit(1)->get();
		$slider2s = Slider2::where('status',1)->orderBy('id','DESC')->limit(1)->get();
		$sliders = Slider::where('status',1)->orderBy('id','DESC')->limit(1)->get();
		$category_headers = CategoryHeader::orderBy('category_name_en','ASC')->get();
		$categories = Category::orderBy('category_name_en','ASC')->get();

        return view('frontend.index',compact('categories','category_headers','sliders','slider2s','slider_dots',
	    'slider_intro1s','slider_intro_image1s','slider_intro_image1_dots','slider_intro2s','slider_intro_image2s',
	    'slider_intro_image2_dots'));
    }

    public function UserLogout(){
    	Auth::logout();
    	return Redirect()->route('login');
    }

    public function UserProfile(){
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	return view('frontend.profile.user_profile',compact('user'));
    }

    public function UserProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
		$data->name = $request->name;
		$data->email = $request->email;
		$data->phone = $request->phone;
 

		if ($request->file('profile_photo_path')) {
			$file = $request->file('profile_photo_path');
			@unlink(public_path('upload/user_images/'.$data->profile_photo_path));
			$filename = date('YmdHi').$file->getClientOriginalName();
			$file->move(public_path('upload/user_images'),$filename);
			$data['profile_photo_path'] = $filename;
		}
		$data->save();

		$notification = array(
			'message' => 'User Profile Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('dashboard')->with($notification);

    } // end method 


    public function UserChangePassword(){
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	return view('frontend.profile.change_password',compact('user'));
    }
 

    public function UserPasswordUpdate(Request $request){

		$validateData = $request->validate([
			'oldpassword' => 'required',
			'password' => 'required|confirmed',
		]);

		$hashedPassword = Auth::user()->password;
		if (Hash::check($request->oldpassword,$hashedPassword)) {
			$user = User::find(Auth::id());
			$user->password = Hash::make($request->password);
			$user->save();
			Auth::logout();
			return redirect()->route('user.logout');
		}else{
			return redirect()->back();
		}

	}// end method
}
