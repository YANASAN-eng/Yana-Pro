@extends('layout.ht')

@section('main')
    <div class="main" 
    style="
        height: 100%;
        background-image: url('img/star.gif');
        background-color: rgba(255, 0, 0, 0.1);
    ">
        <div class="form">
            <h1 id="form_title">@yield('form_title')</h1>
            <form action=@yield('route') method="post">
                @csrf
                @yield('form')
                <div class="post_button">
                    <button type="submit" id="submit">@yield('submit')</button>
                </div>
            </form>
            <a href="javascript:history.back();" id="return">戻る</a>
            @yield('option')
        </div>
    </div>
@endsection