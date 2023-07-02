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
                Search - {{ $key }}&nbsp({{ $count }}&nbspbooks)
            </h2>
        </div>
        <br>

        <div class="bookbycriteria" style="display:flex;justify-content:center">
            @if ($count != 0)
                @foreach ($results as $result)
                    <a href="{{ route('bookpage', [$result->id, $result->slug]) }}">
                        <div style="margin:20px">
                            <img src="/{{ $result->book_img }}" style="height:400px">
                            <a href="#">
                                <h3>{{ $result->book_name }}</h3>
                            </a>
                            <h4>{{ $result->author_name }}</h4>
                            <h4>BDT&nbsp{{ $result->price }}</h4>
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
                <h3 style="color:red">No Books Found for Your Search Key.</h3>
                <br><br><br>
            @endif
        </div>
    </div>
@endsection
