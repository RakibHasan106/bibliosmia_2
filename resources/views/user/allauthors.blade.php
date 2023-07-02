@extends('user.layouts.template')
@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .author-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .author-list-item {
            background-color: #F9F9F9;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .author-list-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .author-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .author-description {
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <h1 style="text-align: center; margin-top: 50px;">Author List</h1>

        <ul class="author-list">
            @foreach ($authors as $author)
                <a href="{{route('authordisplay',[$author->id,$author->slug])}}"><li class="author-list-item">
                    <h3 class="author-name">{{ $author->author_name }}</h3>
                </li></a>
            @endforeach
            <!-- Add more authors here -->
        </ul>
    </div>
@endsection
