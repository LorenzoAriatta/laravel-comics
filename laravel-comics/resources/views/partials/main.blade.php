<main>
    <div class="jumbo"><img src="images/jumbotron.jpg" alt="jumbo"></div>
    <div class="main-container">
        <div class="flydiv">
            <h2>CURRENT SERIES</h2>
        </div>

        @foreach ($comics as $item)
            <article>
                <div class="cards">
                    <a href="comic-detail"><img src={{ $item['thumb'] }} alt="coverComics" /></a>
                    <p>{{ $item['title'] }}</p>
                </div>
            </article>
        @endforeach

    </div>
    <button>LOAD MORE</button>
</main>
