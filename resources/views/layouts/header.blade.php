<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: {{ config('theme.colors.orange') }}; font-size: {{ config('theme.sizing.font-size-base') }};">
            <div class="container-fluid">
                    <div class="logo-circle">
                        <img src="#" alt="Logo">
                    </div>               
                <a class="navbar-brand fw-bold " href="#" style="color:{{ config('theme.colors.dark') }}">KIWAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('propos') }}">A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('service') }}">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline rounded-pill px-3" style="background-color: {{ config('theme.colors.success') }}" href="#">Demander un devis</a>
                            {{-- <a class="nav-link btn btn-outline-success rounded-pill px-3" href="#">Demander un devis</a> --}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    