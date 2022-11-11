<html>
    <head>
        <link rel="stylesheet" href="sign.css">
    </head>
<?php
if(isset($_POST['btn'])){
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$mobno=$_REQUEST['mobno'];
$email=$_REQUEST['email'];
$psw=$_REQUEST['psw'];
$psw1=$_REQUEST['psw1'];
$con1=mysqli_connect('localhost','root','','shop');
if($psw!=$psw1){
    echo '<script>alert("Passwords do not match!!")</script>';
    echo "<br><br><br><br><br><h1><font color='white'>Could not add create account!!</font></h1><br>";
    mysqli_close($con1);
  }
else{
    $sm="INSERT INTO users(fname,lname,mobile,email,passwords) 
         VALUES('$fname','$lname','$mobno','$email','$psw')";
         $res=mysqli_query($con1,$sm);
    if($res==true){
        echo "<br><br><br><br><br><h1><font color='white'>Account created successfully!!</font></h1>";
    }
    else{
        echo "<br><br><br><br><br><h1><font color='white'>Sorry could not create account :( !!</font></h1><br>";
    }
    mysqli_close($con1);
}
}
?>
</html>