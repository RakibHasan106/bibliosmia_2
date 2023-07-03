@extends('user.layouts.template')
@section('style')
    <style>
        .bookbycriteria {
            transition: transform 0.3s ease-in-out;
        }

        .bookbycriteria div:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
@section('content')
    <br><br>
    <div>
        <div style="display:flex;justify-content:center">
            <h2 style="text-align: center; font-weight: 500;margin:5px;font-weight:bold;color:#2D4356">
                Category - {{ $category->category_name }}&nbsp({{ $category->product_count }}&nbspbooks)
            </h2>
        </div>
        <br>

        <div class="bookbycriteria" style="display:flex;justify-content:center;flex-wrap:wrap">
            @if ($category->product_count != 0)
                @foreach ($books as $book)
                    <a href="{{ route('bookpage', [$book->id, $book->slug]) }}">
                        <div style="margin:20px">
                            <img src="/{{ $book->book_img }}" style="height:400px">

                            <h3>{{ $book->book_name }}</h3>

                            <h4>{{ $book->author_name }}</h4>
                            <h4>BDT&nbsp{{ $book->price }}</h4>
                        </div>
                    </a>
                    {{-- <div class="book">
                        <img src="/{{$book->book_img}}" alt="img not found">
                        <a href="./bookpage.html">
                            <h4 style="padding-left:5px;margin-top: 2px;">All The Light We Can't See</h4>
                        </a>
                        <h6 style="padding-left:5px;margin-top: 0px;">BDT.500</h6>
                    </div> --}}
                @endforeach
            @else
                <br><br>
                <h3 style="color:red">No Books Under this criteria yet. Soon will be added. Please Stay Tuned.</h3>
                <br><br><br>
            @endif
        </div>
    </div>
    <br><br><br>
@endsection
