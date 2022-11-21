<?php 
    $conn=mysqli_connect("localhost", "root","", "library_crud_login");

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];

     $sql = "INSERT INTO `user` (`fname`, `lname`, `email`) VALUES('$fname','$lname', '$email')";
    if(mysqli_query($conn,$sql)){
        echo "success";
    }

?>