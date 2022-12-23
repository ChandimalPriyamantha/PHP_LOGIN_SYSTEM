<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_type'])) {

?>



    <!DOCTYPE html>
    <html lang="en">

    <!--   Tue, 07 Jan 2020 03:33:27 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Ecommerce Dashboard &mdash; CodiePie</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
        <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="assets/css/components.min.css">
        <link rel="stylesheet" href="table-style.css">
        


    </head>

    <body class="layout-4">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>

        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>

                <!-- Start app top navbar -->
                <nav class="navbar navbar-expand-lg main-navbar">
                    <form class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                        </ul>
                        <div class="search-element">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            <div class="search-backdrop"></div>
                            <div class="search-result">
                                <div class="search-header">Histories</div>
                                <div class="search-item">
                                    <a href="#">How to Used HTML in Laravel</a>
                                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="search-item">
                                    <a href="https://themeforest.net/user/admincraft/portfolio" target="_black">Admincraft Portfolio</a>
                                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="search-item">
                                    <a href="#">#CodiePie</a>
                                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="search-header">Result</div>
                                <div class="search-item">
                                    <a href="#">
                                        <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                                        oPhone 11 Pro
                                    </a>
                                </div>
                                <div class="search-item">
                                    <a href="#">
                                        <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                                        Drone Zx New Gen-3
                                    </a>
                                </div>
                                <div class="search-item">
                                    <a href="#">
                                        <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                                        Headphone JBL
                                    </a>
                                </div>
                                <div class="search-header">Projects</div>
                                <div class="search-item">
                                    <a href="https://themeforest.net/item/epice-laravel-admin-template-for-hr-project-management/24466729" target="_black">
                                        <div class="search-icon bg-danger text-white mr-3"><i class="fas fa-code"></i></div>
                                        Epice Laravel - Admin Template
                                    </a>
                                </div>
                                <div class="search-item">
                                    <a href="https://themeforest.net/item/soccer-project-management-admin-template-ui-kit/24646866" target="_black">
                                        <div class="search-icon bg-primary text-white mr-3"><i class="fas fa-laptop"></i></div>
                                        Soccer - Admin Template
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                <div class="dropdown-header">Messages
                                    <div class="float-right">
                                        <a href="#">Mark All As Read</a>
                                    </div>
                                </div>
                                <div class="dropdown-list-content dropdown-list-message">
                                    <a href="#" class="dropdown-item dropdown-item-unread">
                                        <div class="dropdown-item-avatar">
                                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                                            <div class="is-online"></div>
                                        </div>
                                        <div class="dropdown-item-desc">
                                            <b>Kusnaedi</b>
                                            <p>Hello, Bro!</p>
                                            <div class="time">10 Hours Ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item dropdown-item-unread">
                                        <div class="dropdown-item-avatar">
                                            <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                                        </div>
                                        <div class="dropdown-item-desc">
                                            <b>Dedik Sugiharto</b>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                            <div class="time">12 Hours Ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item dropdown-item-unread">
                                        <div class="dropdown-item-avatar">
                                            <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                                            <div class="is-online"></div>
                                        </div>
                                        <div class="dropdown-item-desc">
                                            <b>Agung Ardiansyah</b>
                                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <div class="time">12 Hours Ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-item-avatar">
                                            <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                                        </div>
                                        <div class="dropdown-item-desc">
                                            <b>Ardian Rahardiansyah</b>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                            <div class="time">16 Hours Ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-item-avatar">
                                            <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                                        </div>
                                        <div class="dropdown-item-desc">
                                            <b>Alfa Zulkarnain</b>
                                            <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            <div class="time">Yesterday</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer text-center">
                                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                <div class="dropdown-header">Notifications
                                    <div class="float-right">
                                        <a href="#">Mark All As Read</a>
                                    </div>
                                </div>
                                <div class="dropdown-list-content dropdown-list-icons">
                                    <a href="#" class="dropdown-item dropdown-item-unread">
                                        <div class="dropdown-item-icon bg-primary text-white">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <div class="dropdown-item-desc"> Template update is available now!
                                            <div class="time text-primary">2 Min Ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-item-icon bg-info text-white">
                                            <i class="far fa-user"></i>
                                        </div>
                                        <div class="dropdown-item-desc">
                                            <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                            <div class="time">10 Hours Ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-item-icon bg-success text-white">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="dropdown-item-desc">
                                            <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                            <div class="time">12 Hours Ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-item-icon bg-danger text-white">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                        <div class="dropdown-item-desc">
                                            Low disk space. Let's clean it!
                                            <div class="time">17 Hours Ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-item-icon bg-info text-white">
                                            <i class="fas fa-bell"></i>
                                        </div>
                                        <div class="dropdown-item-desc">
                                            Welcome to CodiePie template!
                                            <div class="time">Yesterday</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer text-center">
                                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                                <div class="d-sm-none d-lg-inline-block">Hi,<?php echo $_SESSION['name'] ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-title">Logged in 5 min ago</div>
                                <a href="features-profile.html" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                                <a href="features-activities.html" class="dropdown-item has-icon"><i class="fas fa-bolt"></i> Activities</a>
                                <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="../php/logout.php" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!-- Start main left sidebar menu -->
                <div class="main-sidebar sidebar-style-3">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="index-2.html">ELP-Academy</a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="index-2.html">CP</a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header">Dashboard</li>
                            <li class="dropdown active">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>

                            </li>
                            <li class="menu-header">Create Tasks</li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Wrriting</span></a>

                            </li>
                            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Listening</span></a></li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Reading</span></a>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Spoken</span></a>

                            </li>
                        </ul>
                        <ul class="sidebar-menu">

                            <li class="menu-header">Setting</li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>#</span></a>

                            </li>
                            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>#</span></a></li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>#</span></a>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>#</span></a>

                            </li>
                        </ul>

                        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a href="https://getcodiepie.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i> Documentation</a>
                        </div>
                    </aside>
                </div>

                <!-- Start app main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="card card-statistic-2">
                                    <div class="card-stats">
                                        <div class="card-stats-title">Registered Students -

                                        </div>
                                        <div class="card-stats-items">
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">0</div>
                                                <div class="card-stats-item-label">Pending</div>
                                            </div>
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">2</div>
                                                <div class="card-stats-item-label">Deleted</div>
                                            </div>
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">3</div>
                                                <div class="card-stats-item-label">Active</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-icon shadow-primary bg-primary">
                                        <i class="fas fa-archive"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Students</h4>
                                        </div>
                                        <div class="card-body">
                                            <?php

                                            include '../php/connection.php';
                                            $sql = "SELECT * FROM user_details where User_Type='user'";
                                            $result = mysqli_query($conn, $sql);
                                            $rows_count_value = mysqli_num_rows($result);
                                            echo $rows_count_value;
                                            mysqli_close($conn);
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="card card-statistic-2">
                                    <div class="card-stats">
                                        <div class="card-stats-title">Registered Admins -

                                        </div>
                                        <div class="card-stats-items">
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">0</div>
                                                <div class="card-stats-item-label">Pending</div>
                                            </div>
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">2</div>
                                                <div class="card-stats-item-label">Deleted</div>
                                            </div>
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">3</div>
                                                <div class="card-stats-item-label">Active</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-icon shadow-primary bg-primary">
                                        <i class="fas fa-archive"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Admins</h4>
                                        </div>
                                        <div class="card-body">
                                            <?php

                                            include '../php/connection.php';
                                            $sql = "SELECT * FROM user_details where User_Type='admin'";
                                            $result = mysqli_query($conn, $sql);
                                            $rows_count_value = mysqli_num_rows($result);
                                            echo $rows_count_value;
                                            mysqli_close($conn);
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="card card-statistic-2">
                                    <div class="card-stats">
                                        <div class="card-stats-title">Created Tasks -

                                        </div>
                                        <div class="card-stats-items">
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">0</div>
                                                <div class="card-stats-item-label">Reading</div>
                                            </div>
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">2</div>
                                                <div class="card-stats-item-label">Listening</div>
                                            </div>
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">3</div>
                                                <div class="card-stats-item-label">Writting</div>
                                            </div>
                                            <div class="card-stats-item">
                                                <div class="card-stats-item-count">3</div>
                                                <div class="card-stats-item-label">Spoken</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-icon shadow-primary bg-primary">
                                        <i class="fas fa-archive"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Tasks</h4>
                                        </div>
                                        <div class="card-body">
                                            <?php

                                            include '../php/connection.php';
                                            $sql = "SELECT * FROM user_details where User_Type='user'";
                                            $result = mysqli_query($conn, $sql);
                                            $rows_count_value = mysqli_num_rows($result);
                                            echo $rows_count_value;
                                            mysqli_close($conn);
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-deck">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Students' Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <!--<canvas id="myChart" height="158"></canvas> -->
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                            <table class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include '../php/connection.php';
                                                    $sql = "SELECT * FROM user_details where User_Type='user'";
                                                    $result = mysqli_query($conn, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                            $id = $row["ID"];
                                                            $name = $row["Name"];
                                                            $email = $row["Email"];
                                                            $address = $row["Address"];


                                                    ?>
                                                            <tr>
                                                                <td><?php echo $id ?> </td>
                                                                <td><?php echo $name ?></td>
                                                                <td><?php echo $email ?></td>
                                                                <td><?php echo $address ?></td>

                                                        <?php }
                                                    } else {
                                                        echo "<tr>";
                                                        echo "0 results";
                                                        echo "</tr>";
                                                    }
                                                    mysqli_close($conn);

                                                        ?>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card gradient-bottom">
                                    <div class="card-header">
                                        <h4>Created Tasks</h4>
                                        <div class="card-header-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                                            <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <li class="dropdown-title">Select Period</li>
                                                <li><a href="#" class="dropdown-item">Today</a></li>
                                                <li><a href="#" class="dropdown-item">Week</a></li>
                                                <li><a href="#" class="dropdown-item active">Month</a></li>
                                                <li><a href="#" class="dropdown-item">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body" id="top-5-scroll">
                                        <ul class="list-unstyled list-unstyled-border">
                                            <li class="media">
                                                <img class="mr-3 rounded" width="55" src="assets/img/products/product-3-50.png" alt="product">
                                                <div class="media-body">
                                                    <div class="float-right">
                                                        <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                                    </div>
                                                    <div class="media-title">oPhone S9 Limited</div>
                                                    <div class="mt-1">
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-primary" data-width="64%"></div>
                                                            <div class="budget-price-label">$68,714</div>
                                                        </div>
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-danger" data-width="43%"></div>
                                                            <div class="budget-price-label">$38,700</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="mr-3 rounded" width="55" src="assets/img/products/product-4-50.png" alt="product">
                                                <div class="media-body">
                                                    <div class="float-right">
                                                        <div class="font-weight-600 text-muted text-small">67 Sales</div>
                                                    </div>
                                                    <div class="media-title">iBook Pro 2018</div>
                                                    <div class="mt-1">
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-primary" data-width="84%"></div>
                                                            <div class="budget-price-label">$107,133</div>
                                                        </div>
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-danger" data-width="60%"></div>
                                                            <div class="budget-price-label">$91,455</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="mr-3 rounded" width="55" src="assets/img/products/product-1-50.png" alt="product">
                                                <div class="media-body">
                                                    <div class="float-right">
                                                        <div class="font-weight-600 text-muted text-small">63 Sales</div>
                                                    </div>
                                                    <div class="media-title">Headphone Blitz</div>
                                                    <div class="mt-1">
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-primary" data-width="34%"></div>
                                                            <div class="budget-price-label">$3,717</div>
                                                        </div>
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-danger" data-width="28%"></div>
                                                            <div class="budget-price-label">$2,835</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="mr-3 rounded" width="55" src="assets/img/products/product-3-50.png" alt="product">
                                                <div class="media-body">
                                                    <div class="float-right">
                                                        <div class="font-weight-600 text-muted text-small">28 Sales</div>
                                                    </div>
                                                    <div class="media-title">oPhone X Lite</div>
                                                    <div class="mt-1">
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-primary" data-width="45%"></div>
                                                            <div class="budget-price-label">$13,972</div>
                                                        </div>
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-danger" data-width="30%"></div>
                                                            <div class="budget-price-label">$9,660</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="mr-3 rounded" width="55" src="assets/img/products/product-5-50.png" alt="product">
                                                <div class="media-body">
                                                    <div class="float-right">
                                                        <div class="font-weight-600 text-muted text-small">19 Sales</div>
                                                    </div>
                                                    <div class="media-title">Old Camera</div>
                                                    <div class="mt-1">
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-primary" data-width="35%"></div>
                                                            <div class="budget-price-label">$7,391</div>
                                                        </div>
                                                        <div class="budget-price">
                                                            <div class="budget-price-square bg-danger" data-width="28%"></div>
                                                            <div class="budget-price-label">$5,472</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer pt-3 d-flex justify-content-center">
                                        <div class="budget-price justify-content-center">
                                            <div class="budget-price-square bg-primary" data-width="20"></div>
                                            <div class="budget-price-label">Selling Price</div>
                                        </div>
                                        <div class="budget-price justify-content-center">
                                            <div class="budget-price-square bg-danger" data-width="20"></div>
                                            <div class="budget-price-label">Budget Price</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-deck">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Admins' Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <!--<canvas id="myChart" height="158"></canvas> -->
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                            <table class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include '../php/connection.php';
                                                    $sql = "SELECT * FROM user_details where User_Type='admin'";
                                                    $result = mysqli_query($conn, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                            $id = $row["ID"];
                                                            $name = $row["Name"];
                                                            $email = $row["Email"];
                                                            $address = $row["Address"];


                                                    ?>
                                                            <tr>
                                                                <td><?php echo $id ?> </td>
                                                                <td><?php echo $name ?></td>
                                                                <td><?php echo $email ?></td>
                                                                <td><?php echo $address ?></td>

                                                        <?php }
                                                    } else {
                                                        echo "<tr>";
                                                        echo "0 results";
                                                        echo "</tr>";
                                                    }
                                                    mysqli_close($conn);

                                                        ?>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-hero">
                                    <div class="container">

                                        <div class="calendar-base">

                                            <div class="year">2017</div>
                                            <!-- year -->

                                            <div class="triangle-left"></div>
                                            <!--triangle -->
                                            <div class="triangle-right"></div>
                                            <!--  triangle -->

                                            <div class="months">
                                                <span class="month-hover">Jan</span>
                                                <span class="month-hover">Feb</span>
                                                <span class="month-hover">Mar</span>
                                                <strong class="month-color">Apr</strong>
                                                <span class="month-hover">May</span>
                                                <span class="month-hover">Jun</span>
                                                <span class="month-hover">July</span>
                                                <span class="month-hover">Aug</span>
                                                <span class="month-hover">Sep</span>
                                                <span class="month-hover">Oct</span>
                                                <span class="month-hover">Nov</span>
                                                <span class="month-hover">Dec</span>
                                            </div><!-- months -->
                                            <hr class="month-line" />

                                            <div class="days">SUN MON TUE WED THU FRI SAT</div>
                                            <!-- days -->

                                            <div class="num-dates">

                                                <div class="first-week"><span class="grey">26 27 28 29 30 31</span> 01</div>
                                                <!-- first week -->
                                                <div class="second-week">02 03 04 05 06 07 08</div>
                                                <!-- week -->
                                                <div class="third-week"> 09 10 11 12 13 14 15</div>
                                                <!-- week -->
                                                <div class="fourth-week"> 16 17 18 19 20 21 22</div>
                                                <!-- week -->
                                                <div class="fifth-week"> 23 24 25 26 <strong class="white">27</strong> 28 29</div>
                                                <!-- week -->
                                                <div class="sixth-week"> 30 <span class="grey">01 02 03 04 05 06</span></div>
                                                <!-- week -->
                                            </div>
                                            <!-- num-dates -->
                                            <div class="event-indicator"></div>
                                            <!-- event-indicator -->
                                            <div class="active-day"></div>
                                            <!-- active-day -->
                                            <div class="event-indicator two"></div>
                                            <!-- event-indicator -->

                                        </div>
                                        <!-- calendar-base -->
                                        <div class="calendar-left">

                                            <div class="hamburger">
                                                <div class="burger-line"></div>
                                                <!-- burger-line -->
                                                <div class="burger-line"></div>
                                                <!-- burger-line -->
                                                <div class="burger-line"></div>
                                                <!-- burger-line -->
                                            </div>
                                            <!-- hamburger -->


                                            <div class="num-date">27</div>
                                            <!--num-date -->
                                            <div class="day">THURSDAY</div>
                                            <!--day -->
                                            <div class="current-events">Current Events
                                                <br />
                                                <ul>
                                                    <li>Day 09 Daily CSS Image</li>
                                                </ul>
                                                <span class="posts">See post events</span>
                                            </div>
                                            <!--current-events -->

                                            <div class="create-event">Create an Event</div>
                                            <!-- create-event -->
                                            <hr class="event-line" />
                                            <div class="add-event"><span class="add">+</span></div>
                                            <!-- add-event -->

                                        </div>
                                        <!-- calendar-left -->

                                    </div>
                                    <!-- container -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Start app Footer part -->
                <footer class="main-footer">
                    <div class="footer-left">
                        <div class="bullet"></div> <a href="templateshub.net">Templates Hub</a>
                    </div>
                    <div class="footer-right">

                    </div>
                </footer>
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="assets/bundles/lib.vendor.bundle.js"></script>
        <script src="js/CodiePie.js"></script>

        <!-- JS Libraies -->
        <script src="assets/modules/jquery.sparkline.min.js"></script>
        <script src="assets/modules/chart.min.js"></script>
        <script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
        <script src="assets/modules/summernote/summernote-bs4.js"></script>
        <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

        <!-- Page Specific JS File -->
        <script src="js/page/index.js"></script>

        <!-- Template JS File -->
        <script src="js/scripts.js"></script>
        <script src="js/custom.js"></script>
    </body>

    <!--   Tue, 07 Jan 2020 03:35:12 GMT -->

    </html>

<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>