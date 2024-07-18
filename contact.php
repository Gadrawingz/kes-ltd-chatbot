<?php
require 'templates/header.php';
require 'database/connect.php';

// If contact is successful;
if(isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['telephone'];
    $msg = $_POST['message'];

    $sql = "INSERT INTO contact (`name`, `telephone`, `email`, `message`) VALUES ('$name', '$tel', '$email', '$msg')";

    if(mysqli_query($con, $sql)) {
        echo "<script>alert('Thanks for contacting us!');</script>";
    } else {
        echo "<script>alert('Not sumbitted!');</>";
    }
}

?>
        <section id="portfolio" style="background-color: #484848!important;">
            <div class="container portfolio_area text-left" style="padding: 10px!important;">
                <h2>CONTACT US</h2>
                <p>If you have any question or suggestion, Do not hesitate to be in touch with us.</p>
                
                <!-- Start Contact form -->
                <form method="POST" role="form" class="form-inline col-md-6"  style="border: 2px solid #FFF!important; border-radius: 5px; padding: 5px; min-width: 50%!important;">
                    <label for="name">Your Name:</label><br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name..." required/>
                    </div><hr>
                    <label for="tel">Your Telephone:</label><br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="telephone" id="tel" placeholder="Tel..." required/>
                    </div><hr>
                    <label for="email">Email address:</label><br>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="someone@...com" required/>
                    </div><hr>
                    <label for="">Your Question / Suggestion</label><br>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" id="msg" placeholder="Message" name="message" required/></textarea>
                    </div><br><br>
                    <button type="submit" name="save" class="btn bg-primary text-white submit_btn">Submit</button> 
                    <button type="reset" class="btn bg-danger" style="color: black!important;">Cancel</button>
                </form>
                <!-- End Contact form -->
            </div>
        </section>

<?php
require 'templates/footer.php';
?>