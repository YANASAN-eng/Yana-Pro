@extends('layout.ht')

@section('title', '書籍詳細画面')

@section('add_stylesheet')
<link rel="stylesheet" href="{{asset('css/book_detail.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
    .main{
        background-image: url('../../img/star.gif');
        background-color: rgba(255, 0, 0, 0.1);
    }
</style>
@endsection

<!--参考URL-->
<!--https://www.shokabo.co.jp/mybooks/ISBN978-4-7853-2412-4.html-->
@section('main')
<div class="main">
<div class="left_side">
        <div class="information_of_book"> 
            <a href="{{asset($book->img_path)}}" class="image_of_book_link">
                <img src="{{asset($book->img_path)}}" alt="{{$book->name}}" class="image_of_book">
            </a>
            <br>
            <a href="{{asset($book->img_path)}}"
                <font size="-1">→帯無しカバー画像</font>
            </a>
            <br><br>
            <!--内容見本-->
            <img src="#" alt="内容見本"> 
            <br>
            <a href="#">
                <img src="#">
            </a>
        </div>
    </div>
    <div class="gap_1"></div>
    <div class="center_side">
        <!--タイトル-->
        <h1 class="title">
            {{$book->name}}
        </h1>
        <!--著作者-->
        <p class="author">
            {{$book->degree}}&nbsp;&nbsp;{{$book->author}}&nbsp;&nbsp;著
        </p>
        <!--書誌情報-->
        <p class="bibliographic_information">
            {{$book->bibliographic_information}}
        </p>
        <!--内容紹介-->
        <p class="content">
            {{$book->content}}
        </p>
        <br>
        <!--便利機能-->
        <ul class="convenience_buttons">
            <li class="convenience_button twitter_button">
                <a href="#" class="twitter ">
                    <i class="fa fa-twitter button"></i>Twitter
                </a>
            </li>
            <li class="convenience_button">
                <button id="good_button" class="button"><i class="fa fa-light fa-thumbs-up"></i>いいね<span id="good_count">{{$good_count}}</span></button>
            <li class="convenience_button">
                <button id="bookmark_button" class="button"><i class="fa fa-regular fa-bookmark"></i>ブックマーク<span id="bookmark_count">{{$bookmark_count}}</span></button>
            </li>
        </ul>
        <!--サポート情報-->
        <h3 class="sub_title">サポート情報</h3>
        <!--目次-->
        <h3 class="sub_title">
            目次
            <font size="-1">
                (章タイトル)
            </font>
        </h3>
        <ol>
            @foreach($indices as $index)
                <li class="index">{{$index->index}}</li>
            @endforeach
        </ol>
        <!--詳細目次-->
        <h3 class="sub_title">詳細目次</h3>
    </div>
    <div class="gap_2"></div>
    <div class="right_side">

    </div>
</div>
@endsection

@section('script')
@if(!empty($user))
    <input type="hidden" name="user_id" value="{{$user->id}}" id="user_id">
    <input type="hidden" name="book_id" value="{{$book->id}}" id="book_id">
    <input type="hidden" name="good_flag" value="{{$good_flag}}" id="good_flag">
    <input type="hidden" name="bookmark_flag" value="{{$bookmark_flag}}" id="bookmark_flag">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script type="text/javascript" src="{{asset('js/good.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bookmark.js')}}"></script>
@endif
@endsection