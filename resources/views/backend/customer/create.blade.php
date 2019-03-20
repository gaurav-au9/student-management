@extends('layouts.master')
@section('content')


<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Customers</h3>
               @if (session('status'))
				<p style="color: green;">{{session('status')}}</p>
			@endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
            	@csrf
              <div class="box-body">
              	<div class="row">
	              	<div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Name</label>
		                  <input type="text" name="name" class="form-control" placeholder="Enter Name">
		                  
		                  <div class="text-danger">{{ $errors->first('name') }}</div>
		                </div>
	                </div>

	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputPassword1">Username</label>
		                  <input type="text" name="username" class="form-control" placeholder="Enter Username">
		                   <div class="text-danger">{{ $errors->first('username') }}</div>
		                </div>
		            </div>    
	            </div>

	            <div class="row">
	              	<div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Email</label>
		                  <input type="email" name="email" class="form-control" placeholder="Enter email">
		                   <div class="text-danger">{{ $errors->first('email') }}</div>
		                </div>
	                </div>

	                <div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputPassword1">Password</label>
		                  <input type="password" name="password" class="form-control" placeholder="Password">
		                   <div class="text-danger">{{ $errors->first('password') }}</div>
		                </div>
		        </div> 
	            </div>

	             <div class="row">
	              	<div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Number</label>
		                  <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile Number">
		                   <div class="text-danger">{{ $errors->first('number') }}</div>
		                </div>
	                </div>



	            <div class="row">
	              	
                        <div class="col-md-6">
		                <div class="form-group">
		                  <label for="profileImage">Select profile Image</label>
		                  <input type="file" name="profileImage" class="form-control" placeholder="Password">
		                   <div class="text-danger">{{ $errors->first('profileImage') }}</div>
		                </div>
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