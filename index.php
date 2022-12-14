<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Kerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="bg-success bg-gradient">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-white" href="Register.php">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="Login.php">Masuk</a>
            </li>
        </ul>


        <a href="SearchProduct.php" style="text-decoration:none;">
            <h1 class="text-center text-white py-3">Toko Kerja</h1>
        </a>

        <h2 class="text-center text-white py-3">Temukan freelancer yang sempurna untuk anda</h2>

        <nav class="navbar">
            <div class="container-fluid  justify-content-center">
                <a class="navbar-brand"></a>
                <form class="d-flex" role="search" method="GET" action="SearchProduct.php">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-light" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <br>
    </div>
    
    <nav class="navbar navbar-expand-lg bg-light py-0">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="grafisdandesain.php" class="nav-link text-center"><img src="img/graphic-design.png" width="48" height="48">
                            <figcaption>Desain dan Grafis</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="penulisandanpenerjemahan.php" class="nav-link text-center"><img src="img/typing.png" width="48" height="48">
                            <figcaption>Penulisan dan Penerjemahan</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="webdanpemrograman.php" class="nav-link text-center"><img src="img/coding.png" width="48" height="48">
                            <figcaption>Web dan Pemrograman</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="visualdanstudio.php" class="nav-link text-center"><img src="img/camera.png" width="48" height="48">
                            <figcaption>Visual dan Studio</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pemasarandanperiklanan.php" class="nav-link text-center"><img src="img/growth.png" width="48" height="48">
                            <figcaption>Pemasaran dan Periklanan</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="jasakonsultasi.php" class="nav-link text-center"><img src="img/brainstorming.png" width="48" height="48">
                            <figcaption>Jasa Konsultasi</figcaption>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="gayahidup.php" class="nav-link text-center"><img src="img/lifestyle.png" width="48" height="48">
                            <figcaption>Gaya Hidup</figcaption>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br>
    
    <div class="container overflow-hidden text-center">
        <div class="row gy-5">
            <div class="col-6">
                <div class="p-3 border bg-light bg-gradient">
                    <h3>1. Cari</h3>
                    <p>Cari freelancer yang sesuai dengan kebutuhan anda dengan melihat portofolio, kemampuan, dan ulasan.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-light bg-gradient">
                    <h3>2. Berdiskusi</h3>
                    <p>Diskusikan detail pekerjaan yang anda butuhkan dan diskusikan penawaran harga dari freelancer.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-light bg-gradient ">
                    <h3>3. Bayar</h3>
                    <p>Pembayaran melalui Profil Kerja dijamin aman.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-light bg-gradient ">
                    <h3>4. Setujui dan berikan ulasan</h3>
                    <p>Setujui hasil kerja freelancer dan berikan ulasan</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>