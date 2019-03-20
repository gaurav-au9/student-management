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
            <form role="form" action="{{route('class.store')}}" method="post" enctype="multipart/form-data">
            	@csrf
              <div class="box-body">
              	<div class="row">
	              	<div class="col-md-6">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Class</label>
		                  <input type="text" name="class" class="form-control" placeholder="Enter Class">
		                  
		                  <div class="text-danger">{{ $errors->first('class') }}</div>
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