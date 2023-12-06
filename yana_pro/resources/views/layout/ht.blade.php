@extends('layout.common')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
@endsection

@yield('add_stylesheet')

@section('header')
<header>
    <div class="header_left">
        <a href="{{route('index')}}" class="header_logo_link">
            <img src="{{asset('img/YANA_LOGO.jpg')}}" class="header_logo">
        </a>
    </div>
    <div class="header_center">
        <form action="#" method="post" id="search_form">
            <input type="text" name="search" placeholder="サイト内検索" id="search">
            <button type="submit" class="search_button">検索</button>
        </form>        
    </div>
    <div class="header_right">
        <ul class="header_ul">
            <li class="header_li">
                <a href="{{route('book')}}" class="menu_link">書籍紹介</a>
            </li>
            @if(!empty($user))
                <li class="header_li">
                    <a href="{{route('logout')}}" class="menu_link">
                        ログアウト
                    </a>
                </li>
            @else
                <li class="header_li">
                    <a href="{{route('login')}}" class="menu_link">
                        ログイン
                    </a>
                </li>
                <li class="header_li">
                    <a href="{{route('registration')}}" class="menu_link">
                        会員登録
                    </a>
                </li>
            @endif
        </ul>
    </div>
</header>
@endsection

@section('footer')
<footer>
    <div class="footer_left">
        <a href="{{route('index')}}" class="footer_logo_link">
            <img src="{{asset('img/YANA_LOGO.jpg')}}" class="footer_logo">
        </a>
    </div>
    <div class="footer_center"></div>
    <div class="footer_right">
        <ul class="footer_ul">
            <li class="footer_li">
                <a href="javascript:history.back();" class="menu_link">戻る</a>
            </li>
            <li class="footer_li">
                <a href="{{route('index')}}" class="menu_link">ホームページに戻る</a>
            </li>
        </ul>
    </div>
</footer>
@endsection