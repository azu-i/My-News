@extends('layouts.front')
@section('title','プロフィール')


@section('content')
<div class="container">
    <div class="row">
    　<h1>プロフィール</h1>
    </div>
    
    <hr color="c0c0c0">
    <div class="row">
        <div class="col-md-6">
           <div class='name'>
              {{$profile->name}}
            </div>
        </div>
        <hr color="c0c0c0">
        <div class="col-md-6">
            {{$profile->gender}}
        </div>
        <hr color="c0c0c0">
        <div class="col-md-10">
            {{ str_limit($profile->hobby, 100)}}
        </div>
        <hr color="c0c0c0">
        <div class="col-md-10">
            {{ str_limit($profile->introduction, 150)}}
        </div>
        <hr color="c0c0c0">
    </div>
    
    
</div>


@endsection