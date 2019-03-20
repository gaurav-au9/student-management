@extends('backend.layouts.master')
@section('content')
@php
use anlutro\LaravelSettings\Facade as Setting;
@endphp
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Global Settings</h3>
                </div>
                @if(session('status'))
                <div class="box-header with-border"><strong style="color:green;">{{session('status')}}</strong></div>
                @endif
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{ route('settings.store') }}" name="form">
                    {{csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">

                            <div class="col-md-6">
                                <label class="control-label">Website Name</label>
                                <input type="text" class="form-control" name="website_name" value="{{Setting::get('website_name', 'demo')}}">
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Domain mail</label>
                                <input type="text" class="form-control" name="domain_mail" value="{{Setting::get('domain_mail')}}">
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Phone number</label>
                                <input type="text" class="form-control" name="phone" value="{{Setting::get('phone')}}">
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{Setting::get('address')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="box-header">
                                <h3 class="box-title">Social Media Link</h3>
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Facebook Url</label>
                                <input type="text" class="form-control" name="facebook_url" value="{{Setting::get('facebook_url')}}">
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Twitter Url</label>
                                <input type="text" class="form-control" name="twitter_url" value="{{Setting::get('twitter_url')}}">
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Linkedin Url</label>
                                <input type="text" class="form-control" name="linkedin_url" value="{{Setting::get('linkedin_url')}}">
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Google+ Url</label>
                                <input type="text" class="form-control" name="googlePlus_url" value="{{Setting::get('googlePlus_url')}}">
                            </div>
                        </div>
                        
                        {{-- <div class="form-group">
                            <div class="box-header">
                                <h3 class="box-title">Global Message Visiblity Status</h3>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="control-label">Status</label>
                                <select class="form-control" name="message_status">
                                    <option value="">Select value</option>
                                    <option value="1" {{ (Setting::get('message_status') == '1')? 'selected' : ''}}>Enable</option>
                                    <option value="0" {{ (Setting::get('message_status') == '0')? 'selected' : ''}}>Disable</option>
                                </select>
                            </div>
                        </div>    
                    </div> --}}
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