<?php
 $conn=mysqli_connect("localhost", "root","", "library_crud_login");

 $sql ="SELECT * FROM user";
 $result=mysqli_query($conn,$sql);

 $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);

 foreach($rows as $row){
    echo "  <div class='container'>
            <p>{$row["fname"]}</p>
            <p>{$row["lname"]}</p>
            <p>{$row["email"]}</p>
            </div><hr>
    ";
 }
?>