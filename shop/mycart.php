<html>
    <head>
        <style>
            input[type="text"]{
                background-color:purple;
                color:white;
                font-size:32px;
            }
            input[type="submit"]{
                background-color:green;
                color:white;
                font-size:20px;
            }

            </style>
    <body>
    <div>
        <center><h1><font color="white">MY CART</font></h1></center>
       <center><table>
      <tr style='background-color:yellow'><th style='padding:15px'>Product ID</th>
      <th style='padding:15px'>Product Name</th>
      <th style='padding:15px'>Cost</th>
      <th style='padding:15px'>Quantity</th></tr>
   <?php 
   session_start();
   $tot=0;
   $cartcount = count($_SESSION['cart']);
   if(isset($_SESSION['cart'])){
    for ($i=0; $i<count($_SESSION['cart']); $i++) 
    {
        $citem = $_SESSION['cart'][$i];
        $tot=$tot+(int)$citem['cost'];
    echo "<tr style='background-color:white'><td style='border:2px solid black; padding:15px'>".$citem['id']."</td>";
    echo "<td style='border:2px solid black; padding:15px'>".$citem['name']."</td>";
    echo "<td style='border:2px solid black; padding:15px'>".$citem['cost']."<input type='hidden' class='ipr' value='$citem[cost]'></td>";
   echo  "<td style='border:2px solid black; padding:15px'><input type='number' class='iq' value='$citem[Quantity]' min='1' max='10' onchange='subtot()'></td></tr>";
    }
   }
?>
</div>
<center><h2><font color="white">TOTAL: Rs.<input type="text" value='<?php echo "$tot"?>' id="tott"></font></h2></center>
<script>
    var pr=document.getElementsByClassName('ipr');
    var q=document.getElementsByClassName('iq');
    var to=0;
    function subtot(){
        for(i=0;i<pr.length;i++){
           to+=eval((pr[i].value)*(q[i].value));
        }
    document.getElementById('tott').value=to;
    }
</script><br>
</body>
</html> 

