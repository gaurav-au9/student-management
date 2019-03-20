@extends('backend.layouts.master')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Password Settings</h3>
                </div>
                @if(session('status'))
                <div class="box-header with-border"><strong style="color:green;">{{session('status')}}</strong></div>
                @endif
                @if(session('error'))
                <div class="box-header with-border"><strong style="color:red;">{{session('error')}}</strong></div>
                @endif
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{ route('backend.password.store') }}" name="form">
                    {{csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">

                            <div class="col-md-6">
                                <label class="control-label">Current Paasword</label>
                                <input type="password" class="form-control" name="current_password">
                                <div class="text-danger">{{ $errors->first('current_password') }}</div>
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">New Password</label>
                                <input type="password" class="form-control" name="password">
                                <div class="text-danger">{{ $errors->first('password') }}</div>
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                                <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</section>
@stop