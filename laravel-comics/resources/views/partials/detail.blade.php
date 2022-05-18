<main>
    <div class="jumbo"><img src="images/jumbotron.jpg" alt="jumbo"></div>
    <div class="blue-band"></div>
    <div class="detail-container">

        <div class="flyimg">
            <a href="#"> <img src={{ $comics[0]['thumb'] }} alt="coverComics" /></a>
        </div>
        <div class="small-container">
            <div class="detail-content">
                <h1>{{ $comics[0]['title'] }}</h1>
                <div class="detail-price">
                    <div class="price">
                        <div class="usPrice">
                            <h5>U.S. Price: <span>{{ $comics[0]['price'] }}</span></h5>
                        </div>
                        <div class="avalaible">
                            <h5>AVAILABLE</h5>
                        </div>
                    </div>
                    <div class="check">
                        <h5>Check Availability</h5>
                    </div>
                </div>
                <p>{{ $comics[0]['description'] }}</p>
            </div>
            <div class="advertisement">
                <h5>ADVERTISEMENT</h5>
                <img src="images/adv.jpg" alt="">
            </div>
        </div>


    </div>
    <button><a href="/">GO BACK</a></button>
</main>
