<!DOCTYPE html>
<html>
@php
    $categories = App\Models\Category::latest()->get();
    $publishers = App\Models\Publisher::latest()->get();
@endphp

<head>
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
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Publishers</a></li>
                            <li><a href="#">Account</a></li>
                            <li><a href="./login">Login</a></li>
                            <li><a href="./signup">signup</a></li>
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
                    <li class="cat_pub"><a href="#">Categories</a>
                        <div class="cat_pub_submenu">
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a href="{{route('categorydisplay',[$category->id,$category->slug])}}">{{$category->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="cat_pub"><a href="#">Publishers</a>
                        <div class="cat_pub_submenu">
                            <ul>
                                @foreach($publishers as $publisher)
                                    <li><a href="{{route('publisherdisplay',[$publisher->id,$publisher->slug])}}">{{$publisher->publisher_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Account</a></li>
                </ul>
            </nav>
        </div>

        <div class="login-search-cart">
            @if (session('user'))
                <a href="logout" class="login">Logout</a>
            @else
                <a href="./login" class="login">Login</a>
            @endif

            <a href="{{route('cartpageview')}}" style="color:white"><i class="fa-solid fa-cart-shopping cart-button"></i></a>

            <div class="search">
                <input type="text" placeholder="search by book name" class="search-box">
                <i class="fa-solid fa-magnifying-glass searchicon"><a href="#"></a></i>
            </div>

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
            <a href="https:\www.facebook.com/bibliosmia" target="_blank"><i
                    class="fa-brands fa-facebook fa-bounce"></i></a>
            <a href="https:\www.instagram.com/bibliosmia" target="_blank"><i
                    class="fa-brands fa-instagram fa-bounce"></i></a>
            <a href="https:\www.twitter.com/bibliosmia" target="_blank"><i
                    class="fa-brands fa-twitter fa-bounce"></i></a>
        </div>
    </div>

</body>

</html>
