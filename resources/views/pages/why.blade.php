@extends("layout")

@section("content")

<main class="container">

    <section class="row keys">
        <div class="col-lg-6 offset-lg-3">
            <h2>Why DGI?</h2>
            <p class="big">The impact of dietary guidelines is far-reaching as they play a pivotal role in shaping the food policies of a nation. They in turn influence health and nutrition programmes, institutional menus and the population's dietary habits. </p>
            <p>Over 110 countries have developed their own dietary guidelines and our evaluation shows that many governments are lagging behind in integrating health and sustainability goals into the guidelines. We found that: </p>
            <div class="line">
                <span class="number">1</span>
                <p>Most guidelines present animal products as one or more standalone food groups that should be consumed regularly. </p>
            </div>
            <div class="line">
                <span class="number">2</span>
                <p>Most guidelines lack any recommendations to reduce animal-based foods.</p>
            </div>
            <div class="line">
                <span class="number">3</span>
                <p>Most guidelines do not promote the health and sustainability benefits of plant-based and cultured/fermentation-derived foods.</p>
            </div>
            <div class="line">
                <span class="number">4</span>
                <p>Only 45% of the guidelines mention plant-based alternatives to animal-based meat, eggs, or dairy. </p>
            </div>
            <div class="line">
                <span class="number">5</span>
                <p>Only a third of current guidelines contain guidance about plant-based (vegetarian/vegan) diets. </p>
            </div>
        </div>
    </section>

    <section class="row ">
        <div class="col-lg-10 offset-lg-1">
            <img src="{{ asset('/img/dia.png')}}" alt="" class="img-fluid">
        </div>
    </section>

    <section class="row">
        <div class="col-lg-6 offset-lg-3 bg bg--blue">
            <p class="big">Transforming dietary guidelines can become a key element in food systems change as it has the potential to influence the food choices of billions of people, and decisions of key institutions in societies around the world. </p>
        </div>

    </section>

</main>

@endsection
