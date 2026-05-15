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
            <label for="itemcode">Item Code</label>
            <input type="text" class="itemcode" id="itemcode" value=" 2">
            <br><br>
             <label for="Unit">Unit</label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name=""class="unit" id="Unit">
                <option value="">--Select--</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">5</option>
                <option value="">10</option>

            </select>
            <br>  <br>
             <label for="wsp">WSP</label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="wsp" id="WSP" value=" 0.000">
            <br>  <br>
             <label for="MinQty">Min.Qty</label>
             &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="MinQty" id="MinQty">
            <br>  <br>
              <label for="remarks" id="remarks">remarks</label>
              &nbsp;&nbsp;&nbsp;
            <textarea name="" class="remarks" id=""></textarea>
<br><br><br><br><br>
<div class="barcode">
    
    <input type="text" class="barcode" id="display" name="display" placeholder="Barcode">

  
    <button value="BR7925" onclick="display.value += 'BRCD7925'">Auotobarcode Genarerate</button>
</div>

           <br> 
            <div>

<button class="AddItem">Add Item</button>
</div>
        </div>

        
        

 <div class="line2">
                <label for="Supplier">Supplier</label>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name=""class="Supplier" id="Supplier">
                <option value=""> --Select--</option>
                <option value="">Bahrain</option>
                <option value="">quwait</option>
                <option value="">saudi</option>
                <option value="">india</option>

            </select>

            <br>  <br>

            <label for="itemcode">Item Name</label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            <input type="text" class="ItemName" id="ItemName">

            <br>  <br>
            
            <label for="rsp" >RSP</label>
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="rsp" id="rsp" value=" 0.000">
            
            <br>  <br>

             <label for="Category">Category</label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
            <select name=""class="Category" id="Category">
                <option value=""> --Select--</option>
                <option value="">tablets</option>
                <option value="">syrupe</option>
                <option value="">eye drops</option>
                <option value="">spray</option>

            </select>
            <br>  <br>
            
             <label for="Unit">Representative</label>
              &nbsp;
            <select name=""class="unit" id="Unit">
                <option value=""> --Select--</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">5</option>
                <option value="">10</option>

            </select>


<div class="expire1">
    <label for="expire">Expire Date</label>
    <input type="date" class="expire">
</div>

<br>

          <div>

<button class="Reset"   onclick="display.value = ''"> <a href="newitem.php"> Reset</a></button></div>
            
        </div>
       
    </div>

<div>


</div class="end">



          
            </div>