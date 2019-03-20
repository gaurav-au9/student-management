@extends('layouts.master')
@section('content')

@php 
use App\Department; 
@endphp

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Department</h3>
                   
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <form role="form" action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">


                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Department</label>
                                    <input type="text" name="name" class="form-control" value="{{$department->name}}">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                            </div>

                            

                                   
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                        
                        
                        
                        
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection