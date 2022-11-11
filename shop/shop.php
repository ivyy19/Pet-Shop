<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location:../login/login.html");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="shop.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong">
        <script>
            function func1(a){
              document.getElementById(a).value="ADDED";
              document.getElementById(a).style.backgroundColor="#1fd655";   
            }
        </script>
    </head>
    <body>
        <marquee width="100%" direction="left" height="45px" bgcolor="#39FF14">
            <h3>Exciting offers and DISCOUNTS available now!!! Grab them fast..Valid till NOV 20</h3>
            </marquee>
        <h1 style="font-family:'Sofia'">Our PRODUCTS</h1>&nbsp &nbsp &nbsp
          <form action="shop.php" method="POST"><select name="animal">
            <option value="all">ALL</option>
            <option value="dog">DOGS</option>
            <option value="cat">CATS</option>
           <option value="bird">BIRDS</option>
           <option value="fish">FISH</option>
  </select>
<input type="submit" value='search' class='material-icons' name='sub'></form>
        
<?php
if(isset($_POST['sub'])){
   if(isset($_POST['animal'])){
        $sec=$_POST['animal'];
         $conn=mysqli_connect('localhost','root','','shop');
          if(!$conn){
          echo "not able to correct";
       die("connec failed: ".mysqli_connect_error());
}
if($sec=="all"){
    $res=mysqli_query($conn,"SELECT* from shopping");
}
else{
    $res=mysqli_query($conn,"SELECT* from shopping where category='$sec'");
}
 while($row=mysqli_fetch_assoc($res)){ 
    ?>
    <form action="cart.php" method="POST">
  <div class="div1">
   <center><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image'] ); ?>" /></center>
   <p><?php echo $row['name']?><br><b>Rs.<?php echo $row['cost']?></b><br>
   <input type="hidden" name="pid" value="<?=$row['S.No']?>">
   <input type="hidden" name="pname" value="<?=$row['name']?>">
   <input type="hidden" name="pcost" value="<?=$row['cost']?>">
   <input class="b1" type="submit" id=<?=$row['S.No']?> name="btn" value="add to CART" onclick="func1(id)"/></p>
 </form>
   </div>
   <?php
}
   }
  }
?>
    </body>
</html>
