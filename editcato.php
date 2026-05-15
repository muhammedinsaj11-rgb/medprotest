
<?php
include("connection.php");

$id = $_GET['id'];
if(!empty($id)) {
    mysqli_query($conn, "DELETE FROM uom2 WHERE id='$id'");
}
?>

<?php
error_reporting(0); // show errors while debugging

if (isset($_POST['sabtt'])) {
    $Category = $_POST['Category'];
    $tax      = $_POST['tax'];
    $statass  = $_POST['statass'];

    $query = "INSERT INTO uom2 (Category, tax, statass) VALUES ('$Category','$tax','$statass')";
    $data  = mysqli_query($conn, $query);

    if (!$data) {
     echo "Error inserting data ";
 
    }}

$query = "SELECT * FROM uom2";
$data  = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
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
      <h1 class="h4">Item Category Add/Edit</h1>
 <center>     
      <div class="box">
        <div class="boxuom">
          <form action="#" method="POST">
            
            <input type="text" class="uom" name="Category" placeholder=" Category Name">
            
            <select class="select" name="statass" id="">
              <option value="not selected" > &nbsp;--Select--</option>
              <option value="active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>

          <div  class="save">
             <input type="text" class="tax"  name="tax" placeholder=" Tax(%)" >&nbsp;&nbsp;
             <button type="submit" name="sabtt">Save</button>

             <style>
             
    
                      input{border-radius: 8px;
                       
                           }

                           .boxuom button{width: 170px;
                                          }


                  .boxuom .tax{width: 157px;
                         margin-top:7px;
                       height: 33px;}
             
        


             </style>
            </div>
        </div>
      </div>

</div>
</center>
<br><br><br>


 <div class="container5">
      <h1 class="h4">Item Category List</h1>
      
      
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

        .select{width: 250px;
            height: 45px;
             margin-top: 50px;
            border-radius: 15px;
            font-size: 18px;
            background-color:white;
            font-weight:bold;
            color:  rgba(4, 0, 79, 0.54);}

         

</style>

     
</style>
<center>
<table class="table">
  <tr>
    
  <th>SL.no</th>
  <th>CATEGORY NAME</th>
  <th>TAX</th>
   <th>STATUS</th>
   <th>ACTION</th>
  </tr>
  
          <?php
      
$sl = 1; // start serial number
if($data != 0) {
    while($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
                 <!-- continuous numbering -->
                
              <td>".$result['Category']."</td>
              <td>".$result['tax']."</td>
              <td>".$result['statass']."</td>
               <td>
                    <a href='editcato.php?id=".$result['id']."' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='deletecato.php?id=".$result['id']."' class='btn btn-danger btn-sm'
                       onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
                </td>
                </tr>";
   
}}
          
          
          ?>
     </table> 
     </form>
     </center> 
           
</section>
    
   </body>     

   </html>