<?php
session_start();
require 'database/connect.php';
error_reporting(0);

// SHOW ALL MEMBERS
$sql1 = "SELECT * FROM team";
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
                .dataA {
                    border: 1px solid #000;
                    border-bottom: 2px solid blue;
                }

                .dataB {
                    /*background: #333!important;
                    color: #FFF!important; */
                    padding: 5px;
                    border-bottom: 2px solid #FFF;
                }


                img {
                    height: 140px;
                    width: 140px;
                }
            </style>
            
            <div class="container">
                <div class="row col-md-12">
        
                    <?php if(!isset($_GET['upd'])) { ?>
                    <h2 class="text-left" style="text-align:left!important;">Team photos</h2>
                    <table style="border: none!important;">
                        <tr>
                            <th></th>
                            <th>Name & Role</th>
                            <th></th>
                            <th>Picture</th>
                            <th></th>
                        </tr>
                        <?php
                        $no = 1;
                        while($data1 = mysqli_fetch_assoc($query1)) { 
                        ?>   
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td class="dataA">
                                Name(<?php echo $data1['member_name']; ?>)<hr>
                                Role(<?php echo $data1['member_role']; ?>)
                            </td>
                            <td class="dataB"><?php echo $data1['description']; ?></td>
                            <td class="dataA"><img src='uploads/team/<?php echo $data1['picture']; ?>'/></td>
                            <td>&nbsp;<a class="bg-primary text-white" href="manage_team.php?upd&edit=<?php echo $data1['member_id']; ?>"style="padding: 5px!important; margin: 5px; border-radius: 5px;"/>Edit</a></td>
                        </tr>
                        <?php $no++; } ?>
                    </table>
                    <?php } // End $_GET ?>
                
                    <?php
                    if( isset($_GET['upd']) && isset($_GET['edit']) ) {
                    $m_id = $_GET['edit'];

                    $sql60 = "SELECT * FROM team WHERE member_id= '$m_id' ";
                    $query60 = mysqli_query($con, $sql60);
                    $row60 = mysqli_fetch_assoc($query60); 
                    ?>
                    <p class="bg-success text-white">
                    <?php
                    // If update button is clicked ...
                    $msg = "";
                    if (isset($_POST['save'])) {
                        $role = $_POST['trole'];
                        $name = $_POST['tname'];
                        $desc = $_POST['tdesc'];
                    
                        $fileName = $_FILES["uploadfile"]["name"];
                        $tempname = $_FILES["uploadfile"]["tmp_name"];
                        $folder = "./uploads/team/" . $fileName;
                    
                        // Get all the submitted data from the form
                        $sql = "UPDATE `team` SET `member_name`='$name', `member_role`='$role', `picture`='$fileName', `description`='$desc' WHERE member_id='$m_id' ";
                        mysqli_query($con, $sql);
                    
                        // Now let's move the uploaded image into the folder: image
                        if (move_uploaded_file($tempname, $folder)) {
                            $msg = "<script>alert('Image uploaded successfully!')</script>";
                            echo "<script>window.location='manage_team.php'</script>";
                        } else {
                            $msg = "<h3> Failed to upload image!</h3>";
                        }
                    }
                    echo $statusMsg; 
                    ?>
                    </p> 
                    <fieldset style="border: 1px solid #000; padding: 8px">
                    <legend><h2 style="text-align: left; margin-bottom: 5px;">Update team member info</h2></legend>                   
                    <form method="POST" enctype="multipart/form-data">
                        <label for="name">Name: </label><br>
                        <input type="text" name="tname" value="<?php echo $row60['member_name'];?>" id="name"><br><br>
                        <label for="role">Role: </label><br>
                        <input type="text" name="trole" value="<?php echo $row60['member_role'];?>" id="role"><br><br>
                        <label for="desc">Description: </label><br>
                        <input type="text" name="tdesc" value="<?php echo $row60['description'];?>" id="desc"><br><br>
                        <label for="picture">Picture: </label><br>
                        <input type="file" name="uploadfile" value="<?php echo $row60['picture'];?>" id="picture"><br><br>
                        <input type="submit" name="save" value="Save">
                    </form>
                    </fieldset>
                    <?php } ?>

                </div>
            </div>
            
        </section>
        <!-- Login Pages -->

<?php
require 'templates/footer_adm.php';
?>