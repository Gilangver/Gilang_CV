<nav class="navbar navbar-expand-lg navbar-light fixed-top ">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-center w-100">
                <li class="nav-item">
                    <a class="nav-link fs-5 {{ Request::path() == 'cv' ? 'active' : '' }}" aria-current="page" href="cv">Curiculum Vitae</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 {{ Request::is('form') || Request::is('tampildata') ? 'active' : '' }}" href="form">Formulir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
