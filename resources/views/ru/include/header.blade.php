<nav class="navbar navbar-expand-lg navbar-light py-2 py-lg-4">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <a class="navbar-brand font-weight-semibold" href="/">
            <img class="img-fluid" src="/images/logos/logo.svg" alt="" width="150px">
        </a>
        <button class="btn btn-primary btn-sm d-lg-none">EN</button>
        <button class="btn btn-primary btn-sm d-lg-none">SR</button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="p-3 border-bottom sticky-top bg-white d-block d-lg-none">
                <h5 class="font-weight-semibold mb-0">Menu</h5>
                <button class="navbar-toggler navbar-closer d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <i class="icon-x"></i>
                </button>
            </div>

            <ul class="navbar-nav mx-auto">


                <li class="nav-item dropdown">
                    <a class="nav-link font-weight-semibold" href="#" style="color: #00245E">

                        Что делаем
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link font-weight-semibold" href="#" style="color: #00245E">

                        Как работаем
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link font-weight-semibold" href="#" style="color: #00245E">

                        Почему так круто получается
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link font-weight-semibold" href="#" style="color: #00245E">

                        Сколько стоит
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link font-weight-semibold" href="#" style="color: #00245E">

                        Как заказать
                    </a>
                </li>
            </ul>

            <a href="{{ route('language') }}?lang=en" class="btn btn-primary btn-sm d-none d-lg-block mr-1">ENG</a>
            <a href="{{ route('language') }}?lang=sr" class="btn btn-primary btn-sm d-none d-lg-block">SRB</a>
        </div>
    </div>
</nav>
