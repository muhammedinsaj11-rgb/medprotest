<?php
include("connection.php");
error_reporting(0);

if(isset(($_POST['register'])))
    {
        $username   =$_POST['username'];
        $password   =$_POST['password'];

        $query ="SELECT * FROM form WHERE username ='$username'";
        $data =mysqli_query($conn,$query);
        $total =mysqli_num_rows($data);

        if($total > 0)
            {
                echo'<script>alert("data exist !")</script>';
            }
            else
            {
                 $query= "INSERT INTO form VALUE('$username','$password')";
                 $data =mysqli_query($conn,$query);

                header("location:login.php");
            }




}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDPRO</title>
</head>
<body>
    <div><h1>change user & password</h1></div>
    <div>
        <form action="#" method="POST">
           <div>
            <label for="username">username</label>
            <input type="text" class="username" name="username">
            
            <br><br>

             <label for="password">password</label>
            <input type="password" class="password" name="password">

           </div>
           <div>
            <button type=register class="register" name="register">register</button>
           </div>


        </form>
    </div>
</body>
</html>