<?php
    
     $stu_name = $_POST['sname'];
     $stu_address = $_POST['saddress'];
     $stu_class = $_POST['class'];
     $stu_phone = $_POST['sphone'];


        $connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");

        $sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";

        $result =  mysqli_query($connection, $sql) or die("Query unsuccessful");

        header("Location: http://localhost/crud/index.php");

        mysqli_close($connection);

?>