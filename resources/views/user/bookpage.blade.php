@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/bookpagestyle.css">
    <style>
        table {
            background-color: #85A389;
        }

        table a {
            color: #176B87;
        }

        table a:hover {
            color: whitesmoke;
        }
        .author_anchor:hover{
            color:#176B87;
        }
    </style>
@endsection
@section('content')
    <!-- bookpage -->
    <div class="bookpage-container">
        <div class="bookpage">

            <img src="/{{ $book->book_img }}" class="bookpage-image">
            <div class="bookdetails">
                <div style="line-height: 5px;">
                    <h3>{{ $book->book_name }}</h3>
                    <p><a class="author_anchor" href="{{ route('authordisplay', [$author->id, $author->slug]) }}">
                            {{ $book->author_name }}
                        </a>
                    </p>
                </div>
                <p><b>BDT&nbsp&nbsp{{ $book->price }} &nbsp&nbsp</b>
                </p>
                <br><br>
                <div>
                    <input type="number" placeholder="1" min="1">
                    <button type="submit">Add to cart</button>
                </div>
                <br>
                <div>
                    <h3 style="display:inline">Book Details</h3>
                    &nbsp &nbsp
                    <i class="fa-solid fa-indent"></i>
                    <p style="max-width:500px">
                        {{ $book->book_description }}
                    </p>
                    <br>
                    <table>
                        <tr>
                            <td><b>Publisher</b></td>
                            <td><b>
                                    <a href="{{ route('publisherdisplay', [$publisher->id, $publisher->slug]) }}">
                                        {{ $book->book_publisher_name }}
                                    </a>
                                    <b>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Category</b></td>
                            <td><b>
                                    <a href="{{ route('categorydisplay', [$category->id, $category->slug]) }}">
                                        {{ $book->book_category_name }}
                                    </a>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td><b> number </b></td>
                            <td>{{ $book->book_page_no }}</td>
                        </tr>
                        <tr>
                            <td><b>Published</b></td>
                            <td>{{ Carbon\Carbon::parse($book->book_publish_date)->toFormattedDateString() }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>

    <!-- Book Suggestion based on author -->
    <h2 style="display:flex;justify-content:center;margin:0px">More Books of {{$publisher->publisher_name}}</h2>
    <b><hr></b>
    @php
        $booksofsameauthor = App\Models\Book::where('author_id', $author->id)
        ->whereNotIn('id',[$book->id])
        ->take(4)->get();
    @endphp
    <div class="images">
        @foreach($booksofsameauthor as $bookofsameauthor)
        <div class="book"> <img src="/{{$bookofsameauthor->book_img}}" alt="img not found">
            <a href="{{route('bookpage',[$bookofsameauthor->id,$bookofsameauthor->slug])}}">
                <h4 style="padding-left:15px;margin-top: 2px;">{{$bookofsameauthor->book_name}}</h4>
            </a>
            <h6 style="padding-left:15px;margin-top: 0px;">BDT.{{$bookofsameauthor->price}}</h6>
        </div>
        @endforeach
    </div>

    <br><br>

    <!-- Book Suggestion based on category -->
    <h2 style="display:flex;justify-content:center;margin:0px">More {{$category->category_name}} Books</h2>
    <b><hr></b>
    @php
        $booksinsamecategory = App\Models\Book::where('book_category_id', $category->id)
        ->whereNotIn('id',[$book->id])
        ->take(4)->get();
    @endphp
    <div class="images">
        @foreach($booksinsamecategory as $bookinsamecategory)
        <div class="book"> <img src="/{{$bookinsamecategory->book_img}}" alt="img not found">
            <a href="{{route('bookpage',[$bookinsamecategory->id,$bookinsamecategory->slug])}}">
                <h4 style="padding-left:15px;margin-top: 2px;">{{$bookinsamecategory->book_name}}</h4>
            </a>
            <h6 style="padding-left:15px;margin-top: 0px;">BDT.{{$bookinsamecategory->price}}</h6>
        </div>
        @endforeach
    </div>

    <br><br>

    <!-- Book Suggestion based on category -->
    <h2 style="display:flex;justify-content:center;margin:0px">More {{$category->category_name}} Books</h2>
    <b><hr></b>
    @php
        $booksofsamepublisher = App\Models\Book::where('book_publisher_id', $publisher->id)
        ->whereNotIn('id',[$book->id])
        ->take(4)->get();
    @endphp
    <div class="images">
        @foreach($booksofsamepublisher as $bookofsamepublisher)
        <div class="book"> <img src="/{{$bookofsamepublisher->book_img}}" alt="img not found">
            <a href="{{route('bookpage',[$bookofsamepublisher->id,$bookofsamepublisher->slug])}}">
                <h4 style="padding-left:15px;margin-top: 2px;">{{$bookofsamepublisher->book_name}}</h4>
            </a>
            <h6 style="padding-left:15px;margin-top: 0px;">BDT.{{$bookofsamepublisher->price}}</h6>
        </div>
        @endforeach
    </div>
    <br><br>
@endsection
