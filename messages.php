<?php
session_start();
require 'database/connect.php';
error_reporting(0);

// SHOW ALL MEMBERS
$sql1 = "SELECT * FROM contact ORDER BY contact_id DESC";
$query1 = mysqli_query($con, $sql1);
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
                    
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="">
                        <img class="logo" src="images/logo-2.jpg" alt="" style="height: 60px; width: auto;">
                        </a>
                    </div>

                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a style="color: #ffde00;" href="#">KIBOTO ENGINEERING SOLUTIONS LTD &nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                            <li><a href="signout.php">Logout(<?php echo $_SESSION['user']; ?>)</a></li>
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

        <!-- Manage Members -->
        <section id="services">
            <style>
                .info {
                    border: 1px solid #000;
                    border-radius: 4px;
                    padding: 4px;
                }

                .message {
                    background: #000;
                    color: #FFF;
                    padding: 5px;
                    margin: 5px;
                }

                img {
                    height: 140px;
                    width: 140px;
                }
            </style>
            
            <div class="container">
                <div class="row col-md-12">
                    <h2 class="text-left" style="text-align:left!important;">People who contacted us!</h2>
                    <table style="border: 1px solid blue">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                        $no = 1;
                        while($data1 = mysqli_fetch_assoc($query1)) { 
                        ?>   
                        <tr>	
                            <td><?php echo $no; ?></td>
                            <td>
                                <p class="info">
                                    Name(<?php echo $data1['name']; ?>)<br>
                                    Tel(<?php echo $data1['telephone']; ?>)<br>
                                    <span style="font-size: 12px; color: blue;">Email(<?php echo $data1['email']; ?>)</span><br>
                                </p>
                            </td>
                            <td>
                                <p class="message">
                                    <?php echo $data1['message']; ?>
                                </p>
                            </td>
                        </tr>
                        <?php $no++; } ?>
                    </table>
                </div>
            </div>
        </section>
        <!-- Login Pages -->

<?php
require 'templates/footer_adm.php';
?>