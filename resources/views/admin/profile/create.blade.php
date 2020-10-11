<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
         {{-- layouts/profile.blade.phpを読み込む --}}
        @extends('layouts.profile')
        
        {{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
        @section('title', 'プロフィール作成')
        
        {{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
        @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1>プロフィール編集</h1>
                    <!--Admin\ProfileController の create Action に指定-->
                    <form action="{{action('Admin\ProfileController@create')}}" 
                    method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <!--氏名(name)、性別(gender)、趣味(hobby)、自己紹介欄(introduction)を入力するフォーム-->
                        <div class="form-group row">
                            <label class="col-md-2">氏名</label>
                            <div class="col-md-10">
                            <input type="text"  class="form-control" name="name"
                              value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">性別</label>
                            <div class="col-md-10">
                                <input type="radio" name="gender" value="male">男性
                                <input type="radio" name="gender" value="female">女性
                                <input type="radio" name="gender" value="no-checked">回答しない
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">趣味</label>
                            <div class="col-md-10">
                                <textarea  class="form-control" name="hobby"
                               rows="10">{{ old('body') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                             <label class="col-md-2">自己紹介</label>
                             <div class="col-md-10">
                                 <textarea class="form-control" name="introduction"
                               rows="15">{{ old('body') }}</textarea>
                                 
                             </div>
                            
                        </div>
                        {{ csrf_field() }}
                       <input type="submit" class="btn btn-primary" value="更新">
            
                    </form>
                </div>
            </div>
        </div>
        @endsection
        
    </body>
</html>