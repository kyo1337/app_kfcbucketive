<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KFC BUCKETIVE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style2.css" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

  <section id="hero">
    <div class="hero-container">
      <img src="assets/img/logo 43th kfc anniversary-03 (1).PNG" class="img-fluid" alt="" data-aos="zoom-in">
      <img src="assets/img/invitation-1.png" class="img-fluid" alt="" data-aos="zoom-in">
      <img src="assets/img/kfc-konten.PNG" class="img-fluid mt-3" alt="" data-aos="zoom-in">
      <!-- <div class="card mb-2 mt-4 col-8 h3" data-aos="zoom-in">
        <div class="card-body">Ramaikan 43rd KFC Anniversary dengan desain KFC Bucket versi kamu dan menangkan hadiah total puluhan juta rupiah! Puluhan karya terbaik bakal dipamerkan di event #KFCBucketive bersama sederet seniman lokal ternama!</div>
      </div> -->
      <!-- <button onclick=" location.href='download.php'" type=" button" id="download" data-aos="fade-up" data-aos-delay="200" class="btn btn-light btn-lg rounded-pill w-50 mb-2 mt-5">Download Template</button> -->
      <button type="button" id="text-responsive" onclick="location.href='download-template.php'" type="button" data-aos="fade-up" data-aos-delay="200" class="btn btn-light btn-lg rounded-pill mb-2 mt-lg-5 mt-4 w-responsive">
        Download Template KFC Bucket
      </button>
      <button type="button" id="text-responsive" data-bs-toggle="modal" data-bs-target="#modalSubmitArtwork" data-aos="fade-up" data-aos-delay="200" class="btn btn-light btn-lg rounded-pill w-responsive mb-lg-5 mb-4">
        Submit KFC Artwork Bucket Design
      </button>
      <img src="assets/img/syarat-ketentuan.PNG" class="img-fluid" alt="" data-aos="zoom-in">
      <!-- <div class="card mb-2 mt-4 col-8 h4 text-start" data-aos="zoom-in">
        <div class="card-body">
          <p>Syarat & Ketentuan :</p>
          <ol>
            <li>Warga Negara Indonesia</li>
            <li>Tidak ada batasan usia minimal untuk mengikuti kompetisi #KFCBucketive.</li>
            <li>Pendaftaran tidak dipungut biaya apapun, hati hati penipuan yang mengatasnamakan KFC Indonesia.</li>
            <li>Diwajibkan untuk mengisi data Nama, No.HP dan Email untuk pemberitahuan pemenang lomba.</li>
            <li>Peserta wajib menggunakan template yang sudah disediakan, dan tidak diperbolehkan mengubah ukuran dan posisi template.</li>
            <li>Desain tidak boleh mengandung unsur SARA atau bertentangan dengan norma-norma hukum yang berlaku.</li>
            <li>Desain yang diikutsertakan merupakan karya orisinal, belum pernah dilombakan atau belum pernah dipublikasikan di media mana pun dan/atau belum pernah mengikuti kompetisi.</li>
            <li>Peserta dapat mengirimkan lebih dari 1 (satu) karya, tetapi hanya akan ada 1 (satu) karya terpilih dari tiap peserta.</li>
            <li>Pemenang akan diumumkan pada tanggal 08 Oktober 2022 melalui Instagram @KFCIndonesia.</li>
            <li>Keputusan Pemenang karya desain oleh KFC Indonesia bersifat mutlak dan tidak dapat diganggu gugat.</li>
            <li>Untuk karya terpilih, KFC Indonesia berhak menggunakan karya desain yang dikirim tanpa ada kewajiban pemberian royalti kepada peserta untuk kepentingan acara 43rd Anniversary KFC.</li>
            <li>
              Hadiah kompetisi :
              <p>
                - Juara I : Rp 25.000.000 <br>
                - Juara II - V : Rp 5.000.000 <br>
                - Selain itu, 80 karya terbaik akan dipamerkan di #KFCBucketive Art Installations di Main Atrium Gandaria City 17 - 23 Oktober 2022.
              </p>
            </li>
            <li>Periode 43rd KFC Anniversary berlaku sampai dengan 17 Oktober 2023, dengan demikian KFC dapat secara bebas menggunakan design Juara #KFCbucketive Online Competition (baik Juara I - V) dalam periode tersebut tanpa dikenakan biaya tambahan apapun.</li>
            <li>Materi yang sudah dikirimkan dan diikutsertakan kedalam #KFCbucketive Online Competition tidak bisa di tuntut ataupun di take down tanpa persetujuan dari KFC.</li>
          </ol>
        </div>
      </div> -->

      <!-- Modal -->
      <div class="modal fade" id="modalSubmitArtwork" tabindex="-1" aria-labelledby="modalSubmitArtworkLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="modal-header">
                <h5 class="modal-title" id="modalSubmitArtworkLabel">Silakan Submit Artwork Kalian Disini</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card mb-2 border-0">
                      <div class="card-body">
                        <div class="form-floating mb-2">
                          <input type="text" class="form-control" id="name" name="nama" placeholder="Nama" autocomplete="off" maxlength="100" required>
                          <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-2">
                          <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No. HP" autocomplete="off" maxlength="20" required>
                          <label for="nohp">No. HP</label>
                        </div>
                        <div class="form-floating mb-2">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" maxlength="50" required>
                          <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-2">
                          <select class="form-select" id="provinsi" name="provinsi" required>

                          </select>
                          <label for="provinsi">Pilih Provinsi</label>
                        </div>

                        <div class="form-floating mb-2">
                          <select class="form-select" id="kota" name="kota" required>
                            <option value=''> --- Pilih Kota --- </option>
                          </select>
                          <label for="kota">Pilih Kota</label>
                        </div>
                        <div class="form-floating mb-2">
                          <input type="text" class="form-control" id="socialmedia" name="socialmedia" placeholder="Social Media Account" autocomplete="off" maxlength="30" required>
                          <label for="socialmedia">Social Media Account</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card border-0">
                      <div class="card-body">
                        <div class="drag-area">
                          <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                          <button type="button">Browse File</button>
                          <header>MAX. 10MB & FORMAT PDF</header>
                          <input type="file" name="pdf" hidden required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
            </form>
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
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

  <script>
    $(document).ready(function() {
      $.ajax({
        type: 'post',
        url: 'api/api-data-provinsi-2.php',
        success: function(resProvinsi) {
          // console.log(resProvinsi);
          $("select[name=provinsi]").html(resProvinsi);
        }
      })

      $("select[name=provinsi]").on("change", function() {
        var id_provinsi = $("option:selected", this).attr("id_provinsi");
        // alert(id_provinsi);
        $.ajax({
          type: 'post',
          url: 'api/api-data-city-2.php',
          data: 'id_provinsi=' + id_provinsi,
          success: function(resKota) {
            // console.log(resKota);
            $("select[name=kota]").html(resKota);
          }
        })
      })
    });
  </script>

</body>

</html>

<?php
require_once 'config.php';

if (isset($_POST['submit'])) {
  $nama = htmlspecialchars($_POST['nama']);
  $nohp = htmlspecialchars($_POST['nohp']);
  $email = htmlspecialchars($_POST['email']);
  $provinsi = htmlspecialchars($_POST['provinsi']);
  $kota = htmlspecialchars($_POST['kota']);
  $social_media = htmlspecialchars($_POST['socialmedia']);

  $queryData = "SELECT * FROM `tb_upload_berkas` WHERE `email` = '$email' OR `no_hp` = '$nohp'";
  $cekData = mysqli_query($koneksi, $queryData);

  if (mysqli_num_rows($cekData) > 0) {
    echo "
      <script>
        alert('Mohon Maaf Email atau No HP Anda Sudah Terdaftar');
        window.location.href = '';
      </script>
    ";
  } else {
    // upload pdf
    $nameFiles = $_FILES['pdf']['name'];
    $ukuranFiles = $_FILES['pdf']['size'];
    $error = $_FILES['pdf']['error'];
    $tmpFiles = $_FILES['pdf']['tmp_name'];

    if ($ukuranFiles > 10000000) {
      echo "
          <script>
            alert('Maximal Ukuran 10MB');
            window.location.href = '';
          </script>
        ";

      return false;
    }

    move_uploaded_file($tmpFiles, "berkas/" . $nameFiles);

    $file_pdf = $nameFiles;

    // Insert Database
    $query = "INSERT INTO `tb_upload_berkas` VALUES (NULL,'$nama','$nohp','$email','$provinsi','$kota','$social_media','$file_pdf',CURRENT_DATE)";
    $result = mysqli_query($koneksi, $query);
    if ($result > 0) {
      echo "
            <script>
                alert('Thank You For Your Submission!');
                window.location.href = '';
            </script>
        ";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
  }
}


?>