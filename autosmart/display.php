<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./styles/display.css">
      <title>AUTO SMART</title>
       </head>
       <style>   

    </style>
    <body class="background">
      <div>
       <div class="navbar">
      
         <h1 class="main-heading">
          WELCOME TO AUTO SMART 
         </h1>
       </div>
      </div>
   </body>
   <body>
     

       <link rel="stylesheet" href="./styles/table.css">
       <table class="styled-table">
    <thead>
        <tr>
            <th>ID</fth>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>phone</th>
            <th>Carmake</th>
            <th>Price</th>
            <th>Contrals</th>

           

        </tr>
    </thead>
    </tbody>

    <?php
     $sql="select * from  customers";
     $result=mysqli_query($con,$sql);
     if($result){
         while($row=mysqli_fetch_assoc($result)){
             $id=$row['id'];
             $firstname=$row['firstname'];
             $lastname=$row['lastname'];
             $email=$row['email'];
             $phone=$row['phone'];
             $carmake=$row['carmake'];
             $price=$row['price'];
            
             echo '<tr>
                    <th>'.$id.'</th>
                    <td>'.$firstname.'</td>
                    <td>'.$lastname.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$carmake.'</td>
                    <td>'.$price.'</td>
                    <td>
                    <button  class="control-button">
                    <a href="update.php?updateid='.$id.'">Update</a>
                    </button>
                    <button class="delete-btn">
                    <a href="delete.php?deleteid='.$id.'">Delete</a>
                    </button>
                    </td>
                    </tr>';
         }
     }

    ?>
  
</table>
<button  class="button-one"  ><a href="create.php" class="font-button">Add Member</a></button>

   </body>
