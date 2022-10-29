<?php
require_once '../config.php';

$query = "SELECT * FROM `tb_upload_berkas`";
$result = mysqli_query($koneksi, $query);
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KFC BUCKETIVE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style2.css" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

    <section id="hero" style="height: 90.5vh;">
        <div class="hero-container">
            <button type="button" type="button" data-bs-toggle="modal" data-bs-target="#listArtwork" data-aos="fade-up" data-aos-delay="200" class="btn btn-light btn-lg rounded-pill w-50 mb-2 mt-5">List Artwork</button>

            <div class="modal fade" id="listArtwork" tabindex="-1" aria-labelledby="listArtworkLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="listArtworkLabel">DAFTAR PESERTA</h5>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table text-start">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Email</th>
                                            <th>Provinsi</th>
                                            <th>Kota</th>
                                            <th>Social Media</th>
                                            <th class="w-25">Nama Artwork</th>
                                            <th>Tanggal Upload</th>
                                            <th>Download File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $data) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['nama'] ?></td>
                                                <td><?= $data['no_hp'] ?></td>
                                                <td><?= $data['email'] ?></td>
                                                <td><?= $data['provinsi'] ?></td>
                                                <td><?= $data['kota'] ?></td>
                                                <td><?= $data['social_media'] ?></td>
                                                <td><?= $data['filename'] ?></td>
                                                <td><?= $data['tanggal_upload'] ?></td>
                                                <td><button type="button" class="btn btn-primary btn-sm" onclick="location.href='download-file?file=<?= $data['filename'] ?>'">Download</button></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="location.href = '../download.php'" class="btn btn-primary">Download Berkas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container footer-bottom">
            <div class="copyright">
                &copy; <?= date('Y') ?> KFCKU.COM BY PT FASTFOOD INDONESIA TBK. | All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/script.js"></script>

</body>

</html>