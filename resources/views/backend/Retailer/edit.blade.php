@extends('layouts.master')
@section('content')

@php 
use App\Model\retailer; 
@endphp

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit User</h3>
                   
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <form role="form" action="{{route('retailer.update',$retailer->id)}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">


                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$retailer->name}}">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" name="username" class="form-control" value="{{$retailer->username}}">
                                    <div class="text-danger">{{ $errors->first('username') }}</div>
                                </div>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{$retailer->email}}">
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                            </div>

                         
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