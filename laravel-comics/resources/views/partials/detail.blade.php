<main>
    <div class="jumbo"><img src="/images/jumbotron.jpg" alt="jumbo"></div>
    <div class="blue-band"></div>
    <div class="detail-container">

        <div class="flyimg">
            <a href="#"> <img src={{ $comics['thumb'] }} alt="coverComics" /></a>
        </div>
        <div class="small-container">
            <div class="detail-content">
                <h1>{{ $comics['title'] }}</h1>
                <div class="detail-price">
                    <div class="price">
                        <div class="usPrice">
                            <h5>U.S. Price: <span>{{ $comics['price'] }}</span></h5>
                        </div>
                        <div class="avalaible">
                            <h5>AVAILABLE</h5>
                        </div>
                    </div>
                    <div class="check">
                        <h5>Check Availability</h5>
                    </div>
                </div>
                <p>{{ $comics['description'] }}</p>
            </div>
            <div class="advertisement">
                <h5>ADVERTISEMENT</h5>
                <img src="/images/adv.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="detail-specs">
        <div class="spec-container">
            <div class="artists">
                <div class="title">
                    <h3>Talent</h3>
                </div>
                <div class="artBy">
                    <div class="subtitle">
                        <h5>Art by:</h5>
                    </div>
                    <div class="list">
                        <p>
                            @foreach ($comics['artists'] as $artist)
                                <a href="#">{{ $artist }}</a>,
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="writters">
                    <div class="subtitle">
                        <h5>Written by:</h5>
                    </div>
                    <div class="list">
                        <p>
                            @foreach ($comics['writers'] as $artist)
                                <a href="#">{{ $artist }}</a>,
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <div class="spec">
                <div class="title">
                    <h3>Specs</h3>
                </div>
                <div class="artBy">
                    <div class="subtitle">
                        <h5>Series:</h5>
                    </div>
                    <div class="list">
                        <p>

                            <a href="#">{{ Str::upper($comics['series']) }}</a>

                        </p>
                    </div>
                </div>
                <div class="artBy">
                    <div class="subtitle">
                        <h5>U.S. Price:</h5>
                    </div>
                    <div class="list">
                        <p>

                            {{ $comics['price'] }}

                        </p>
                    </div>
                </div>
                <div class="artBy">
                    <div class="subtitle">
                        <h5>Date On Sale:</h5>
                    </div>
                    <div class="list">
                        <p>

                            {{ $comics['sale_date'] }}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button><a href="/">GO BACK</a></button>
</main>
