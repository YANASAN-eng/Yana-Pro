@extends('layout.form')

@section('title', '登録画面')
@section('add_stylesheet')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@endsection

@section('route', route('registration'))

@section('form_title', '会員登録')

@section('submit', '登録')

@section('form')
    <div class="row">
        <label for="name" class="name label">名前</label>
        <br>
        <input type="text" name="name" id="name" value="{{old('name')}}" class="item" required>
        @if($errors->has('name'))
            <li class="error">{{$errors->first('name')}}</li>
        @endif
    </div>
    <div class="row">
        <label for="email" class="email label">メールアドレス</label>
        <br>
        <input type="email" name="email" id="email" value="{{old('email')}}" class="item" required>
        @if($errors->has('email'))
            <li class="error">{{$errors->first('email')}}</li>
        @endif
    </div>
    <div class="row">
        <label for="password" class="password label">パスワード</label>
        <br>
        <input type="password" name="password" id="password" value="{{old('password')}}" class="item" required>
        @if($errors->has('password'))
            <li class="error">{{$errors->first('password')}}</li>
        @endif
    </div>
@endsection