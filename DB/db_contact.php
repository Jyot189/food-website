<?php
    include 'dbconnect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name=$_POST['name'];
        $phoneno=$_POST['phoneno'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $item=$_POST['item'];
        $price=$_POST['price'];

        $sql="INSERT INTO `contact` (`name`, `phoneno`,`email`,`address`, `datatime`,`item`,`price`) VALUES ('$name', '$phoneno','$email','$address',current_timestamp(),'$item','$price');";;          
        $result=mysqli_query($conn,$sql);
        ?>
        <!-- <script>alert("your order is a item arriving in 30 min ");</script> -->
        <script>alert("your <?php echo $item;?> of <?php echo $price;?> this in arriving in 30 min ");</script>
        
    <?php }else{
        header("location: ../contact.php");
    }
?>