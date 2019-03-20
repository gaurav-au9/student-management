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
                    <h3 class="box-title">Edit Class</h3>
                   
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <form role="form" action="{{route('class.update',$class->id)}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">


                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Class</label>
                                    <input type="text" name="class" class="form-control" value="{{$class->class}}">
                                    <div class="text-danger">{{ $errors->first('class') }}</div>
                                </div>
                            </div>

                            

                                   
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        
                        
                        
                        
                        
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection