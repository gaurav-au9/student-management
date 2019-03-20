@extends('layouts.master')
@section('content')

@php 
use App\Model\Country; 
@endphp

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">View Department</h3>
                    @if (session('status'))
                    <p style="color: green;">{{session('status')}}</p>
                    @endif
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form role="form">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Department :</label>
                                    {{$department->name}}

                                    <div class="text-danger">{{ $errors->first('department') }}</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image :</label>
                                    
                                   

                                    <div class="text-danger">{{ $errors->first('image') }}</div>
                                </div>
                            </div>

                            

                       
                    
                </form>
            </div>
        </div>
</section>
@endsection