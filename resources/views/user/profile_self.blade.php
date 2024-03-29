@extends('layouts/user')

@section('title')
    Upload Image | RailPicture.id
@endsection

@section('content')
    @if(Session::has('error'))
        <div class="alert alert-{{Session::get('error')}}" role="alert">
            <strong>{{Session::get('title')}}</strong><br/>
            <h5>{!! Session::get('message') !!}</h5>
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="timeline-text">
                        <div class="account-info">
                            <img src="{{url('avatars/'.auth()->user()->avatar)}}" class="img-thumbnail image-info"/>
                            <div class="identity-info">
                                <h4 class="name-info">{{auth()->user()->full_name}}</h4>
                                <h5 class="id-info">{{'@'.auth()->user()->username}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="timeline-text">
                        {{auth()->user()->status_message}}
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 12px">
                <div class="col-md-4 col-xs-4">
                    <a role="button" class="btn btn-primary btn-follow btn-block">3 Posts</a>
                </div>
                <div class="col-md-4 col-xs-4">
                    <a role="button" class="btn btn-primary btn-follow btn-block">4 Following</a>
                </div>
                <div class="col-md-4 col-xs-4">
                    <a role="button" class="btn btn-primary btn-follow btn-block">5 Follower</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer-additional')
    <script>
        $(document).ready(function(){

        });
    </script>
@endsection