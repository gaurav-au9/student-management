@extends('layouts.master')
@section('content')


<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Class</h3>
               @if (session('status'))
				<p style="color: green;">{{session('status')}}</p>
			@endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
            	@csrf
              <div class="box-body">
              	<div class="row">
	              	<div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Student Name</label>
		                  <input type="text" name="name" class="form-control" placeholder="Enter student name">
		                  
		                  <div class="text-danger">{{ $errors->first('name') }}</div>
		                </div>
	                </div>

	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Class</label>
		                  <input type="text" name="class" class="form-control" placeholder="Enter Class">
		                  
		                  <div class="text-danger">{{ $errors->first('class') }}</div>
		                </div>
	                </div>


	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Roll Number</label>
		                  <input type="text" name="roll" class="form-control" placeholder="Enter Roll">
		                  
		                  <div class="text-danger">{{ $errors->first('roll') }}</div>
		                </div>
	                </div>

	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Father Name</label>
		                  <input type="text" name="father_name" class="form-control" placeholder="Father Name">
		                  
		                  <div class="text-danger">{{ $errors->first('father_name') }}</div>
		                </div>
	                </div>

	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Registration ID</label>
		                  <input type="text" name="reg_id" class="form-control" placeholder="Registration ID">
		                  
		                  <div class="text-danger">{{ $errors->first('reg_id') }}</div>
		                </div>
	                </div>

	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Department ID</label>
		                  <input type="text" name="dep_id" class="form-control" placeholder="Department ID">
		                  
		                  <div class="text-danger">{{ $errors->first('dep_id') }}</div>
		                </div>
	                </div>

	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Permanent Address</label>
		                  <input type="text" name="permanent_address" class="form-control" placeholder="permanent Address">
		                  
		                  <div class="text-danger">{{ $errors->first('permanent_address') }}</div>
		                </div>
	                </div>

	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Present Address</label>
		                  <input type="text" name="present_address" class="form-control" placeholder="Current Address">
		                  
		                  <div class="text-danger">{{ $errors->first('present_address') }}</div>
		                </div>
	                </div>

	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Mobile</label>
		                  <input type="text" name="mobile" class="form-control" placeholder="Mobile">
		                  
		                  <div class="text-danger">{{ $errors->first('mobile') }}</div>
		                </div>
	                </div>
	                
	                


              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href=""><button type="button" class="btn btn-danger">Cancel</button>
              </div>
          </form>
		</div>
	</div>
</section>
@endsection