<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light py-0">
    <div class="container-fluid project-navbar align-items-center">
        <a class="navbar-brand" href="{{route('homepage')}}">
            <img src="./img/logo.png" alt="Il logo di Peter's House" class="img-fluid">
        </a>
        <button class="navbar-toggler mytoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
            <a href="">
                <i class="fa-brands fa-facebook-square fs-2 px-1"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-instagram-square fs-2 px-1"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                <a class="nav-link" href="{{route('appartments')}}">Gli appartamenti</a>
                <a class="nav-link" href="{{route('where')}}">Come raggiungerci</a>
                <a class="nav-link" href="{{route('merchandising')}}">Merchandising</a>
                <a class="nav-link" href="{{route('what')}}">Cosa vedere</a>             
                <a class="nav-link" href="{{route('contact')}}">Contattaci</a>
            </div>
        </div>
    </div>
</nav>
