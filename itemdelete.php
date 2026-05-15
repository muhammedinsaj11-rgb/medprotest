<?php
include("connection.php");

$id = $_GET['id'];
if(!empty($id)) {
    mysqli_query($conn, "DELETE FROM newitem WHERE id='$id'");
}
?>


<?php 
error_reporting(0);

 $query = "SELECT * FROM newitem";
    $data = mysqli_query($conn, $query);
    $total=mysqli_num_rows($data);
    
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
                     <a href="item.php">Item Category</a>
                      <a href="newitem.php">Items</a>
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
        <div class="newget">
      <h1 class="h4">Item List</h1> <div class="btu"><button ><a href="newitem.php"> New Item</a></button>&nbsp; &nbsp;&nbsp;
      &nbsp;<button>Get Excel</button></div></div>
 <center>     
      <div class="box">
        <div class="boxuom">
            
            <input type="text" class="uom" id="display" placeholder=" Barcode">
            <div  class="save">
            <button onclick="display.value = ''">Clear</button>
            </div>
        </div>
      </div>

</div>
</center>
<br><br><br>


 <div class="container5">
   
      
      
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
<center>
          
<table border="3px">
<tr>
  <th>ID</th>
<th>ITEM CODE</th>
<th>UNIT</th>
<th>WSP</th>
<th>MIN.QTY</th>
<th>REMARKS</th>
<th>SUPLIERS</th>
<th>ITEM NAME</th>
<th>RSP</th>
<th>CATEGORY</th>
<th>REPRESENTATIVE</th>
<th>BARCODE</th>
<th>DATE</th>
 <th>ACTION</th>
 
</tr>
<style>
  table{width: 95%;
        margin-top:50px;
        text-align:center;
       border-color: rgba(0, 6, 88, 0.853);}

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

     
</style>
<center>
<?php

$sl = 1; // start serial number
if($data !=0){
while($result=mysqli_fetch_assoc($data))
    {
   echo 
    "
<tr>
<td>".$result['id']."</td>
  <td>".$result['item_code']."</td>
 <td>".$result['unit']."</td>
 <td>".$result['wsp']."</td>
 <td>".$result['minqty']."</td>
 <td>".$result['remarks']."</td>
 <td>".$result['suppliers']."</td>
 <td>".$result['item_name']."</td>

 <td>".$result['rsp']."</td>
 <td>".$result['category']."</td>
 <td>".$result['representative']."</td>
 <td>".$result['barcode']."</td>
 <td>".$result['date1']."</td>
  <td>
                    <a href='newitem.php?id=".$result['id']."' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='itemdelete.php?id=".$result['id']."' class='btn btn-danger btn-sm'
                       onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
                </td>
 
</tr> ";
    
    

    }
}
      ?>
 


</center>



     </table> 
     </center> 
     </div>    
</section>
    
   </body>     

   </html>