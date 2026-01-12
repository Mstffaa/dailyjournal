<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Avatar of Aang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="index.css" />


</head>
<body class="light">
  <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Avatar of Aang</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarNav" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="#home" class="nav-link">Home    </a></li>
          <li class="nav-item"><a href="#characters" class="nav-link">Characters</a></li>
          <li class="nav-item"><a href="#elements" class="nav-link">Elements</a></li>
          <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="#schedule" class="nav-link">Schedule</a></li>
          <li class="nav-item"><a href="#profile" class="nav-link">Profile</a></li>
          <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>

  <button id="darkBtn" class="btn btn-outline-light btn-sm ms-3">🌙</button>
  <button id="lightBtn" class="btn btn-outline-warning btn-sm ms-1">☀️</button>   
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section id="home" class="hero d-flex align-items-center justify-content-center text-center">
    <div>
      <h1 class="fw-bold">Avatar: The Last Airbender</h1>
      <p>Master of all four elements — Air, Water, Earth, and Fire</p>
      <img src="img/MAIN CAR.jpeg" alt="Aang" class="hero-img" /> 
    </div>
  </section>

  <!-- KARAKTER -->
  <section id="characters" class="container fw">
      <h2 class="text-center mb-4 fw-bold">Main Characters</h2>
      <div class="row text-center">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="img/aang.jpeg" class="card-img-top" alt="Aang">
            <div class="card-body">
              <h5 class="card-title">Aang</h5>
              <p class="card-text">The last Airbender and the Avatar destined to bring balance.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="img/katara.jpeg" class="card-img-top" alt="Katara">
          <div class="card-body">
            <h5 class="card-title">Katara</h5>
            <p class="card-text">A kind-hearted Waterbender from the Southern Water Tribe.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="img/toph.jpeg"card-img-top alt="Toph">
          <div class="card-body">
            <h5 class="card-title">Toph</h5>
            <p class="card-text">Blind Earthbender with unmatched power and precision.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="img/sokka.jpg" class="card-img-top" alt="Zuko">
          <div class="card-body">
            <h5 class="card-title">Sokka</h5>
            <p class="card-text">A brave warrior from the Southern Water Tribe who relies on wit and strategy.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- article begin -->
<section id="article" class="bg-light text-center py-5">
  <div class="container">
    <h1 class="fw-bold mb-4">The Four Elements</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
      <div class="col">
        <div class="row align-items-justify-content-center">

          <img  src="img/<?= $row["gambar"]?>" 
               class="img-fluid rounded-circle mb-3 shadow w-50" 
               alt="gambar artikel">

          <div class="card-body p-4">
            <h5 class="card-title fw-bold">
              <?= $row["judul"]?>
            </h5>

            <p class="card-text text-secondary small">
              <?= $row["isi"]?>
            </p>
          </div>

          <div class="card-footer bg-transparent border-0 pb-4">
            <small class="text-muted">
              <?= $row["tanggal"]?>
            </small>
          </div>

        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
  <!-- GALERI -->
  <section id="gallery" class="py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Gallery</h2>
      <div class="row g-3">
        <div class="col-md-4"><img src="img/aang gaang.jpg" class="img-fluid rounded"></div>
        <div class="col-md-4"><img src="img/all team2.jpg" class="img-fluid rounded"></div> 
        <div class="col-md-4"><img src="img/all team1.jpg" class="img-fluid rounded"></div>
      </div>
    </div>
  </section>

<!-- JADWAL -->
<section id="schedule" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Jadwal Kuliah & Kegiatan Mahasiswa</h2>

    <div class="row g-3 justify-content-center">

      <div class="col-md-3 col-sm-6 d-flex">
        <div class="card text-center shadow-sm flex-fill">
          <div class="card-body">
            <h5 class="card-title">Senin</h5>
            <p class="card-text mb-1">Rekayasa Perangkat Lunak</p>
            <small>07.00 - 09.30 | H.3.9</small>
            <p class="card-text mb-1">Pendidikan Kewarganegaraan</p>
            <small>12.30 - 14.10 | Kulino</small>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 d-flex">
        <div class="card text-center shadow-sm flex-fill">
          <div class="card-body">
            <h5 class="card-title">Selasa</h5>
            <p class="card-text mb-1">Basis Data (Teori)</p>
            <small>07.00 - 08.40 | H.5.6</small>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 d-flex">
        <div class="card text-center shadow-sm flex-fill">
          <div class="card-body">
            <h5 class="card-title">Rabu</h5>
            <p class="card-text mb-1">Probabilitas dan Statistik</p>
            <small>07.00 - 09.30 | H.4.4</small>
            <p class="card-text mb-1">Pemrograman Berbasis Web</p>
            <small>10.20 - 12.00 | D.2.J</small>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 d-flex">
        <div class="card text-center shadow-sm flex-fill">
          <div class="card-body">
            <h5 class="card-title">Kamis</h5>
            <p class="card-text mb-1">Sistem Operasi</p>
            <small>07.00 - 09.30 | H.4.12</small>
            <p class="card-text mb-1">Logika Informatika</p>
            <small>12.30 - 15.00 | H.3.6</small>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 d-flex">
        <div class="card text-center shadow-sm flex-fill">
          <div class="card-body">
            <h5 class="card-title">Jumat</h5>
            <p class="card-text mb-1">Basis Data (Praktik)</p>
            <small>07.00 - 08.40 | D.2.K</small>
            <p class="card-text mb-1">Sistem Informasi</p>
            <small>12.30 - 15.00 | H.5.8</small>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 d-flex">
        <div class="card text-center shadow-sm flex-fill">
          <div class="card-body">
            <h5 class="card-title">Sabtu</h5>
            <p class="card-text mb-1">Binsik</p>
            <small>07.00 - 09.00 | Stadion</small>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 d-flex">
        <div class="card text-center shadow-sm flex-fill">
          <div class="card-body">
            <h5 class="card-title">Minggu</h5>
            <p class="card-text mb-1">Tidak ada jadwal</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PROFILE -->
<section id="profile" class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Profil Mahasiswa</h2>

    <div class="card mx-auto shadow-sm profile-card">
      <div class="row g-0 align-items-center">
        <div class="col-md-4 text-center p-3">
          <img src="img/PAS FOTO - MUHAMMAD MUSTOFA - JAWA TENGAH.JPG" alt="Foto Mahasiswa" class="img-fluid rounded-circle"
               style="width:150px; height:150px; object-fit:cover;">
        </div>

        <!-- DATA -->
        <div class="col-md-8 text-start">
          <div class="card-body">
            <h5 class="card-title mb-2 fw-bold">Muhammad Mustofa</h5>
            <p class="mb-1"><strong>NIM:</strong> A11.2024.16010</p>
            <p class="mb-1"><strong>Program Studi:</strong> Teknik Informatika</p>
            <p class="mb-1"><strong>Email:</strong> mustofa2770@gmail.com</p>
            <p class="mb-0"><strong>Alamat:</strong> Jl. Pedurungan Tengah II. 52, Semarang</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- FOOTER -->
<footer class="text-center py-4">
  <div class="container">
    <p class="mb-2"><strong>© 2025 Muhammad Mustofa</strong></p>

    <!-- MEDSOS -->
    <div class="d-flex justify-content-center gap-4">
      <a href="https://www.instagram.com/avatarnetflix/" target="_blank" class="text-light d-flex align-items-center gap-1 text-decoration-none">
        <i data-lucide="instagram"></i>
      </a>
      <a href="https://www.youtube.com/@AvatarLegends" target="_blank" class="text-light d-flex align-items-center gap-1 text-decoration-none">
        <i data-lucide="youtube"></i>
      </a>
    </div>
  </div>
</footer>


<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

<script>
  lucide.createIcons(); // js aktifkan ikon lucide
</script>

<script> // js dark light 
  const body = document.body;
  const darkBtn = document.getElementById('darkBtn');
  const lightBtn = document.getElementById('lightBtn');
  const navbar = document.querySelector('.navbar');

  darkBtn.addEventListener('click', () => {
    body.classList.add('dark');
    body.classList.remove('light');
    navbar.classList.remove('bg-light', 'navbar-light');
    navbar.classList.add('bg-dark', 'navbar-dark');
  });

  lightBtn.addEventListener('click', () => {
    body.classList.add('light');
    body.classList.remove('dark');
    navbar.classList.remove('bg-dark', 'navbar-dark');
    navbar.classList.add('bg-light', 'navbar-light');
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>