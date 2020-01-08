@extends('layout')

@section('content')


<div class="container">
    <div class="row section">
        <div class="col col-lg-6 col-md-6 col-sm-12 col-12 offset-lg-3 offset-md-3 text-center">
            <div class="search">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" aria-describedby="searchHelp" placeholder="Search">
                        <small id="searchHelp" class="form-text text-muted">Search for your favorite books.</small>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<div style="background-color: #E7E1DB;">

    <div class="book-box">
        <div class="book-img">
            <img class="book-pic" src="https://hpmedia.bloomsbury.com/rep/s/9781408845677_311351.png"
                 alt="Flowers in Chania" style="width: 250px;">
        </div>
        <div class="book-info">
            <h1 class="book-name">Harry Potter and the Goblet of Fire</h1>
            <div class="stars">
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starempty.png"></i>
            </div>
            <p>By author(s) J.K. Rowling , Illustrated by Jim Kay </p>
            <!-- VIEW MORE BUTTON -->
            <button class="viewMore">View More</button>
            <!-- FANCY LINE -->
            <img src="images/line.png" class="fancyLine">
        </div>
        <div style="clear:both"></div>
    </div>


    <div class="book-box">
        <div class="book-img">
            <img class="book-pic" src="https://hpmedia.bloomsbury.com/rep/s/9781408845677_311351.png"
                 alt="Flowers in Chania">
        </div>
        <div class="book-info">
            <h1 class="book-name">Harry Potter and the Goblet of Fire</h1>
            <div class="stars">
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starempty.png"></i>
            </div>
            <p>By author(s) J.K. Rowling , Illustrated by Jim Kay </p>
            <!-- VIEW MORE BUTTON -->
            <button class="viewMore">View More</button>
            <!-- FANCY LINE -->
            <img src="images/line.png" class="fancyLine">
        </div>
        <div style="clear:both"></div>
    </div>

    <div class="book-box">
        <div class="book-img">
            <img class="book-pic" src="https://hpmedia.bloomsbury.com/rep/s/9781408845677_311351.png"
                 alt="Flowers in Chania">
        </div>
        <div class="book-info">
            <h1 class="book-name">Harry Potter and the Goblet of Fire</h1>
            <div class="stars">
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starfull.png"></i>
                <i><img class="star" src="images/starempty.png"></i>
            </div>
            <p>By author(s) J.K. Rowling , Illustrated by Jim Kay </p>
            <!-- VIEW MORE BUTTON -->
            <button class="viewMore">View More</button>
            <!-- FANCY LINE -->
            <img src="images/line.png" class="fancyLine">
        </div>
        <div style="clear:both"></div>
    </div>

</div>

@endsection('layout')
