
<header id="header" class="header fixed-top d-flex align-items-center bg-danger">

<div class="d-flex align-items-center justify-content-between">
    <a href="index" class="log d-flex align-items-center  ">
      <img style="height: 25px; width: 25px;" class="rounded-circle me-2" src="../assets/img/logo.png" alt="">
      <h1><span class="logo-tex text-white fs-5 me-2">KHOSA LEAGUE | <span class="fs-6" style="color: deepskyblue">Admin</span></span></h1>
    </a>
    <i class="bi bi-list toggle-sidebar-btn text-white"></i>
</div>


        

<div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

    <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/<?=$_SESSION['login_user_image']; ?>" alt="Profile" class="rounded-circle" style="height: 25px; width: 25px">
        <span class="d-none d-md-block dropdown-toggle ps-2 text-white"><?=$_SESSION['login_user_name']; ?></span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header text-start text-info">
            <h6><?=$_SESSION['login_user_name']; ?></h6>
            <span><?=$_SESSION['login_user_email']; ?></span>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="settings">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="logout">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
            </a>
        </li>

        </ul>
    </li>

    </ul>
</nav>

</header>