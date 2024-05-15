<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fas fa-graduation-cap"></i> Konsuli-Quiz
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @auth  
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('quizzes.index') }}">
                                <i class="fas fa-tasks"></i> Kuis Saya
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('quizzes.create') }}">
                                <i class="fas fa-plus-circle"></i> Buat Kuis
                            </a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}">
                                <i class="fas fa-user"></i> Profil
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
