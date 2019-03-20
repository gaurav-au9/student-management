@extends('layouts.master')
@section('content')
<!-- /.row -->
<section class="content">
		<p class="pull-right">
			<a href="{{route('student.create')}}" class="btn btn-sm btn-success">Add student Information</a>
	  	</p>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Students</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
           
              <table class="table table-hover table-bordered">
                <tr>
                  <th>Student Id</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th>Roll Number</th>
                  <th>Father Name</th>
                  <th>Registration Id</th>
                 
                  <th>Department Id</th>
                  <th>Permanent Address</th>
                  <th>Present Address</th>
                   <th>Mobile Number</th>
                  
                </tr>
             @foreach($student as $student)
               
                <tr>
                  <td>{{$student->id}}</td>
                  <td>{{$student->name}}</td>
                  <td>{{$student->class}}</td>
                  <td>{{$student->roll}}</td>
                  <td>{{$student->father_name}}</td>
                  <td>{{$student->reg_id}}</td>
                  <td>{{$student->dep_id}}</td>
                  <td>{{$student->permanent_address}}</td>
                  <td>{{$student->present_address}}</td>
                  <td>{{$student->mobile}}</td>
                  
                  
                  <td>
                  	<label class="switch">
          					  <input type="checkbox" class="update-status"  data-id="" data-url="" >
          					  <span class="slider round"></span>
          					</label>
                  </td>
                    
                  <td> 
                    <form action="" method="post" role="form">
                      @csrf

                  			<!-- <a href=""><button type="button" title="view" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></a> -->

                            <a href="{{route('student.edit',$student->id)}}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span></button></a>
                              <input type="hidden" name="_method" value="DELETE"> 
                            <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="glyphicon glyphicon-trash"></span></button>
                  </td></form>
                </tr>
              
              @endforeach
              </table>
             
	            <div><h2></h2></div>
	          
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </section>
      @endsection