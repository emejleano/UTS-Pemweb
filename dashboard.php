<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 100px;
        }
        .welcome-message {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .blog-post {
            margin-top: 20px;
        }
        .blog-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>
<body class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
        <a class="navbar-brand" href="#">Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#articles">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="welcome-message text-center">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Selamat Datang.</p>
        <button id="logoutButton" class="btn btn-danger">Logout</button>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
        <a class="navbar-brand" href="#">Artikel</a>
    </nav>

    <div class="row blog-post">
        <div class="col-md-4">
            <div class="card">
                <img src="https://i.pinimg.com/564x/26/da/29/26da293777b31f3b2105d8c0d160a4f2.jpg" class="card-img-top blog-image" alt="Blog Image">
                <div class="card-body">
                    <h5 class="card-title">Cilegon</h5>
                    <p class="card-text">Kota Cilegon adalah sebuah kota yang terletak di Provinsi Banten, Indonesia. Kota ini juga terletak di bagian barat Pulau Jawa, tepatnya di tepi Selat Sunda. Kota ini dikenal sebagai "Kota Baja", yang disebabkan adanya industri baja milik Pemerintah Indonesia, yakni Krakatau Steel. Kota ini berada di wilayah metropolitan Serang Raya.</p>
                    <a href="https://id.wikipedia.org/wiki/Kota_Cilegon" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://i.pinimg.com/564x/03/da/85/03da856a93d2d17a4f7c2d2ab90580e1.jpg" class="card-img-top blog-image" alt="Blog Image">
                <div class="card-body">
                    <h5 class="card-title">Serang</h5>
                    <p class="card-text">Kota Serang merupakan salah satu kota dan sekaligus menjadi ibu kota provinsi di Provinsi Banten, Indonesia. Kota ini berada di bagian barat laut Provinsi Banten, serta dikelilingi oleh Kabupaten Serang di sebelah selatan, barat, dan timur, dan Laut Jawa di sebelah utara.</p>
                    <a href="https://id.wikipedia.org/wiki/Kota_Serang" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://i.pinimg.com/564x/61/f4/44/61f444585217e77e329834a367f18b85.jpg" class="card-img-top blog-image" alt="Blog Image">
                <div class="card-body">
                    <h5 class="card-title">Labuan Bajo</h5>
                    <p class="card-text">Labuan Bajo merupakan salah satu kelurahan yang berada di Kecamatan Komodo, Kabupaten Manggarai Barat, Provinsi Nusa Tenggara Timur, Indonesia. Labuan Bajo juga merupakan pusat pemerintahan dari Kecamatan Komodo dan sekaligus merupakan ibu kota Kabupaten Manggarai Barat.</p>
                    <a href="https://id.wikipedia.org/wiki/Labuan_Bajo,_Komodo,_Manggarai_Barat" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://i.pinimg.com/736x/87/0b/9a/870b9a61ed69114b434ddd06cdd35141.jpg" class="card-img-top blog-image" alt="Blog Image">
                <div class="card-body">
                    <h5 class="card-title">Yogyakarta</h5>
                    <p class="card-text">Kota Yogyakarta adalah ibu kota sekaligus pusat pemerintahan dan perekonomian dari provinsi Daerah Istimewa Yogyakarta, Indonesia. Kota ini adalah kota yang mempertahankan konsep tradisional dan budaya Jawa.</p>
                    <a href="https://id.wikipedia.org/wiki/Kota_Yogyakarta" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://i.pinimg.com/736x/b4/4c/f1/b44cf19a3923d1f543edee354450ec98.jpg" class="card-img-top blog-image" alt="Blog Image">
                <div class="card-body">
                    <h5 class="card-title">Jayapura</h5>
                    <p class="card-text">Kota Jayapura adalah sebuah kota sekaligus menjadi ibu kota provinsi Papua, Indonesia. Kota ini juga merupakan ibu kota provinsi yang terletak paling timur di Indonesia, dan berbatasan langsung dengan negara Papua Nugini, yang terletak di Teluk Jayapura. Kota ini didirikan oleh Kapten Infanteri F.J.P. Sachse dari kerajaan Belanda pada 7 Maret 1910. Dari tahun 1910 ke 1962, kota ini dikenal sebagai Hollandia merupakan ibu kota distrik dengan nama yang sama di timur laut Pulau Papua bagian barat.</p>
                    <a href="https://id.wikipedia.org/wiki/Kota_Jayapura" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://i.pinimg.com/736x/1b/88/94/1b889486392a14ae4f16d282d815bf18.jpg" class="card-img-top blog-image" alt="Blog Image">
                <div class="card-body">
                    <h5 class="card-title">Tangerang</h5>
                    <p class="card-text">Kota Tangerang adalah kota yang terletak di Provinsi Banten, Indonesia. Kota ini terletak tepat di sebelah barat DKI Jakarta. Penduduk pribuminya adalah Suku Sunda. Pada pertengahan tahun 2024, jumlah penduduk kota Tangerang sebanyak 1.927.815 dengan kepadatan 12.000 jiwa/km²</p>
                    <a href="https://id.wikipedia.org/wiki/Kota_Tangerang" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <script src="logout.js"></script>
</body>
</html>