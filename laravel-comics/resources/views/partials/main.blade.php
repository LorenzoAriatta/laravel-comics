<main>
    <div class="jumbo"></div>
    <div class="main-container">
        <div class="flydiv">
            <h2>CURRENT SERIES</h2>
        </div>

        @foreach ($comics as $item)
            <article>
                <div class="cards">
                    <img src={{ $item['thumb'] }} alt="coverComics" />
                    <p>{{ $item['title'] }}</p>
                </div>
            </article>
        @endforeach

    </div>
    <button>LOAD MORE</button>
</main>
