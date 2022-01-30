<?php
include 'db.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from customers where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "deleted succesfully";
       header('location:display.php');
    }else{
        die(mysqli_errno($con));
    }
}

?>