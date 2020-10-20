@extends('layouts.front')
@section('title','プロフィール')


@section('content')
<div class="container">
    <div class="row">
    　<h1>プロフィール</h1>
    </div>
    
    <hr color="c0c0c0">
    <table class="table table-striped">
        <tr>
            <th>名前</th>
            <th>性別</th>
            <th>趣味</th>
            <th>自己紹介</th>
        </tr>
        @foreach($profiles as $profile)
        <tr> 
             <td>{{$profile->name}}</td>
             <td>{{$profile->gender}}</td>
             <td>{{ str_limit($profile->hobby, 100)}}</td>
             <td>{{ str_limit($profile->introduction, 150)}}</td>
        </tr>
                 
        @endforeach
    </table>
</div>


@endsection