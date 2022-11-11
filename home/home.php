<html>
    <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong">
    </head>
    <body>
      
<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  function chfunc(){
    document.getElementById("quer").value="Message successfully submitted!";
  }
  function logg(){
    var x=document.getElementById("2").innerHTML;
    if(x=="Logout"){
        // document.getElementById("2").innerHTML="Login"; 
        alert("successfully logged out!!");
    }
  }
  </script>
        <header>
          <nav>
          <ul>
            <li><IMG SRC="petlogo.png" height="70" width="300" class="center"></li>
            <li><a href="home.php"><i class="material-icons" style="font-size:28px;">home</i>Home</a></li>
            <li><a href="../about us/about.html" target="pg"> <i class="material-icons" style="font-size:28px;">description</i>About</a></li>
            <li><a href="../shop/shop.php" target="pg"><i class="material-icons" style="font-size:28px;">local_mall</i>Shop</a>
           <ul class="dropdown">
            <li>DOGS</li>
            <li>CATS</li>
            <li>BIRDS</li>
            <li>FISH</li>
           </ul>
            </li>
            <li><a href="../service/service.html" target="pg"><i class="material-icons" style="font-size:28px;">pets</i>Services</a>
              <ul class="dropdown">
                <li>BOARDING</li>
                <li>SPA</li>
                <li>EXERCISE</li>
                <li>HEALTH</li>
                <li>SPA</li>
               </ul></li>
            <li><a href="../contact/contact.html" target="pg"> <i class="material-icons" style="font-size:28px;">mail</i>ContactUs</a></li>
            <li style="float: right" target="pg"><a href="../shop/mycart.php" target="pg"><i class="material-icons" style="font-size:28px;">shopping_cart</i>Cart</a></li>
            <li style="float: right" target="pg"><a href="../login/login.html" target="pg" ><i class="material-icons" style="font-size:28px;">login</i>
          <span id="2" onclick="logg()"><?php 
          session_start();
          if(isset($_SESSION['email'])){
              echo "Logout";
          }
          else{
            echo "Login";
          }?>
          </span></a></li>
          </ul>
          </nav>
        </header>
        <main>
          <iframe src="./h1.html" name="pg" style="height:100%; width:100%; float:right; border:0" ></iframe>
          </main>
<button class="open-button" onclick="openForm()"><img src="dd1.png" height="150" width="150"></button>

<div class="chat-popup" id="myForm">
  <form action="" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>MESSAGE</b></label>
    <textarea placeholder="Type a message..." name="msg" id="quer" required></textarea>

    <button type="submit" class="btn1" onclick="chfunc()">Send</button>
    <button type="button" class="cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</body>
</html>