
<?php
include("connection.php");

$id = $_GET['id'];
if(!empty($id)) {
    mysqli_query($conn, "DELETE FROM uom WHERE id='$id'");
}
?>



<?php include("connection.php");

error_reporting(0);
 if(isset($_POST['sabu']))
{  $UOM1  =$_POST['UOM1'];
   $STATUS  =$_POST['statuss'];

 $query ="INSERT INTO uom(UOM1,STATUSS) VALUE('$UOM1','$STATUS')";
 $data= mysqli_query($conn,$query);
 if($conn)
  {echo "data inserted";}
 else
  {echo"not insert";}



}

$query = "SELECT * FROM uom";
$data =mysqli_query($conn,$query);
$total =mysqli_num_rows($data);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDPRO</title>
    <link rel="stylesheet" href="uom1.css">
</head>
<body>
    
       

        <header>
                     <div class="container3">
                        <br>
                        <a href="#" class="logo">MEDPRO</a>
                        <span>
                            
                     <div class="dropdown">
                     <button class="dropbtn">Master</button>
                     <div class="dropdown-content">
                     <a href="#home">Import / Export</a>
                     <a href="#services">Employees</a>
                     <a href="#contact">Representative</a>
                      <a href="#services">Customers</a>
                     <a href="#contact">Suppliers</a>
                      <a href="uom.php">UOM</a>
                     <a href="category.php">Item Category</a>
                      <a href="item.php">Items</a>
                     <a href="#contact">Insurance</a>
                      <a href="#services">Warehouse</a>
                     <a href="#contact">Bank</a>
                     </div>
                     </div>
                          
                            <a href="#" class="abc">Purchase</a>
                            <a href="#" class="abc">Sales Invoice</a>
                            <a href="#" class="abc">POS</a>
                            <a href="#" class="abc">Return POS</a>
                            <a href="#" class="abc">Reports</a>
                            <a href="#" class="abc">Settings</a>
                            <a href="#" class="abc">End Sale</a>
                            <a href="login.php" class="abc">logout</a>
                        </span>
                     </div>
              
        </header>
<section>


    <div class="container4">
      <h1 class="h4"> UOM Add/Edit</h1>
 <center>     
      <div class="box">
        <div class="boxuom">
          <form action="#" method="POST">
            
            <input type="text" class="uom" placeholder=" UOM" name="UOM1">

            <select name="statuss" id="">
              <option value="not selected" > &nbsp;--Select--</option>
              <option value="active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>

            <div  class="save">
            <button type="submit" name="sabu">Save</button>
            </div>
            </form>
        </div>
      </div>

</div>
</center>
<br><br><br>


 <div class="container5">
      <h1 class="h4"> UOM List</h1>
      
   





      <div class="show">
        <label for="showinpu">Show</label>
          <select name="" id="" class="showinpu">
            <option value="">25</option>
            <option value="">15</option>
            <option value="">5</option>
          </select>

          <label for="Search" class="search">Search</label>
               <input type="text" class="Searchs">
       
          </div>
<style>
table{width: 95%;
        margin-top:50px;
        text-align:center;
       border-color: rgba(0, 6, 88, 0.853);}

       .table{width: 75%;
       }
        .table td{
height:26px
       }

      th{ border-color: rgba(255, 255, 255, 0.85);
      border-top:none;
      color: rgba(0, 3, 43, 0.99);
      background-color: rgba(255, 255, 255, 0.76);
       
       height:30px; font-family:Verdana, Geneva, Tahoma, sans-serif;}
       
       td{ border-color: rgba(0, 6, 88, 0.853);
           background-color: rgba(121, 121, 184, 0.73);
           font-family:Verdana, Geneva, Tahoma, sans-serif;
           font-size:14px;
           
      
      }
 .uom{width: 250px;
            height: 40px;
             margin-top: 50px;
            border-radius: 15px;
            font-size: 18px;
            color:  rgb(4, 0, 79);
        }

        select{width: 250px;
            height: 45px;
             margin-top: 50px;
            border-radius: 15px;
            font-size: 18px;
            background-color:white;
            font-weight:bold;
            color:  rgba(4, 0, 79, 0.54);}

</style>
<center>

<table class="table">
  <tr>
    <th>SL.no</th>
    <th>UOM</th>
    <th>STATUS</th>
    <th>ACTION</th>
  </tr>
 <?php
$sl = 1; // start serial number
if($data != 0) {
    while($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
                <td>".$sl++."</td>   <!-- continuous numbering -->
                <td>".$result['UOM1']."</td>
                <td>".$result['STATUSS']."</td>
                <td>
                    <a href='edit.php?id=".$result['id']."' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='delete.php?id=".$result['id']."' class='btn btn-danger btn-sm'
                       onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
                </td>
              </tr>";
    }
}
?>

</table>
</center>     
</section>
    
   </body>     

   </html>
