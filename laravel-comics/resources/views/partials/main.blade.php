<main>
    <div class="jumbo"><img src="/images/jumbotron.jpg" alt="jumbo"></div>
    <div class="main-container">
        <div class="flydiv">
            <h2>CURRENT SERIES</h2>
        </div>

        @foreach ($comics as $index => $item)
            <article>
                @include('partials/cards-detail', ['item' => $item, 'index' => $index])
            </article>
        @endforeach

    </div>
    <button>LOAD MORE</button>
</main>
