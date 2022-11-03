<?php
    if(!isset($_GET["item"])){
        header("location: menu.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | QResto!</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/102bb34c05.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- -------Header------ -->
    <?php require "component/navbar.php";?>
    <!-- -----End of header------ -->
    <!-- contact form -->
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">NP12 , Ahemdabad</div>
                    <div class="text-two">India</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+0098 9893 5647</div>
                    <div class="text-two">+0096 3434 5678</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">contact.qresto@gmail.com</div>
                    <div class="text-two">qresto@gmail.com</div>
                </div>
            </div>
            <br>
            <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>For booking and queries please contact us.</p>
                <p>We will reach out to you shortly.</p>
                <br>
                <form action="DB/db_contact.php" method="post" name="contact">
                <div class="input-box">
                        <input type="text" placeholder="Enter your name" name="name">
                    </div>
                    <div class="input-box">
                        <input type="contact" placeholder="Enter your Phoneno" name="phoneno">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Enter your email" name="email">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Enter your Address" name="address">
                    </div>
                    <br>
                    <input type="hidden" name="item" value="<?php echo $_GET["item"]?>">
                    <input type="hidden" name="price" value="<?php echo $_GET["price"]?>">

                    <div class="button">
                        <input type="submit" value="Send Now" >
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br>
    <!-- -----Footer---- -->
    <?php require "component/footer.php";?>
    <!------End of footer------>

</body>

</html>