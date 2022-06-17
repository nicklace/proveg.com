@extends("layout")

@section("content")

<main class="container">

    <section class="row">
        <div class="col-lg-6 offset-lg-3">
            <h2>Guidelines</h2>
            <p class="big">
                We have developed concrete recommendations for the governments to promote sustainable diets and integrate
                plant-based alternatives to meat, eggs, and dairy in national dietary guidelines. Below are some best practice exampleswe have found.  </p>
        </div>
    </section>

    <section class="row">
        <h3>Best practices examples</h3>
        <div class="col-lg-6">
            <img src="{{ asset('/img/guideline-1.jpg')}}" alt="" class="img-fluid img-m" data-src="{{ asset('/img/guideline-1-b.jpg')}}" data-bs-toggle="modal" data-bs-target="#mdl">
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('/img/guideline-2.jpg')}}" alt="" class="img-fluid img-m" data-src="{{ asset('/img/guideline-2-b.jpg')}}" data-bs-toggle="modal" data-bs-target="#mdl">
        </div>
        <div class="modal fade" id="mdl" tabindex="-1" aria-labelledby="mdl" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="img-s" src="" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
