<html>
   <style>
      body{
        background-image: linear-gradient(to right, #8360c3, #2ebf91);
      }
   </style>
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong">
   <body>
<?php
   if(isset($_GET['category'])){
    $grp=$_GET['category'];
    $con=mysqli_connect('localhost','root','','shop');
   $res=mysqli_query($con,"SELECT* from service where category='$grp'");
   echo "<br><br>";
   echo "<center><p style='color:white; font-family:sofia; font-size:45px'>".$grp." Information</p></center>";
   if($grp=='health'){
      // echo "<br><br>";  
      echo "<center><table style='border:6px solid black'>";
      echo "<tr style='background-color:yellow'><th style='padding:15px'>PET</th>";
      echo "<th style='padding:15px'>DAYS</th>";
      echo "<th style='padding:15px'>TIMINGS</th></tr>";
   }
   else{
      echo "<br><br><br><br>";  
      echo "<center><table style='border:6px solid black'>";
      echo "<tr style='background-color:yellow'><th style='padding:15px'>PET</th>";
      echo "<th style='padding:15px'>DURATION</th>";
      echo "<th style='padding:15px'>COST</th></tr>";
   }
   while($row=mysqli_fetch_row($res)){
      echo "<tr style='background-color:white'><td style='border:2px solid black; padding:15px'>".$row[0]."</td>";
      echo "<td style='border:2px solid black; padding:15px'>".$row[1]."</td>";
      echo "<td style='border:2px solid black; padding:15px'>".$row[2]."</td></tr>";
   }
   echo "</table></center>";
   mysqli_close($con);
}
   ?>
   </body>
   </html>