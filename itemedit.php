
<?php
include("connection.php");

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM newitem WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['additem'])) {
    $item_code      = $_POST['item_code'];
    $unit           = $_POST['unit'];
    $wsp            = $_POST['wsp'];
    $min_qty        = $_POST['min_qty'];
    $remarks        = $_POST['remarks'];
    $suppliers      = $_POST['suppliers'];
    $item_name      = $_POST['item_name'];
    $rsp            = $_POST['rsp'];
    $category       = $_POST['category'];
    $representative = $_POST['representative'];
    $barcode        = $_POST['barcode'];
    $date           = $_POST['dates'];


    $query = "INSERT INTO newitem (item_code, unit, wsp, minqty, remarks, suppliers, item_name, rsp, category, representative, barcode, date1)
              VALUES ('$item_code','$unit','$wsp','$min_qty','$remarks','$suppliers','$item_name','$rsp','$category','$representative','$barcode','$date')";


    $stmt = $conn->prepare("UPDATE newitem 
        SET item_code=?, unit=?, wsp=?, minqty=?, remarks=?, suppliers=?, item_name=?, rsp=?, category=?, representative=?, barcode=?, date1=? 
        WHERE id=?");
    $stmt->bind_param("ssdsdssdssssi", $item_code, $unit, $wsp, $min_qty, $remarks, $suppliers, $item_name, $rsp, $category, $representative, $barcode, $date, $id);
    $stmt->execute();

    header("Location: item.php");
    exit;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newitem.css">
</head>
<body>


    
    
    <div class="container5">

    <div class="newitems">

       <h1 class="h5">New Item</h1>
       <div class="btu"><button ><a href="item.php">Item list</a></button></div>
    
     </div>

<center>

 <div class="box">
        <div class="boxuom">
            
             
<div class="ipucantainer">
    <div class="inpuut">
        <div class="line1">
            <form action="#" method="POST">
            <label for="itemcode">Item Code</label>
            <input type="text" class="itemcode" name="item_code" id="itemcode"  value="<?php echo $row['item_code']; ?>">
            <br><br>
             <label for="Unit">Unit</label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="unit" class="unit" value="<?php echo $row['unit']; ?>">
                <option value="not selected">--Select--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="5">5</option>
                <option value="10">10</option>

            </select>
            <br>  <br>
             <label for="wsp">WSP</label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="wsp" id="WSP" name="wsp"  value="<?php echo $row['wsp']; ?>">

            <br>  <br>
             <label for="MinQty">Min.Qty</label>
             &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="MinQty" name="min_qty" id="MinQty" value="<?php echo $row['minqty'];?>" >
            <br>  <br>
              <label for="remarks" id="remarks">remarks</label>
              &nbsp;&nbsp;&nbsp;
            <textarea name="remarks" class="remarks" id=""><?php echo $row['remarks']; ?></textarea>
<br><br><br><br><br>
<div class="barcode">
    
    <input type="text" class="barcode" name="display"  id="baar"  placeholder="Barcode" value="<?php echo $row['barcode']; ?>">
<!--id="display" name="display"-->
  
    <button type="button" onclick="document.getElementById('baar').value = 'BRCD' + Math.floor(Math.random()*10000)">Auotobarcode Genarerate</button><!--value="BR7925" onclick="display.value += 'BRCD7925'"-->
</div>

           <br> 
            <div>

<button  class="AddItem" name="additem" value="c" onclick="display.value += ''">Add Item</button>
</div>
        </div>


        
        

 <div class="line2">
                <label for="Supplier">Supplier</label>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="suppliers" class="Supplier" id="Supplier" value="<?php echo $row['suppliers']; ?>">
                <option value="not selected"> --Select--</option>
                <option value="Bahrain">Bahrain</option>
                <option value="quwait">quwait</option>
                <option value="saudi">saudi</option>
                <option value="india">india</option>

            </select>

            <br>  <br>

            <label for="itemcode">Item Name</label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            <input type="text" name="item_name" class="ItemName" id="ItemName" value="<?php echo $row['item_name']; ?>">

            <br>  <br>
            
            <label for="rsp" >RSP</label>
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="rsp" name="rsp" id="rsp" value="<?php echo $row['rsp']; ?>">
            
            <br>  <br>

             <label for="Category">Category</label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
            <select name="category" class="Category" id="Category" value="<?php echo $row['category']; ?>">
                <option value="not selected"> --Select--</option>
                <option value="tablets">tablets</option>
                <option value="syrupe">syrupe</option>
                <option value="eye drops">eye drops</option>
                <option value="spray">spray</option>

            </select>
            <br>  <br>
            
             <label for="Unit">Representative</label>
              &nbsp;
            <select name="representative" class="unit" id="Unit" value="<?php echo $row['representative']; ?>">
                <option value="not selected"> --Select--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="5">5</option>
                <option value="10">10</option>

            </select>


<div class="expire1">
    <label for="expire">Expire Date</label>
    <input type="date" class="expire" name="dates" value="<?php echo $row['date1']; ?>">
</div>

<br>

          <div>

<button type="sumbit" class="Reset"  onclick="display.value = ''"> <a href="reset.php"> Reset</a></button></div>
            
        </div>
       </form>
    </div>

<div>


</div class="end">



          
            </div>
    

</div>

<div > 
</div>
      </div>


    </center>
  
</div>
    </form>
</body>
</html>



