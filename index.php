<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daily Journal</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">My Daily Journal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#article">Articles</a>
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
              <a class="nav-link" href="login.php">
                <button class="login-button">Login</button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section
      class="position-relative d-flex justify-content-center flex-column hero"
    >
      <div class="hero-text">
        <div class="container">
          <span class="title"> sabrinaskaa<span class="dot">.</span></span>
        </div>
        <div class="container d-flex align-items-center flex-column sub-title">
          <div>
            <p class="fs-4">Hello, this is Aska!</p>
            <p class="fs-4">Welcome to my daily journal!</p>
            <a href="#article"
              ><button class="mt-4 button-scroll">Scroll</button></a
            >
          </div>
        </div>
      </div>
      <div class="position-absolute image-potrait">
        <img
          class="object-fit-cover self-potrait"
          src="assets/images/self_potrait.jpeg"
          alt=""
        />
      </div>
    </section>

    <!-- articles -->
    <section class="article" id="article">
      <div class="container">
        <span class="title-articles"
          >My Articles<span class="dot">.</span></span
        >
        <div class="row mt-4 g-4">
          <?php
          $sql = "SELECT * FROM article ORDER BY tanggal DESC";
          $hasil = $conn->query($sql); 

          while($row = $hasil->fetch_assoc()){
          ?>
          <div class="col-md-4">
            <div class="card-a">
              <div class="card-body">
                <p>
                  <time datetime="2023-01-15T12:04:00"
                    ><?= $row["tanggal"]?></time
                  >
                </p>
                <img src="assets/images/<?= $row["gambar"]?>" class="card-image-articles card-img-top mt-3 mb-3" alt="..." />
                <h5 class="card-title">
                  <?= $row["judul"]?>
                </h5>
                <p class="card-text-a">
                  <?= $row["isi"]?>
                </p>
              </div>
            </div>
          </div>
          <?php
            }
          ?> 
        </div>
      </div>
    </section>

    <section class="gallery" id="gallery">
      <div class="container">
        <span class="title-gallery">My Gallery<span class="dot">.</span></span>
        <div class="row mt-4">
          <div class="col-md-4 mb-3">
            <img
              src="assets/images/image1.jpg"
              alt="Gallery Image 1"
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4 mb-3">
            <img
              src="assets/images/image2.jpg"
              alt="Gallery Image 2"
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4 mb-3">
            <img
              src="assets/images/image3.jpg"
              alt="Gallery Image 3"
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4 mb-3">
            <img
              src="assets/images/image3.jpg"
              alt="Gallery Image 4"
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4 mb-3">
            <img
              src="assets/images/image1.jpg"
              alt="Gallery Image 5"
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4 mb-3">
            <img
              src="assets/images/image2.jpg"
              alt="Gallery Image 6"
              class="img-fluid rounded"
            />
          </div>
        </div>
      </div>
    </section>

    <section id="schedule" class="schedule">
      <div class="container pt-2">
        <span class="title-articles"
          >My Schedule<span class="dot">.</span></span
        >
        <div class="row mt-4 g-4">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="highlight"></div>
                <p class="day">SENIN</p>
                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>10.20 - 12.00</b></p>
                  <p>Basis Data</p>
                  <p>D.3.M</p>
                </div>

                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>12.30 - 15.00</b></p>
                  <p>Sistem Informasi</p>
                  <p>H.4.5</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="highlight"></div>
                <p class="day">SELASA</p>
                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>12.30 - 14.10</b></p>
                  <p>Pemrograman Berbasis Web</p>
                  <p>D.2.J</p>
                </div>

                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>14.10 - 15.50</b></p>
                  <p>Sistem Informasi</p>
                  <p>H.4.5</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="highlight"></div>
                <p class="day">RABU</p>
                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>12.30 - 14.10</b></p>
                  <p>Pemrograman Berbasis Web</p>
                  <p>D.2.J</p>
                </div>

                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>14.10 - 15.50</b></p>
                  <p>Sistem Informasi</p>
                  <p>H.4.5</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="highlight"></div>
                <p class="day">KAMIS</p>
                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>12.30 - 14.10</b></p>
                  <p>Pemrograman Berbasis Web</p>
                  <p>D.2.J</p>
                </div>

                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>14.10 - 15.50</b></p>
                  <p>Sistem Informasi</p>
                  <p>H.4.5</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="highlight"></div>
                <p class="day">JUMAT</p>
                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>12.30 - 14.10</b></p>
                  <p>Pemrograman Berbasis Web</p>
                  <p>D.2.J</p>
                </div>

                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>14.10 - 15.50</b></p>
                  <p>Sistem Informasi</p>
                  <p>H.4.5</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="highlight"></div>
                <p class="day">SABTU</p>
                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>12.30 - 14.10</b></p>
                  <p>Pemrograman Berbasis Web</p>
                  <p>D.2.J</p>
                </div>

                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>14.10 - 15.50</b></p>
                  <p>Sistem Informasi</p>
                  <p>H.4.5</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="highlight"></div>
                <p class="day">MINGGU</p>
                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>12.30 - 14.10</b></p>
                  <p>Pemrograman Berbasis Web</p>
                  <p>D.2.J</p>
                </div>

                <div
                  class="schedule-wrapper mt-4 d-flex flex-column items-center justify-content-center"
                >
                  <p><b>14.10 - 15.50</b></p>
                  <p>Sistem Informasi</p>
                  <p>H.4.5</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="profile" id="profile">
      <div class="container">
        <span class="title-profile">My Profile<span class="dot">.</span></span>
        <div class="row mt-5">
          <div class="col-md-6 mb-3 d-flex items-center potrait-wrapper">
            <img
              src="assets/images/self_potrait.jpeg"
              alt="Gallery Image 1"
              class="img-fluid"
            />
          </div>
          <div class="col-md-6 d-flex flex-column">
            <span class="myname">Sabrina Aska Amalina</span>
            <span class="mymajor">Mahasiswa Teknik Informatika</span>

            <table class="mt-5">
              <tbody>
                <tr>
                  <th>NIM</th>
                  <td>:</td>
                  <td>A11.2023.15264</td>
                </tr>
                <tr>
                  <th>Program Studi</th>
                  <td>:</td>
                  <td>Teknik Informatika</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>:</td>
                  <td>1112315264@mh.dinus.ac.id</td>
                </tr>
                <tr>
                  <th>Telepon</th>
                  <td>:</td>
                  <td>085157164643</td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td>:</td>
                  <td>Jl. Kelinci Raya</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div>
        <a href="https://www.instagram.com/sabrinaskaa/" target="_blank">
          <i class="bi bi-instagram h2 p-2 text-light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-instagram"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
              />
            </svg>
          </i>
        </a>
        <a href="https://wa.me/+6285157164643" target="_blank">
          <i class="bi bi-whatsapp h2 p-2 text-light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-whatsapp"
              viewBox="0 0 16 16"
            >
              <path
                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"
              />
            </svg>
          </i>
        </a>
        <a href="https://x.com/" target="_blank">
          <i class="bi bi-twitter-x h2 p-2 text-light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-twitter-x"
              viewBox="0 0 16 16"
            >
              <path
                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"
              />
            </svg>
          </i>
        </a>
      </div>
      <div>
        Made with love
        <img src="assets/images/heart.png" alt="" />
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
