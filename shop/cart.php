<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['btn'])){
        if(isset($_SESSION['cart'])){
            $addeditems=array_column($_SESSION['cart'],'id');
            print_r($addeditems);
            if(in_array($_POST['pid'],$addeditems)){
                unset($_SESSION['cart']['id']);
                echo "<script>
                alert('Item already added');
                window.location.href='shop.php';
                </script>";
            }
            else{
             $count=count($_SESSION['cart']);
             $_SESSION['cart'][$count]=array('id'=>$_POST['pid'],'name'=>$_POST['pname'],'cost'=>$_POST['pcost'],'Quantity'=>1);
             echo "<script>
             alert('Item added successfully!!');
             window.location.href='shop.php';
             </script>";
            }
        }
        else{
            $_SESSION['cart']=array();
            $_SESSION['cart'][0]=array('id'=>$_POST['pid'],'name'=>$_POST['pname'],'cost'=>$_POST['pcost'],'Quantity'=>1);
            echo "<script>
            alert('Item added successfully!!');
            window.location.href='shop.php';
            </script>";
        }
    }
}
?>