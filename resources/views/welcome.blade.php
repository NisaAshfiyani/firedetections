<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fire Detections</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('home/assets/favicon.icon') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('home/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Fire Detections</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        {{-- <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li> --}}
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('login') }}'">Login</button>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <style>
        .background-container {
            width: 100%;
            height: 300px; /* Sesuaikan tinggi sesuai kebutuhan Anda */
            background-image: url('images/bg1.png');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white; /* Warna teks */
            text-align: center;
        }
        .content {
            /* background: rgba(0, 0, 0, 0.5); Latar belakang semi-transparan untuk konten */
            padding: 10px;
            border-radius: 10px;
        }
        .card-custom {
            max-width: 18rem;
            margin: 0 auto;
        }
        .card-img-top {
            height: 150px;
            object-fit: cover;
        }
        .card-body {
            padding: 1rem;
        }
        .container-custom {
            background-color: #f8f9fa; /* Background color of the container */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .image-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .text-container {
            padding: 20px;
        }
        @media (max-width: 767.98px) {
            .row-custom {
                flex-direction: column-reverse;
            }
        }
    </style>
</head>
<body>
    <div class="background-container bg-secondary">
        <div class="content">
            <h1>Welcome to Fire Detections</h1>
            <p>Website ini dirancang untuk meningkatkan keamanan di dalam ruangan <br> dengan menggunakan teknologi deep learning dan algoritma YOLO untuk deteksi kebakaran yang cepat dan akurat.</p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1 class="text-center">Fitur Utama</h1>
            <!-- Card 1 -->
            <div class="col-md-3">
                <div class="card card-custom">
                    <img src="{{ asset('images/1.png') }}" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Deteksi Real-Time</h5>
                        <p class="card-text">Sistem kami mampu mendeteksi kebakaran secara real-time.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3">
                <div class="card card-custom">
                    <img src="{{ asset('images/3.png') }}" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Bunyi Alarm & Notifikasi Bot Telegram</h5>
                        <p class="card-text">Sistem ini mengeluarkan bunyi alarm dan mengirim notifikasi melalui bot Telegram untuk peringatan cepat.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3">
                <div class="card card-custom">
                    <img src="{{ asset('images/2.png') }}" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">History Data</h5>
                        <p class="card-text">Fitur ini menyimpan data historis dari kejadian kebakaran.</p>
                    </div>
                </div>
            </div>
            {{-- <!-- Card 4 -->
            <div class="col-md-3">
                <div class="card card-custom">
                    <img src="{{ asset('images/4.png') }}" class="card-img-top" alt="Image 4">
                    <div class="card-body">
                        <h5 class="card-title">Notifikasi Otomatis</h5>
                        <p class="card-text">Dapatkan notifikasi instan saat sistem mendeteksi potensi kebakaran.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="container-custom">
            <div class="row row-custom">
                <!-- Text Container -->
                <div class="col-md-6 text-container">
                    <h2>Informasi Tentang Website</h2>
                    <p>
                        Website ini telah dikembangkan untuk mendukung deteksi kebakaran dalam ruangan dengan memanfaatkan teknologi canggih. Meskipun saat ini deteksinya belum sepenuhnya akurat, sistem ini tetap mampu memberikan notifikasi dini yang bermanfaat. Kami terus melakukan penyempurnaan agar deteksi kebakaran dapat lebih akurat dan andal.
                    </p>
                </div>
                <!-- Image Container -->
                <div class="col-md-6 image-container">
                    <img src="{{ asset('images/background-image.jpg') }}" alt="Background Image">
                </div>
            </div>
        </div>
    </div>
        <!-- Page content-->
        <!-- Page content-->
        <div class="container" style="padding: 5px">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                   @include('card')
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark" >
            <div class="container" ><p class="m-0 text-center text-white">Copyright &copy; Your Website 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('home/js/scripts.js') }}"></script>
    </body>
</html>
