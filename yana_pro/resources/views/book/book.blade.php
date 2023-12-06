@extends('layout.ht')

@section('title', '書籍紹介ページ')

@section('add_stylesheet')
<link rel="stylesheet" href="{{asset('css/book.css')}}">
@endsection

@section('main')
<div class="main" 
    style="
    height: 100vh;
    background-image: url('img/star.gif');
    background-color: rgba(255, 0, 0, 0.1);
">
    <div class="main_top">

    </div>
    <div class="main_bottom">
        <div class="left_side">

        </div>
        <div class="center_side">
            @php $i = 0; @endphp
            @php $length = count($books); @endphp
            @foreach($books as $book)
                @if($i % 3 == 0)
                    <div class="row">
                @endif
                        <div class="item">
                            <div class="item_top">
                                <a href="{{route('book.detail', ['id' => $book->id])}}">
                                    <img src="{{asset($book->img_path)}}" class="image_of_book">
                                </a>
                            </div>
                            <div class="gap"></div>
                            <div class="item_bottom">
                                <a href="{{route('book.detail', ['id' => $book->id])}}" class="name">
                                    {{Str::limit($book->name, 20, '...')}}
                                </a>
                            </div>
                        </div>
                @if($i % 3 == 2)
                    </div>
                @elseif($i == $length - 1)
                    </div>
                @endif
                @php $i++; @endphp
            @endforeach
        </div>
        <div class="right_side">

        </div>
    </div>
</div>
@endsection