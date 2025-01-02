<?php
session_start();

include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
	header("location:login.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Daily Journal | Admin</title>
    <link rel="icon" href="img/logo.png" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    /> 
    <style>
        footer {
        width: 100%;
        padding: 8px;
        background-color: rgba(0, 34, 187, 0.2);
        color: #334155;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        }

        nav {
            background-color: rgba(0, 34, 187, 0.2);
        }

        footer img {
        width: 40px;
        }

        a {
        text-decoration: none;
        }

        footer div a i svg {
        color: #334155 !important;
        }

        footer div a {
        cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href=".">My Daily Journal</a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
        <li class="nav-item">
            <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="admin.php?page=article">Article</a>
        </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-indigo fw-bold" href="#" style="color: #520dc2;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                </ul>
            </li> 
        </ul>
        </div>
    </div>
    </nav>
    <!-- nav end -->
    <!-- content begin -->
    <section id="content" class="p-5">
        <div class="container">
            <?php
            if(isset($_GET['page'])){
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle"><?= ucfirst($_GET['page'])?></h4>
                <?php
                include($_GET['page'].".php");
            }else{
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Dashboard</h4>
                <?php
                include("dashboard.php");
            }
            ?>
        </div>
    </section>
    <!-- content end -->
    <!-- footer begin -->
    <footer class="text-center p-3 footer fixed-bottom">
    <div>
    <a href="https://www.instagram.com/udinusofficial">
        <i class="fs-4 bi bi-instagram h2 p-2 text-dark"></i>
    </a>
    <a href="https://twitter.com/udinusofficial">
        <i class="fs-4 bi bi-twitter p-2 text-dark"></i>
    </a>
    <a href="https://wa.me/+62812685577">
        <i class="fs-4 bi bi-whatsapp p-2 text-dark"></i>
    </a>
    </div>
    <div>
        Made with love
        <img src="assets/images/heart.png" alt="" />
      </div>
    </footer>
    <!-- footer end -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
    ></script>
</body>
</html> 