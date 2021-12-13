<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryHeader;

class CategoryHeaderController extends Controller
{
    public function CategoryHeaderView(){

    	$category_headers = CategoryHeader::latest()->get();
    	return view('backend.category.categoryheader_view',compact('category_headers'));
    }

    public function CategoryHeaderStore(Request $request){

        $request->validate([
             'category_name_en' => 'required',
             'category_name_hin' => 'required',
             'category_icon' => 'required',
         ],[
             'category_name_en.required' => 'Input Category English Name',
             'category_name_hin.required' => 'Input Category Hindi Name',
         ]);
 
          
 
    CategoryHeader::insert([
         'category_name_en' => $request->category_name_en,
         'category_name_hin' => $request->category_name_hin,
         'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
         'category_slug_hin' => str_replace(' ', '-',$request->category_name_hin),
         'category_icon' => $request->category_icon,
 
         ]);
 
         $notification = array(
             'message' => 'Category Header Inserted Successfully',
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification);
 
     } // end method

     public function CategoryHeaderEdit($id){
    	$category = CategoryHeader::findOrFail($id);
    	return view('backend.category.categoryheader_edit',compact('category'));

    }


    public function CategoryHeaderUpdate(Request $request ,$id){

    	 

    CategoryHeader::findOrFail($id)->update([
		'category_name_en' => $request->category_name_en,
		'category_name_hin' => $request->category_name_hin,
		'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
		'category_slug_hin' => str_replace(' ', '-',$request->category_name_hin),
		'category_icon' => $request->category_icon,

    	]);

	    $notification = array(
			'message' => 'Category Header Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('all.category')->with($notification);


    } // end method


    public function CategoryHeaderDelete($id){

    	CategoryHeader::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'Category Header Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
