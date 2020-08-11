<html>
<head>
    <title>Pets Available For Adoption</title>
    <link rel="icon" type="image/ico" href="paw.png">
    <link rel="stylesheet" href="orders.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
<br>
<br>
<div class="nav">
    <nav>
        <ul> <span>
  <li><a class="active" href="signin.php">Back To Home Page</a></li>
  <li><a href="signout.php" style="position:absolute; right:10px">Log Out</a></li>
   <li><a href="adoption.php" style="position:absolute; right:650px">Back To Adoption Page</a></li>
            </span>
</ul>
    </nav>
        </div>
<div class="past_orders" style="margin-top:1550px">
  <h1>Pets Available For Adoption</h1>
<?php
 session_start();
 if(empty($_SESSION["id"])){
  header("location:signin.php");
  exit;
}
  else{
    include "connect.php";
    $id=$_SESSION["id"];
    
    $sql="SELECT petid,image,name,type,breed,age,gender FROM avpets WHERE availadopt='Available'  and (type='Dog' or type='Puppy');";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $result1=$stmt->execute();
    
     echo "<h2>Puppies/Dogs For Adoption:</h2>";
    if($stmt->rowcount()==0)
    {
        echo "There Are No Puppies/Dogs Available To Adopt Right Now.<br>";
    }
    else
    {
         echo "<table border=5 cellspacing=10 cellpadding=7 bordercolor='lightblue' align='center' style='color: white;'>";
         echo "<tr><th>Pet ID</th><th>Pet Picture</th><th>Pet Name</th><th>Pet Type</th><th>Pet Breed</th><th>Pet Age</th><th>Pet Gender</th></tr>";

        while($row=$stmt->fetch())
        {
           echo "<tr><td>";
           echo $row[0]."</td><td>"."<img src='Adoption/$row[1]' height='150' width='150'>"."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6];
           echo "</td></tr>";
        }
    }
    echo "</table>";
    $stmt->closeCursor();

    $sql="SELECT petid,image,name,type,breed,age,gender FROM avpets WHERE availadopt='Available' and (type='Cat' or type='Kitten');";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $result1=$stmt->execute();
    
     echo "<h2>Cats/Kittens For Adoption:</h2>";
    if($stmt->rowcount()==0)
    {
        echo "There Are No Kittens/Cats Available To Adopt Right Now.<br>";
    }
    else
    {
         echo "<table border=5 cellspacing=10 cellpadding=7 bordercolor='lightblue' align='center' style='color: white;'>";
         echo "<tr><th>Pet ID</th><th>Pet Picture</th><th>Pet Name</th><th>Pet Type</th><th>Pet Breed</th><th>Pet Age</th><th>Pet Gender</th></tr>";

        while($row=$stmt->fetch())
        {
           echo "<tr><td>";
           echo $row[0]."</td><td>"."<img src='Adoption/$row[1]' height='150' width='150'>"."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6];
           echo "</td></tr>";
        }
    }
    echo "</table>";
    $stmt->closeCursor();

}

?>
</div>
</body>
</html>