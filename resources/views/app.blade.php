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
    </style>
</head>
<body>
    <div class="background-container bg-secondary">
        <div class="content">
            <h1>Welcome to Fire Educations</h1>
            {{-- <p>Website ini dirancang untuk meningkatkan keamanan di dalam ruangan <br> dengan menggunakan teknologi deep learning dan algoritma YOLO untuk deteksi kebakaran yang cepat dan akurat.</p> --}}
        </div>
    </div>
        
        <!-- Page content-->
        <!-- Page content-->
        <div class="container" style="padding: 5px">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    @yield('contents')
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
