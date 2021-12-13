@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 

			 


<!--   ------------ Edit Slider Page -------- -->


          <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Slider 2 </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('slider2.update') }}" enctype="multipart/form-data">
	 	@csrf
	 <input type="hidden" name="id" value="{{ $slider2s->id }}">	
	 <input type="hidden" name="old_image" value="{{ $slider2s->slider_img }}">			   
<!--
	 <div class="form-group">
		<h5>Slider Title <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="title" class="form-control" value="{{ $slider2s->title }}" > 
	 
	</div>
	</div>


	<div class="form-group">
		<h5>Slider Decription <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="description" class="form-control" value="{{ $slider2s->description }}" >
     
	  </div>
	</div>

	<div class="form-group">
		<h5>Slider Decription2 <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="description2" class="form-control" value="{{ $slider2s->description2 }}" >
     
	  </div>
	</div>
-->


	<div class="form-group">
		<h5>Slider 2 Image <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="file" name="slider_img" class="form-control" >
     @error('slider_img') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div>
					 

			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
						</div>
					</form>




					  
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>

 


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection