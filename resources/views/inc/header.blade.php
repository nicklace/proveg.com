<header class="container">
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="{{ route('index') }}"><img height="65" src="{{ asset('/img/logo.svg') }}" alt="Dietary Guidelines Initiative"></a>
        <button class="navbar-toggler ms-auto collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#menuMain" aria-controls="menuMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuMain">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}" >Welcome</a></li>
            <li class="nav-item"><a class="nav-link " href="{{ route('why') }}">Why DGI</a></li>
            <li class="nav-item"><a class="nav-link " href="{{ route('guidelines') }}">Guidelines</a></li>
          </ul>
        </div>
    </nav>
</header>
