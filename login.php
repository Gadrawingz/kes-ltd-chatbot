<?php
session_start();
require 'templates/header.php';
require 'database/connect.php';

// If login is successful;
if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $passw = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE email ='$email' AND password='$passw'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query) > 0) {
        $_SESSION["_id"] = $row['admin_id'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["user"] = $row['username'];
        echo "<script>alert('Login successful!');</script>";
        echo "<script>window.location='dashboard.php'</script>";
    } else {
        echo "<script>alert('Incorrect email or password!');</script>";
    }
}
?>
        <!-- Login -->
        <section id="services">
            <div class="container">
                <h2 class="text-left" style="text-align: left!important;">Admin Login</h2>
                <div class="row col-md-6">
                    <form method="POST" role="form" class="form-inline text-left col-md-6" >
                        <label for="mail">Email Address</label><br>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="mail" placeholder="Email">
                        </div><br><br>
                        
                        <label for="password">Password</label><br>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div><br><br>
                        <button type="submit" class="btn btn-primary submit_btn" name="login">Login</button>
                        <button type="reset" class="btn btn-warning submit_btn">Cancel</button>
                    </form>				
                </div>
            </div>
        </section>
        <!-- Login Pages -->

<?php
require 'templates/footer.php';
?>
