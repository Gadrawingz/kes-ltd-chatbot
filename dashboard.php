<?php
session_start();
if(!isset($_SESSION['user'])) {
    echo "<script>alert('Please Login first!');</script>";
    echo "<script>window.location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>KES Ltd</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
    </head>
    <body>

        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>
        <!--End off Preloader -->

        <!-- Header -->
        <header>
            <!-- Navbar -->
            <nav class="navbar bootsnav">
                <!-- Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <!-- Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href=""><img class="logo" src="images/logo.png" alt=""></a>
                    </div>

                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a style="color: #ffde00;" href="#">KIBOTO ENGINEERING SOLUTIONS LTD &nbsp&nbsp&nbsp&nbsp&nbsp</a></li> 
                            <li><a href="signout.php">Logout (<?php echo $_SESSION['user']; ?>)</a></li>
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->

        <div class="container portfolio_area text-center">
            <div id="filters">
                <button class="button is-checked"><a href="dashboard.php" style="color: #FFF!important;">Dashboard</a></button>
                <button class="button is-checked"><a href="manage_team.php" style="color: #FFF!important;">Manage Team Members</a></button>
                <button class="button is-checked"><a href="messages.php" style="color: #FFF!important;">Manage Messages</a></button>
                <button class="button is-checked"><a href="#" style="color: #FFF!important;">Manage Chatbot</a></button>
            </div>
        </div>

        <section id="services">
            <div class="container">
                <p style="text-align: center;">...</p>
            </div>
        </section>
        <!-- Login Pages -->

<?php
require 'templates/footer_adm.php';
?>
