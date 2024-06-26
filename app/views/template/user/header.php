<?php 

if  ($_SESSION['role'] !== '3' || $_SESSION['status'] !== 'login') {
  header('Location: '.BASEURL.'/login/login');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Creative Tim">
  <title><?= $data['judul'] ?></title>
  

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= BASEURL ?>/css/argon.min9f1e.css?v=1.1.0" type="text/css">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css" type="text/css">
  <!-- Data Tables -->
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/style-card.css">
  <script
  src="http://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
    <style>
    .shadow{
      box-shadow: 0 0 2rem 0 rgba(0,0,0,.5) !important;
    }
    nav{
      position: fixed !important;
      width: 100%;
      z-index: 1;
    }
  </style>
</head>
<body class="g-sidenav-hidden">
 <div class="row">
  <div class="flash-data" data-flashdata="<?= Flasher::flash(true); ?>"></div>
</div>
<div class="main-content" id="panel">
  <!-- Topnav -->
  <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom shadow z-99">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Search form -->
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative input-group-merge">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
          <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </form>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center ml-md-auto">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center ml-auto ml-md-0">
          <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php if (!empty($data['identitas']['foto'])): ?>
                                    <?= BASEURL.'/img/theme/'.$data['identitas']['foto']?>
                                    <?php else :?>
                                        <?= BASEURL.'/img/theme/team-4.jpg'?>
                                <?php endif ?>">
              </span>
              <div class="media-body ml-2 d-none d-lg-block mr-2">
                <span class="mb-0 text-sm  font-weight-bold"><?= $_SESSION['username'] ?></span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>

            <?php $id_auth = Encripsi::encode('encrypt',$_SESSION['auth']); ?>
            <a href="<?= BASE_URL ?>/profile/<?= $id_auth ?>" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?= BASE_URL ?>/login/logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Header -->

