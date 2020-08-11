<?php
 session_start();
 if(empty($_SESSION["name"])){
  header("location:index.php");
  exit;
}
  else{
  	include "connect.php";
	$name=htmlspecialchars($_SESSION["name"]);
  	$sql=$conn->prepare("SELECT uid FROM user WHERE name='$name' ");
  	$sql->execute();
  	$id= $sql->fetch(PDO::FETCH_NUM); 
    $_SESSION["id"]=$id[0];
  }

?>


<html>
<head>
<title>Sign In</title>
<link rel="stylesheet" href="signin.css">
<link rel="icon" type="image/ico" href="paw.png">
<script type="text/javascript">
  function removed()
  {
    alert("Account Removed Successfully....");
  }
  </script>
</head>
<body style="text-align:center">
	<br>
  <div class="signin">
  <h2 class="one">User Name: <?php echo htmlspecialchars($_SESSION["name"]); ?></h2>
  <h2 class="one">User ID: <?php echo $id[0]?></h2>
  <div class="user_info">
   <a href="signout.php">Click Here To Sign Out</a><br><br>
</div>
</div>

<!--<div class="remove">
<div class="user_info2">
    <br>
   <a href="remove.php" onclick="removed();">Click Here To Delete Your Account</a>
</div>
</div>-->

<div class="contact">
  <div class="user_info1">
    <br>
   <a href="contact.php">View Our Contact Details</a><br><br>
</div>
</div>
<div class="helpline">
    <br>
   <h2>Pet Pash HelpLine (Domestic Animals)</h2>
   <h3 class="no">12071177126</h3>
   <h2>Pet Pash HelpLine (Wildlife Animals)</h2>
   <h3 class="no">12071177127</h3>
   <br>
</div>
<div class="nav">
    <nav>
        
        <ul> <span>
  <li><a class="active" href="#vet">Issue Vet Appointment</a></li>
  <li><a href="#adopt">Adopt A Pet</a></li>
  <li><a href="#pawcart" style="position:absolute; right:220px">Paw Cart</a></li>
            <li><a href="#past" style="position:absolute; right:0px">Past Orders/Appointments</a></li></span>
</ul>
    </nav>
        </div>
        <div class="container">
        <h1 style="font-family: 'Permanent Marker', cursive;">Services We Offer</h1>
        <div class="vet" id="vet">
            <div class="vet_info">
                <h2>Veterinary Appointment</h2><ul>
                  <li>Our Online Vet Appointment Form is intended to help you schedule your pet’s appointment for routine veterinary care </li>
                <li>Annual/Triennial Vaccination</li>
                <li>General Grooming (Service At Your Doorstep)</li>
                <li>Dentistry</li>
                <li>Microchipping</li>
                <li>Reproductive Ultrasond Sonography</li>
                <li>X-Ray Services</li>
                <li>Surgery Services</li>
                <li>Emergencies</li>
                </ul></div>
            <a href="vet-appointment.php">Want to Issue A Vet Appoinment ? Click Here</a>
        </div>
       
        
           <div class="adopt" id="adopt">
               <h2>Adoption</h2>
               <div class="adopt_info"><ul>
                <li>Pets are such agreeable friends - they ask no questions; they pass no criticisms</li>
                   <li>We provide Adoption Facilities of all sorts of Pets Legal in Country</li>
                   <li>You are just One Step Away From Filling the Adoption Form</li>
                   <li>Pets can be adopted based on Availablity</li>
                   <li>Exotic animals can be also be made available</li>
                   <li>Adopt A Pet and Open Up Happiness</li>
                   </ul></div>
            <a href="adoption.php">Want to Adopt A Pet ? Click Here</a>
        </div>
       
        
           <div class="pawcart" id="pawcart">
            <div class="pawcart_info">
               <h2>Paw Cart</h2>
               <ul>
                <li>Buy Food And Treats For Your Poochies</li>
                <li>Fast Shipping</li>
                <li>COD</li>
                <li>Best Prices</li>
                <li>Home Delivery</li>
              </ul></div>
    
            <a href="pawini.php">Checkout Paw Cart ? Click Here</a>
        </div>
        
           <div class="past" id="past">
                
            <a href="orders.php">To View Previous Orders/Appointments Click Here</a>
        </div></div>
       <div>
     <!--<img src="dogs_are_like_potato_chips_wooden_sign.jpg" height="290" width="200" style="position:absolute; left:px; top:400px; bottom:10px; right: 22px">  </div> -->

        
   <script>     $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});</script>
    </body>
</html>