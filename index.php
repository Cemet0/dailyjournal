<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coba bootstrap</title>
    <link rel="icon" href="img/Marsha blue.jpg">
    <!-- Bootstrap Icons -->
    <link 
      rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
      crossorigin="anonymous">
  </head>
  <body data-bs-theme="light">
    <!-- ===================== NAVBAR ===================== -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">Marsha Lenathea</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" href="#profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" target="_blank">Login</a>
        </li>
      </ul>
      <div class="d-flex gap-2">
          <button id="lightBtn" class="btn btn-outline-danger btn-sm"><i class="bi bi-brightness-high-fill"></i></button>
          <button id="darkBtn" class="btn btn-outline-warning btn-sm"><i class="bi bi-moon-stars-fill"></i></button>
      </div>
    </div>
  </div>
</nav>
    <!-- ===================== END NAVBAR ===================== -->

    <!-- ===================== HERO SECTION ===================== -->
<section id="hero" class="text-center text-md-start py-5 bg-body-secondary mb-5">
  <div class="container">
    <div class="row align-items-center g-4 flex-md-row-reverse">
      
      <!-- FOTO -->
      <div class="col-md-5 text-center">
        <img src="img/Marsha.jpg" class="img-fluid rounded-4 shadow-lg" width="300" alt="Marsha Lenathea">
      </div>

      <!-- TEKS -->
      <div class="col-md-7">
        <h1 class="fw-bold display-4 text-primary-emphasis mb-3">
          Marsha Lenathea Lapian
        </h1>
        <p class="lead mb-4 text-secondary">
          Marsha Lenathea Lapian, dikenal sebagai Marsha JKT48 atau Maeng, adalah anggota generasi ke-9 dari grup idola JKT48. 
          Ia memulai debutnya pada tahun 2019 dan sejak 11 Maret 2021 resmi menjadi anggota inti grup ini.
        </p>
        <div class="mt-4 text-secondary">
          <i class="bi bi-calendar-date me-2"></i><span id="tanggal"></span> | 
          <i class="bi bi-clock me-2"></i><span id="jam"></span>
        </div>
      </div>
    </div>
  </div> 
</section>
    <!-- ===================== END HERO SECTION ===================== -->

    <!-- ===================== ARTICLE SECTION ===================== -->
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
<!-- ===================== END ARTICLE SECTION ===================== -->

    <!-- ===================== SCHEDULE SECTION ===================== -->
<section id="schedule" class="p-5 text-center bg-body-tertiary">
  <div class="container">
    <h2 class="fw-bold mb-4 display-6">Jadwal Kuliah & Kegiatan Mahasiswa</h2>

    <div class="row row-cols-1 row-cols-md-4 g-3 text-start">

      <div class="col">
        <div class="card h-100 shadow-sm border-0 bg-primary-subtle">
          <div class="card-body">
            <h5 class="fw-bold text-primary">Senin</h5>
            <p>08:00 - 10:30<br>Basis Data<br>Ruang H3.4</p>
            <p>13:00 - 15:00<br>Dasar Pemrograman<br>Ruang H3.1</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0 bg-success-subtle">
          <div class="card-body">
            <h5 class="fw-bold text-success">Selasa</h5>
            <p>08:00 - 09:30<br>Pemrograman Berbasis Web<br>Ruang D2.3</p>
            <p>14:00 - 16:00<br>Basis Data<br>Ruang D3.M</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0 bg-danger-subtle">
          <div class="card-body">
            <h5 class="fw-bold text-danger">Rabu</h5>
            <p>10:00 - 12:00<br>Pemrograman Berbasis Objek<br>Ruang D2.A</p>
            <p>13:30 - 15:00<br>Pemrograman Sisi Server<br>Ruang D2.A.1</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0 bg-warning-subtle">
          <div class="card-body">
            <h5 class="fw-bold text-warning">Kamis</h5>
            <p>08:00 - 10:00<br>Pengantar Teknologi Informasi<br>Ruang D3.N</p>
            <p>11:00 - 13:00<br>Rapat Koordinasi DOSCOM<br>Ruang Rapat G.1</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0 bg-info-subtle">
          <div class="card-body">
            <h5 class="fw-bold text-info">Jumat</h5>
            <p>09:00 - 11:00<br>Data Mining<br>Ruang G.2.3</p>
            <p>13:00 - 15:00<br>Information Retrieval<br>Ruang G.2.4</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0 bg-secondary-subtle">
          <div class="card-body">
            <h5 class="fw-bold text-secondary">Sabtu</h5>
            <p>08:00 - 10:00<br>Bimbingan Karier<br>Online</p>
            <p>10:30 - 12:00<br>Latihan Presentasi<br>Online</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0 bg-dark-subtle">
          <div class="card-body">
            <h5 class="fw-bold text-dark">Minggu</h5>
            <p>Tidak Ada Jadwal</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ===================== END SCHEDULE SECTION ===================== -->

    <!-- ===================== GALLERY SECTION ===================== -->
    <section id="gallery" class="text-center p-5 bg-secondary-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">gallery</h1>
            <p class="lead text-secondary mb-4">Beberapa potret terbaik dari Marsha.</p>
        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Marsha1.jpg" class="d-block w-100 rounded-3 shadow" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Marsha2.jpg" class="d-block w-100 rounded-3 shadow" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Marsha3.jpg" class="d-block w-100 rounded-3 shadow" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>
        </div>
    </section>
    <!-- ===================== END GALLERY SECTION ===================== -->

<!-- ===================== PROFILE SECTION ===================== -->
<section id="profile" class="p-5 text-center bg-body-tertiary">
  <div class="container">
    <h1 class="fw-bold display-5 mb-4 text-primary-emphasis text-uppercase">
      <i class="bi bi-person-circle me-2"></i>Profile
    </h1>

    <div class="row align-items-center justify-content-center">
      
      <!-- FOTO PROFIL -->
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card border-0 shadow-lg bg-body text-center">
          <div class="card-body">
            <img src="img/foto_profil.jpg" class="img-fluid rounded-circle shadow-lg mb-3" width="220" alt="Foto Profil">
            <h4 class="fw-bold text-primary mb-0">Nabil Ananda Putra</h4>
            <p class="text-secondary small mb-0">Teknik Informatika</p>
            <p class="text-secondary small">A11.2024.15550</p>
            <a href="mailto:biell@students.dinus.ac.id" class="btn btn-outline-primary btn-sm mt-2">
              <i class="bi bi-envelope"></i> Email Me
            </a>
          </div>
        </div>
      </div>

      <!-- DATA PROFIL -->
      <div class="col-md-6">
        <div class="card border-0 shadow-lg bg-body text-start">
          <div class="card-body">
            <table class="table table-borderless align-middle mb-0">
              <tr><th class="text-primary w-50"><i class="bi bi-person-fill"></i> Nama</th><td>Nabil Ananda Putra</td></tr>
              <tr><th class="text-primary"><i class="bi bi-card-text"></i> NIM</th><td>A11.2024.15550</td></tr>
              <tr><th class="text-primary"><i class="bi bi-journal-code"></i> Program Studi</th><td>Teknik Informatika</td></tr>
              <tr><th class="text-primary"><i class="bi bi-envelope-fill"></i> Email</th><td>biell@students.dinus.ac.id</td></tr>
              <tr><th class="text-primary"><i class="bi bi-telephone-fill"></i> Telepon</th><td>081226738382</td></tr>
              <tr><th class="text-primary"><i class="bi bi-geo-alt-fill"></i> Alamat</th><td>Semarang, Jawa Tengah</td></tr>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ===================== END PROFILE SECTION ===================== -->

    <!-- ===================== FOOTER ===================== -->
    <footer class="text-center p-5 bg-body-tertiary text-body-secondary border-top">
  <div class="mb-3">
    <a href="https://www.instagram.com/itsmecemet/" class="text-body-secondary fs-4 me-3"><i class="bi bi-instagram"></i></a>
    <a href="https://x.com/nandointheskyy?t=raFsh8zJ_EXGFgEerDj9gA&s=09" class="text-body-secondary fs-4 me-3"><i class="bi bi-twitter-x"></i></a>
    <a href="https://api.whatsapp.com/send?phone=6281226738382" class="text-body-secondary fs-4"><i class="bi bi-whatsapp"></i></a>
  </div>
  <div>
    Nnan X Fanlee &copy; 2025
  </div>
</footer>
    <!-- ===================== END FOOTER ===================== -->

    <!-- ===================== SCRIPT BOOTSTRAP ===================== -->
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous">
    </script>

    <!-- ===================== SCRIPT JAM & TANGGAL ===================== -->
    <script>
      function tampilWaktu() {
        const waktu = new Date();
        const bulan = waktu.getMonth() + 1;
        document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
        setTimeout(tampilWaktu, 1000);
      }
      tampilWaktu();
    </script>

    <!-- ===================== DARK MODE SCRIPT ===================== -->
<script>
  const darkBtn = document.getElementById("darkBtn");
  const lightBtn = document.getElementById("lightBtn");
  const body = document.body;

  darkBtn.addEventListener("click", () => {
    body.setAttribute("data-bs-theme", "dark");
  });

  lightBtn.addEventListener("click", () => {
    body.setAttribute("data-bs-theme", "light");
  });
</script>
<!-- ===================== END DARK MODE SCRIPT ===================== -->
  </body>
</html>
