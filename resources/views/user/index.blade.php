@extends('user.layouts.template')
@section('style')
    <script src="js/script.js" defer></script>
@endsection
@section('content')
    {{-- Index Unique Page --}}
    <br><br>

    {{-- Banner --}}
    <div class="banner">
        <img src="/images/Read_matters.jpg" alt="image not found">
    </div>

    {{-- Testing --}}
    <h2 style="text-align: center; font-weight: 500;margin:5px;">Test Slider</h2>
    <hr>
    <div class="wrapper-container">
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">           
                
                <li class="card">
                    <a href="/bookpage">
                        <div class="img"><img src="./images/All_the_Lights_We_Can't_See.jpg" alt="img"
                                draggable="false"></div>
                        <h2>All the Lights We Can't See</h2>
                        <span>Anthony Doerr</span>
                        <br>
                        <h6>BDT.500</h6>
                    </a>
                </li>
                
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </div>



    {{-- Books --}}
    <h2 style="text-align: center; font-weight: 500;margin:5px;">Featured</h2>
    <hr>
    <div class="images">
        <div class="book"><img src="./images/All_the_Lights_We_Can't_See.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">All The Light We Can't See</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.500</h6>
        </div>
        <div class="book"> <img src="./images/Homo_Deus.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Homo Deus</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.500</h6>
        </div>
        <div class="book"> <img src="./images/Inferno.jpeg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Inferno</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.800</h6>
        </div>
        <div class="book"> <img src="./images/Silence_of_the_Lambs.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Silence of the Lambs</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.500</h6>
        </div>
        <div class="book"> <img src="./images/One_Hundred_Years_of_Solitude.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">One Hundred Years of Solitude</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.700</h6>
        </div>
        <div class="book"> <img src="./images/Never_Let_Me_Go.jpeg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Never Let Me Go</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.750</h6>
        </div>

        <div class="book"> <img src="./images/A_Little_Life.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">A Little Life</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.900</h6>
        </div>
        <!-- <img src="./images/Persopolis.jpg" alt="img not found"> -->
    </div>
    <br><br><br>

    <h2 style="text-align: center; font-weight: 500;margin:5px">Classics</h2>
    <hr>
    <div class="images">
        <div class="book"> <img src="./images/Swann's_Way.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Swan's Way</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.450</h6>
        </div>
        <div class="book"> <img src="./images/great_expectations.jpeg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Great Expectations</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.500</h6>
        </div>
        <div class="book"> <img src="./images/East_of_Eden.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">East of Eden</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.850</h6>
        </div>
        <div class="book"> <img src="./images/Doctor_Zhivago.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Doctor Zhivago</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.750</h6>
        </div>
        <div class="book"> <img src="./images/Great_Gatsby.webp" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Great Gatsby</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.300</h6>
        </div>
        <div class="book"> <img src="./images/Moby_Dick.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Moby Dick</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.450</h6>
        </div>
        <div class="book"> <img src="./images/Don_Quixote.jpeg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Don Quixote</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.650</h6>
        </div>

    </div>
    <br><br><br>

    <h2 style="text-align: center; font-weight: 500;margin:5px">Thrillers</h2>
    <hr>
    <div class="images">
        <div class="book"> <img src="./images/Da_Vinchi_Code.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Da The Vinchi Code</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.800</h6>
        </div>
        <div class="book"> <img src="./images/Fight_Club.jpeg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Fight Club</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.400</h6>
        </div>
        <div class="book"> <img src="./images/The_Shining.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">The Shining</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.650</h6>
        </div>
        <div class="book"> <img src="./images/The_Godfather.png" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">The Godfather</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.550</h6>
        </div>
        <div class="book"> <img src="./images/Before_I_Go_to_Sleep.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Before I Go To Sleep</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.350</h6>
        </div>
        <div class="book"> <img src="./images/Tell_No_one.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Tell No One</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.500</h6>
        </div>
        <div class="book"> <img src="./images/Silent_Patient.jpeg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Silent Patient</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.600</h6>
        </div>
    </div>
    <br><br><br>

    <h2 style="text-align: center; font-weight: 500;margin:5px">Comics and Graphic Novels</h2>
    <hr>
    <div class="images">
        <div class="book"> <img src="./images/Persopolis.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Persepolis</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.800</h6>
        </div>
        <div class="book"> <img src="./images/This_One_Summer.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">This One Summer</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.750</h6>
        </div>
        <div class="book"> <img src="./images/Blankets.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Blankets</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.1500</h6>
        </div>
        <div class="book"> <img src="./images/Daytripper.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Daytripper</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.900</h6>
        </div>
        <div class="book"> <img src="./images/Maus.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Maus</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.700</h6>
        </div>
        <div class="book"> <img src="./images/Watchmen.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Watchmen</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.800</h6>
        </div>
        <div class="book"> <img src="./images/The_Killing_Joke.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">The Killing Joke</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.600</h6>
        </div>
    </div>
    <br><br><br>

    <h2 style="text-align: center; font-weight: 500;margin:5px">Non-Fiction</h2>
    <hr>
    <div class="images">
        <div class="book"> <img src="./images/I_Know_Why_the_Caged_Bird_Sings.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px">I Know Why the Caged Bird Sings</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.750</h6>
        </div>
        <div class="book"> <img src="./images/Selfish_Gene.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Selfish Gene</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT. 1000</h6>
        </div>
        <div class="book"> <img src="./images/A_Short_History_of_Nearly_Everything.jpeg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">A Short History of Nearly Everything</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.1200</h6>
        </div>
        <div class="book"> <img src="./images/A_Brief_History_of_Time.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">A Brief History of Time</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.900</h6>
        </div>
        <div class="book"> <img src="./images/The_Autobiography_of_Malcolm_X.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">The Autobiography of Malcolm X</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.1200</h6>
        </div>
        <div class="book"> <img src="./images/Educated.jpeg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Educated</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.700</h6>
        </div>
        <div class="book"> <img src="./images/Outliers.jpg" alt="img not found">
            <a href="./bookpage.html">
                <h4 style="padding-left:5px;margin-top: 2px;">Outliers</h4>
            </a>
            <h6 style="padding-left:5px;margin-top: 0px;">BDT.560</h6>
        </div>

    </div>
    <br><br><br>
@endsection
