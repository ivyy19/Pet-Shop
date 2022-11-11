<html>
    <head>
        <style>
            body{
                background-image:linear-gradient(purple,white);
            }
        </style>
    </head>
    <body>
        <?php 
        session_start();
        if(isset($_POST['btn'])){
           $user=$_POST['usr'];
           $psww=$_POST['psw'];
           $con2=mysqli_connect('localhost','root','','shop');
           $res=mysqli_query($con2,"SELECT* from users where email='$user' and passwords='$psww'");
           if(mysqli_num_rows($res)>0){
            echo "<h1><font color='white'> Logged In Successfully!!!!</font></h1>";
            header("Location:../home/h1.html");
            $_SESSION['email']=$user;
            
           }
           else{
            echo "<h1><font color='white'> Invalid Credentials :(</font></h1>";
           }
        }
?>