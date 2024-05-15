<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Tentang Kami</h5>
                <p>Konsuli-Quiz adalah platform kuis online yang memungkinkan pengguna untuk membuat, berbagi, dan mengikuti kuis dengan mudah.</p>
            </div>
            <div class="col-md-4">
                <h5>Tautan Penting</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white">Beranda</a></li>
                    <li><a href="{{ route('quizzes.index') }}" class="text-white">Kuis</a></li>
                    <li><a href="{{ route('about') }}" class="text-white">Tentang Kami</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white">Kontak</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Ikuti Kami</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-facebook fa-2x"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter fa-2x"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-instagram fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; {{ date('Y') }} Konsuli-Quiz. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
