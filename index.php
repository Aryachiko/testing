<!-- Routing Page -->
<?php
$page = $_GET['page'] ?? 'home';
switch ($page) {
    // Home
    case 'home':
    default:
        $title = "Home - POLBENG";
        $content = "content/home.php";
        break;
    // Tugas saya
    case 'tugas':
        $title = "Tugas Saya - POLBENG";
        $content =  "Tugas saya/tugas.php";
        break;
    // Data Diri
    case 'datadiri':
        $title = "Data Diri - POLBENG";
        $content = "content/datadiri.php";
        break;
    // ..
    case 'product':
        $title = "Our Product - POLBENG";
        $content = "content/product.php";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "POLBENG" ?></title>
    <!-- CSS BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- ICON FONTAWESOME -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Style Hover Header -->
    <style>
        .hover:hover {
            color: white !important;

        }
    </style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg" 
     style="background: linear-gradient(to right, #edf108ff, #e7e9d3ff, #318c0aff);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?page=home">
                <img src="assets/Es Teler.jpg" alt="" width="30" height="30" class="d-inline-block align-text-top">
                <span class="fw-bold hover" style="color: #100f10ff;">ES TELER CREAMY BUK TUTY</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-stop fa-xl"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- buat button disini -->
                     <li class="nav-item">
                        <a href="index.php?page=tugas" class="btn btn-warning fw-bold ms-2">Contact</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link active fw-bold hover" style="color: #eeeef0ff;" aria-current="page"
                            href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold hover" style="color: #eeeef0ff;"
                            href="index.php?page=datadiri">About Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active fw-bold hover" style="color: #eeeef0ff;" 
                        href="scan-ar.php">Scan AR</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active fw-bold hover" style="color: #eeeef0ff;" 
                        href="index.php?page=product">Our Product</a>
                    </li>
                    <!-- <li class="nav-item">
                        
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Login</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="login.php">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    name="password">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="nav-link active fw-bold hover" style="color: #eeeef0ff;"
                            data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Login</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- CONTENT -->
    <?php
    if (file_exists($content)) {
        include $content;
    } else {
        echo "<p>Tidak ada konten</p>";
    }
    ?>
    <!-- FOOTER -->
   <div class="d-flex justify-content-center" 
     style="background: linear-gradient(to right, #318c0aff, #39970eff, #edf108ff);">
        <span class="text-light mt-2 mb-2">Website UMKM Lokal - Es Teler Creamer Buk Tuty</span>

    </div>
    <!-- JS BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- JS A-Frame -->
    <script src="https://aframe.io/releases/1.6.0/aframe.min.js"></script>
    <!-- JS MindAR -->
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.5/dist/mindar-image-aframe.prod.js"></script>
</body>

</html>