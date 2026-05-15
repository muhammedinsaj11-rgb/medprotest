<?php
include("connection.php");
error_reporting(0);

if(isset($_POST['submit']))
    {
        $username   =$_POST['username'];
        $password   =$_POST['password'];

        $query ="SELECT * FROM form WHERE username ='$username' and password ='$password'";
        $data =mysqli_query($conn,$query);
        $total =mysqli_num_rows($data);

        if($total > 0)
            {
                header("location:medpro.php");
            }
            else
            {
                 echo'<script>alert("email and password is wrong !")</script>';
            }




}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDPRO</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
     <div class="body1">
    <center>
     <div class = "container">
  <br>
     <div><h1 class="h1">login</h1></div>
   
        <form action="#" method="POST">
         
            
            <input type="text" class="username" name="username" placeholder="  Username" required>
            
            <br><br>

              
            <input type="password" class="password" name="password" placeholder="  password" required>

        

           <div>
            <button type=submit class="submit" name="submit">submit</button>
           </div>

           
        </form>
    </div>
    </center>
    </div>
</body>
</html>