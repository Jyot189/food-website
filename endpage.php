<?php session_start();
if(!(isset($_SESSION["item"]) && isset($_SESSION["price"]))){
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
<style>
    .body{
        background-color: #f7c4ae;
    }
    .end{
        font-size: 150px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-top: 150px;
    }
    .homepage{
        align-items: center;
        text-decoration: none;
        font-size: larger;
    }
 a{
	display:grid;
	padding: 0 5px;
	text-decoration:none;
	color: black;
	opacity: 0.9;
	font-weight: 600;
    margin-left: 550px;
}

 a:hover{
    transition: .5s;
    color:#FF7235 ;
}

</style>

<body>
        <p align="center" class="end">Thank you for ordering !</p>
        <br>
        <a  class="homepage" href="index.php">Return to home page</a>
</body>
<script>alert("your <?php echo $_SESSION["item"];?> of <?php echo $_SESSION["price"];?> is arriving in 30 min ");</script>
<?php 
session_unset();
session_destroy();
?>
</html>