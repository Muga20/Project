
<?php
include'db.php';
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$carmake=$_POST['carmake'];
$price=$_POST['price'];

$sqli="insert into customers(firstname, lastname,email,phone,carmake,price)
values('$firstname','$lastname','$email','$phone','$carmake','$price')";

$result=mysqli_query($con,$sqli);
if($result){
   header('location:display.php');
}else{
        die(mysqli_errno($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./styles/dash.css">

      <title>AUTO SMART</title>
       </head>
       <style>   

    </style>
    <body class="background">
      <div>
       <div class="navbar">
       <a href="display.php">Back</a>
         <h1 class="main-heading">
          PLEASE FILL  
         </h1>
        
       </div>
     </div>
   </body>

   
<link rel="stylesheet" href="./styles/create.css">
<form class="form-reg" method="POST" action="">
     
     <div class="fist-plc">
         <label class="lable-hearders">Firstname</label><br>
         <input class= "labels"  type="text" class="a" name="firstname" id="firstname" placeholder="Firstname">
         <br>
    </div>
          
    <div>
         <label class="lable-hearders">lastname</label><br>
         <input class= "labels" type="text"class="a" name="lastname"id="lastame" placeholder="Lastname">
         <br>
    </div>
    <div>
         <label  class="lable-hearders">Email</label><br>
         <input class= "labels" type="email"class="a" name="email"id="email" placeholder="Email">
         <br>
    </div>
    <div>
         <label class="lable-hearders" >Phone</label><br>
         <input class= "labels" type="text"class="a" name="phone"id="phone" placeholder="phone">
         <br>
    </div>
    <div>
         <label class="lable-hearders" >Carmake</label><br>
         <input class= "labels" type="text"class="a" name="carmake"id="carmake" placeholder="carmake">
         <br>
    </div>
    <div>
         <label class="lable-hearders" >Price</label><br>
         <input class= "labels" type="text"class="a" name="price"id="price" placeholder="price">
         <br><br>
    </div>
    <div>
         <button for="submit" name="submit">Submit </button>
    </div>
    
</form>
  
</html>
       