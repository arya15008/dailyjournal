<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Daily Journal</title>
  <link rel="icon"
    href="https://images.unsplash.com/photo-1720293315632-37efe958d5ec?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw1fHx8ZW58MHx8fHx8" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">My Daily Journal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#schedule">Schedule</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#aboutme">About Me</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.php">Admin</a>
          </li>
        </ul>

        <button id="btn_dark" class="btn btn-dark me-2 mb-2 mt-2">
          <i class="bi bi-moon-stars-fill"></i>
        </button>
        <button id="btn_light" class="btn btn-danger mb-2 mt-2">
          <i class="bi bi-brightness-high-fill"></i>
        </button>
      </div>
    </div>
  </nav>

  <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
    <div class="container">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
        <img
          src="https://images.unsplash.com/photo-1730462826088-ef07f32b2629?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw5fHx8ZW58MHx8fHx8"
          class="rounded img-fluid" width="300" />
        <div>
          <h1 class="h1 fw-bold display-4">
            Create Memories, Save Memories, Everyday
          </h1>
          <h4 class="h4 lead display-6">
            Mencatat semua kegiatan sehari hari tanpa pengecualian
          </h4>
          <h6>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </h6>
        </div>
      </div>
    </div>
  </section>

      <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    
 <!-- Schedule begin -->
 <section id="schedule" class="text-center p-5">
  <div class="container">
      <h1 class="fw-bold display-4 pb-3">Schedule</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
              <div class="card">
               <div class="card-body">
                      <h5 class="card-title bg-danger text-white p-2">SENIN</h5>
                      <ul class="list-unstyled">
                          <li>07:00 - 08:40: Basis data</li>
                          <li>09:30 - 11:30: Rekayasa Perangkat Lunak</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title bg-danger text-white p-2">SELASA</h5>
                      <ul class="list-unstyled">
                          <li>FREE</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title bg-danger text-white p-2">RABU</h5>
                      <ul class="list-unstyled">
                          <li>07:00 - 09:30: Logika Informatika</li>
                          <li>10:20 - 12:00: Pemrograman Berbasis Web</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title bg-danger text-white p-2">KAMIS</h5>
                      <ul class="list-unstyled">
                          <li>07:00 - 09:30: Probabilitas Dan Statistika</li>
                          <li>09:30 - 12:00: Sistem Informasi</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title bg-danger text-white p-2">JUMAT</h5>
                      <ul class="list-unstyled">
                          <li>09:30 - 12:00: Sistem Operasi</li>
                          <li>12:30 - 14:10: Basis Data Teori</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
  <!-- Schedule end -->
<!-- Gallery begin -->
<section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://dinus.ac.id/wp-content/uploads/2024/07/Kelompok-Mahasiswa-Udinus-Ciptakan-Inovasi-GluKol-Check-scaled.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dinus.ac.id/wp-content/uploads/2024/07/Kelompok-Mahasiswa-Udinus-Ciptakan-Inovasi-GluKol-Check-scaled.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src ="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Gallery end -->
 <!-- About Me begin -->
<section id="aboutMe" class="text-center p-5 bg-danger-subtle">
  <div class="container">
      <h1 class="fw-bold display-4 pb-3">About Me</h1>
      <div class="row align-items-center">
          <!-- Kolom Foto -->
          <div class="col-md-6 text-center">
              <img src="https://kulino.dinus.ac.id/pluginfile.php/1812499/user/icon/lambda/f1?rev=8729440" 
                   class="rounded-circle img-fluid" 
                   style="width: 300px; height: 300px; object-fit: cover;"
                   alt="Foto Mahasiswa">
          </div>
          <!-- Kolom Data Mahasiswa -->
          <div class="col-md-6 text-md-start text-center mt-4 mt-md-0">
              <div class="fs-4">
                  <p><strong>NIM:</strong> A11.2023.15008</p>
                  <p><strong>Nama:</strong> Arya Febi Prasetyawan</p>
                  <p><strong>Program Studi:</strong> Teknik Informatika</p>
                  <p><strong>Universitas:</strong> Dian Nuswantoro</p>
                      <a href="https://www.dinus.ac.id" 
                         target="_blank" 
                         class="text-decoration-none">
                          Universitas Dian Nuswantoro
                      </a>
                  </p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- About Me end -->

  <footer id="footer" class="text-center p-5">
    <div>
      <a href="https://www.instagram.com/udinusofficial" target="_blank"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
      <a href="https://twitter.com/udinusofficial" target="_blank"><i class="bi bi-twitter h2 p-2 text-dark"></i></a>
      <a href="https://wa.me/628126885577" target="_blank"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
  </div>

    <div id="copyright">Arya Febi Prasetyawan &copy; 2024</div>
  </footer>

  <script type="text/javascript">
    window.setTimeout("tampilWaktu()", 1000);

    function tampilWaktu() {
      var waktu = new Date();
      var bulan = waktu.getMonth() + 1;

      setTimeout("tampilWaktu()", 1000);
      document.getElementById("tanggal").innerHTML =
        waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear() + " | ";
      document.getElementById("jam").innerHTML =
        waktu.getHours() +
        ":" +
        waktu.getMinutes() +
        ":" +
        waktu.getSeconds();
    }

    document.getElementById("btn_dark").onclick = function () {
      darkMode();
    };

    document.getElementById("btn_light").onclick = function () {
      lightMode();
    };

    function darkMode() {
      document.body.classList.add("bg-dark");
      document.getElementById("hero").classList.remove("bg-danger-subtle");
      document.getElementById("hero").classList.add("bg-secondary");

      document.getElementById("aboutme").classList.add("bg-secondary");
      document.getElementById("aboutme").classList.remove("bg-danger-subtle");

      document.getElementById("tanggal").classList.add("text-white");
      document.getElementById("jam").classList.add("text-white");

      document.getElementById("article").classList.add("bg-dark");

      document.getElementById("schedule").classList.add("bg-dark");
      document.getElementById("schedule").classList.remove("bg-light");

      const h1s = document.getElementsByClassName("h1");
      for (let i = 0; i < h1s.length; i++) {
        h1s[i].classList.add("text-white");
      }

      const h6s = document.getElementsByClassName("h6");
      for (let i = 0; i < h6s.length; i++) {
        h6s[i].classList.add("text-white");
      }

      const h3s = document.getElementsByClassName("h3");
      for (let i = 0; i < h3s.length; i++) {
        h3s[i].classList.add("text-white");
      }

      const h4s = document.getElementsByClassName("h4");
      for (let i = 0; i < h4s.length; i++) {
        h4s[i].classList.add("text-white");
      }

      const kartus = document.getElementsByClassName("kartu");
      for (let i = 0; i < kartus.length; i++) {
        kartus[i].classList.add("bg-secondary");
      }

      const juduls = document.getElementsByClassName("judul");
      for (let i = 0; i < juduls.length; i++) {
        juduls[i].classList.add("text-white");
      }

      const artikels = document.getElementsByClassName("artikel");
      for (let i = 0; i < artikels.length; i++) {
        artikels[i].classList.add("text-white");
      }

      document.getElementById("gallery").classList.remove("bg-danger-subtle");
      document.getElementById("gallery").classList.add("bg-secondary");

      document.getElementById("footer").classList.add("bg-dark");

      const ikons = document.getElementsByClassName("ikon");
      for (let i = 0; i < ikons.length; i++) {
        ikons[i].classList.remove("text-dark");
        ikons[i].classList.add("text-white");
      }

      document.getElementById("copyright").classList.add("text-white");
    }

    function lightMode() {
      document.body.classList.add("bg-light");
      document.getElementById("hero").classList.remove("bg-secondary");
      document.getElementById("hero").classList.add("bg-danger-subtle");

      document.getElementById("aboutme").classList.remove("bg-secondary");
      document.getElementById("aboutme").classList.add("bg-danger-subtle");

      document.getElementById("tanggal").classList.remove("text-white");
      document.getElementById("jam").classList.remove("text-white");

      document.getElementById("article").classList.remove("bg-dark");
      document.getElementById("article").classList.add("bg-light");

      document.getElementById("schedule").classList.remove("bg-dark");
      document.getElementById("schedule").classList.add("bg-light");


      const h1s = document.getElementsByClassName("h1");

      for (let i = 0; i < h1s.length; i++) {
        h1s[i].classList.remove("text-white");
      }

      const h6s = document.getElementsByClassName("h6");
      for (let i = 0; i < h6s.length; i++) {
        h6s[i].classList.remove("text-white");
      }

      const h3s = document.getElementsByClassName("h3");
      for (let i = 0; i < h3s.length; i++) {
        h3s[i].classList.remove("text-white");
      }

      const h4s = document.getElementsByClassName("h4");
      for (let i = 0; i < h4s.length; i++) {
        h4s[i].classList.remove("text-white");
      }

      const kartus = document.getElementsByClassName("kartu");
      for (let i = 0; i < kartus.length; i++) {
        kartus[i].classList.remove("bg-secondary");
      }

      const juduls = document.getElementsByClassName("judul");
      for (let i = 0; i < juduls.length; i++) {
        juduls[i].classList.remove("text-white");
      }

      const artikels = document.getElementsByClassName("artikel");
      for (let i = 0; i < artikels.length; i++) {
        artikels[i].classList.remove("text-white");
      }

      document.getElementById("gallery").classList.remove("bg-secondary");
      document.getElementById("gallery").classList.add("bg-danger-subtle");

      document.getElementById("footer").classList.remove("bg-dark");
      document.getElementById("footer").classList.add("bg-light");

      const ikons = document.getElementsByClassName("ikon");
      for (let i = 0; i < ikons.length; i++) {
        ikons[i].classList.remove("text-white");
        ikons[i].classList.add("text-dark");
      }

      document.getElementById("copyright").classList.remove("text-white");
    }
  </script>

  <!-- <script src="index_js.js"></script> -->
</body>

</html>