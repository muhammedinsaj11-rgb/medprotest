<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn,$query);
$total =mysqli_num_rows($data);
?>
<table border ="3">
    <tr>
        <th>username</th>
         <th>password</th>
    </tr>

<?php
if($total !=0)
      
    while($result =mysqli_fetch_assoc($data))
    {
          echo" <tr>
                     <td>".$result['username']."</td>
                     <td>".$result['password']."</td>
               </tr>";
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
    <h1>welcommmmmmeeeee</h1>
</body>
</table>
</html>




