@extends('layout.form')

@section('title', 'ログイン画面')

@section('add_stylesheet')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@endsection

@section('route', route('login'))

@section('form')
    <div class="row">
        <label for="email" class="email label">メールアドレス</label>
        <br>
        <input type="email" name="email" value="{{old('email')}}" class="item" required>
        @if($errors->has('email'))
            <li class="error">{{$errors->first('email')}}</li>
        @endif
    </div>
    <div class="row">
        <label for="password" class="password label">パスワード</label>
        <br>
        <input type="password" name="password" value="{{old('password')}}" class="item" required>
        @if($errors->has('password'))
            <li class="error">{{$errors->first('password')}}</li>
        @endif
    </div>
@endsection

@section('submit', 'ログイン')

@section('option')
    <p id="option">
        <a href="{{route('registration')}}" id="registration">会員登録がまだの方はこちら</a>
    </p>
@endsection