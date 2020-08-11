<html>
<head>
    <title>Orders</title>
    <link rel="stylesheet" href="orders.css">
    <link rel="icon" type="image/ico" href="paw.png">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Past Orders</title>
</head>
<body>
<br>
<br>
<div class="nav">
    <nav>
        <ul> <span>
  <li><a class="active" href="signin.php">Back To Home Page</a></li>
  <li><a href="signout.php" style="position:absolute; right:10px">Log Out</a></li>
            </span>
</ul>
    </nav>
        </div>
<div class="past_orders" style="margin-top: 300px">
  <h1>Past Orders</h1>
<?php
 session_start();
 if(empty($_SESSION["id"])){
  header("location:signin.php");
  exit;
}
  else{
    include "connect.php"; 
    $id=$_SESSION["id"];
    
    $sql="SELECT petname,pettype,petagem,datetime,reason FROM appointment WHERE uid='$id' ";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $result1=$stmt->execute();
    
     echo "<h2>Your Vet Appointments:</h2>";
    if($stmt->rowcount()==0)
    {
        echo "There Are No Past Appointments"."<br>";
    }
    else
    {
         echo "<table border=5 cellspacing=10 cellpadding=7 bordercolor='lightgreen' align='center' style='color: white;'>";
         echo "<tr><th>Pet Name</th><th>Pet Type</th><th>Pet Age (In Months)</th><th>Time Stamp</th><th>Reason</th></tr>";

        while($row=$stmt->fetch())
        {
           echo "<tr><td>";
           echo $row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4];
           echo "</td></tr>";
        }
    }
    echo "</table>";
    $stmt->closeCursor();

    $sql="SELECT orderno,orderdate,totalprice,totalqty FROM orders WHERE uid='$id' ";
    $stmt1=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $result1=$stmt1->execute();
    
    echo "<h2>Your Orders on Paw Cart:</h2>";

    if($stmt1->rowcount()==0)
    {
        echo "There Are No Past Orders"."<br>";
    }
    else
    {
        echo "<table border=5 cellspacing=10 cellpadding=7 bordercolor='lightgreen' align='center' style='color: white;'>";
        echo "<tr><th>Order No</th><th>Order Date</th><th>Total Price</th><th>Total Quantity</th></tr>";
        while($row1=$stmt1->fetch())
        {
            echo "<tr><td>";
           echo $row1[0]."</td><td>".$row1[1]."</td><td>".$row1[2]."</td><td>".$row1[3];
           echo "</td></tr>";
        }
    }
    echo "</table>";
    $stmt1->closeCursor();

    $sql="SELECT petid,datetime FROM adopt WHERE uid='$id' ";
    $stmt2=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $result1=$stmt2->execute();
    echo "<h2>Pets Adopted From Pet Pash:</h2>";
    if($stmt2->rowcount()==0)
    {
        echo "There Are No Past Adoptions"."<br>";
    }
    else
    {
        echo "<table border=5 cellspacing=10 cellpadding=7 bordercolor='lightgreen' align='center' style='color: white;'>";
        echo "<tr><th>Pet ID</th><th>Pet Name</th><th>Pet Type</th><th>Pet Breed</th><th>Pet Age (In Yrs)</th><th>Time Stamp Of Adoption</th></tr>";
        while($row2=$stmt2->fetch())
        {
           if($row2[0]==NULL)
           {
            echo "<tr><td colspan='5'>";
            echo "PetID Not Specified During Form Filling, Application Is In Process</td><td>".$row2[1];
            echo "</td></tr>";
           }
           else
           {
            $sql="SELECT name,type,breed,age FROM avpets  WHERE  petid='$row2[0]' ";
           $stmt3=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
           $result1=$stmt3->execute();
           $row3=$stmt3->fetch();
            echo "<tr><td>";
           echo $row2[0]."</td><td>".$row3[0]."</td><td>".$row3[1]."</td><td>".$row3[2]."</td><td>".$row3[3]."</td><td>".$row2[1];
           echo "</td></tr>";
           }
        }
    }
    echo "</table>";
    $stmt2->closeCursor();

}

?>
</div>
</body>
</html>