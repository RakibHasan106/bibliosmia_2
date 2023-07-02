<!DOCTYPE html>
<html>
@php
    $categories = App\Models\Category::orderBy('product_count','desc')->take(5)->get();
    $publishers = App\Models\Publisher::orderBy('publisher_count','desc')->take(5)->get();
    $authors = App\Models\Author::orderBy('book_count','desc')->take(5)->get();
@endphp

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioSmia</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    @yield('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<body>
    <div class="header">
        <div class="menu-logo">
            <div class="menu-icon">
                <i class="fa-solid fa-bars menu">
                    <div class="sub-menu-icon">
                        <ul>
                            <li><a href="{{ route('showallcategories') }}">Categories</a></li>
                            <li><a href="{{ route('showallpublishers') }}">Publishers</a></li>
                            <li><a href="{{ route('showallauthors') }}">Authors</a></li>
                            @if (Auth::check())
                                <li><a href="{{ route('useraccount') }}">Account</a></li>
                            @else
                                <li><a href="./login">Login</a></li>
                                <li><a href="./register">Register</a></li>
                            @endif

                        </ul>
                    </div>
                </i>
            </div>
            <div class="logo">
                <h1>BiblioSmia</h1>
                <h5>Read more.Spend less.</h5>
            </div>
        </div>

        <div>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="cat_pub"><a href="{{ route('showallcategories') }}">Categories</a>
                        <div class="cat_pub_submenu">
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('categorydisplay', [$category->id, $category->slug]) }}">{{ $category->category_name }}</a>
                                    </li>
                                @endforeach
                                <li><a href="{{route('showallcategories')}}">More</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="cat_pub"><a href="{{ route('showallpublishers') }}">Publishers</a>
                        <div class="cat_pub_submenu">
                            <ul>
                                @foreach ($publishers as $publisher)
                                    <li><a
                                            href="{{ route('publisherdisplay', [$publisher->id, $publisher->slug]) }}">{{ $publisher->publisher_name }}</a>
                                    </li>
                                @endforeach
                                <li><a href="{{route('showallpublishers')}}">More</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="cat_pub"><a href="{{ route('showallauthors') }}">Authors</a>
                        <div class="cat_pub_submenu">
                            <ul>
                                @foreach ($authors as $author)
                                    <li><a
                                            href="{{ route('authordisplay', [$author->id, $author->slug]) }}">{{ $author->author_name }}</a>
                                    </li>
                                @endforeach
                                <li><a href="{{route('showallauthors')}}">More</a></li>
                            </ul>
                        </div>
                    </li>
                    @if (Auth::check())
                        <li class="cat_pub"><a href="{{ route('useraccount') }}" style="color: brown;font-weight:bold">
                            {{ Auth::user()->name }}</a>
                            <div class="cat_pub_submenu">
                                <ul>
                                    <li>
                                        <a href="{{ route('useraccount') }}">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="/logout">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @else
                        <li class="cat_pub"><a href="/login">Login</a>
                            <div class="cat_pub_submenu">
                                <ul>
                                    <li>
                                        <a href="/login">Login</a>
                                    </li>
                                    <li>
                                        <a href="/register">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>

        <div class="login-search-cart">
            <a href="{{ route('cartpageview') }}" class="cart-button">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Cart</span>
            </a>
    
            <form class="search" action="{{ route('search') }}" method="POST">
                @csrf
                <input type="text" placeholder="Search for a book or author" class="search-box" name="search_key">
                <button type="submit" class="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>

        </div>
    </div>

    @yield('content')

    <!-- Footer -->

    <div class="footer">
        <div class="footer-logo">
            <h1>BiblioSmia</h1>
            <h5>Read more.Spend less.</h5>
            <h4>&copy 2023</h4>
        </div>


        <div class="about-contact-container">
            <div class="contact">
                <h5>Contact Us</h5>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <h5 style="margin-bottom: 0px;"><i class="fa-solid fa-phone fa-beat-fade"></i>&nbsp&nbsp&nbsp
                    01834137729, 01956252815</h5>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <h5><i class="fa-regular fa-envelope fa-beat-fade"></i>&nbsp&nbsp&nbsp bibliosmia@gmail.com</h5>
            </div>
            <div class="About-terms-refund">
                <h5><a href='./aboutus'>About Us</a></h5>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <h5><a href='#'>Terms & Conditions</a></h5>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <h5><a href='#'>Refund Policy</a></h5>
            </div>
        </div>



        <div class="follow">
            <h4>Follow Us</h4>
            <a href="https:\www.facebook.com" target="_blank"><i class="fa-brands fa-facebook fa-bounce"></i></a>
            <a href="https:\www.instagram.com" target="_blank"><i class="fa-brands fa-instagram fa-bounce"></i></a>
            <a href="https:\www.twitter.com" target="_blank"><i class="fa-brands fa-twitter fa-bounce"></i></a>
        </div>
    </div>

</body>

</html>
