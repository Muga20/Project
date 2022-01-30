
<?php
include'db.php';
error_reporting(0);
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
     

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$carmake=$_POST['carmake'];
$price=$_POST['price'];

$sql="update customer set  firstname='$firstname',lastname='$lastname',email='$email',phone='$phone'
,carmake='$carmake',price='$price'";

$result=mysqli_query($con,$sql);
if($result){
    
    echo "Data inserted succesfully";
  // header('location:display.php');
}//else{
       // die(mysqli_errno($con));
   // }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./styles/update.css">
      <title>AUTO SMART</title>
       </head>
       <style>   
 

    </style>
    <body class="background">
      <div>
       <div class="navbar">
         <a href="display.php">Back</a>
         <h1 class="main-heading">
          KINDLY FILL THE FORM  
         </h1>
        
     </div>
   </body>

   
<link rel="stylesheet" href="./styles/create.css">
<form class="form-reg" method="POST" action="">
     <div>
         <label class="first-n-lable"> Firstname</label><br>
         <input class="labels" type="text" class="a" name="firstname" id="firstname" placeholder="Firstname">
         <br>
    </div>
          
    <div>
         <label class="first-n-lable">lastname</label><br>
         <input class="labels"  type="text"class="a" name="lastname"id="lastame" placeholder="Lastname">
         <br>
    </div>
    <div>
         <label class="first-n-lable">Email</label><br>
         <input class="labels" type="email"class="a" name="email"id="email" placeholder="Email">
         <br>
    </div>
    <div>
         <label class="first-n-lable" >Phone</label><br>
         <input class="labels" type="text"class="a" name="phone"id="phone" placeholder="phone">
         <br>
    </div>
    <div>
         <label class="first-n-lable">Carmake</label><br>
         <input  class="labels" type="text"class="a" name="carmake"id="carmake" placeholder="carmake">
         <br>
    </div>
    <div>
         <label class="first-n-lable">Price</label><br>
         <input class="labels"  type="text"class="a" name="price"id="price" placeholder="price">
         <br><br>
    </div>
    <div>
         <button for="submit" name="submit">Update </button>
    </div>
</form>
  
</html>
