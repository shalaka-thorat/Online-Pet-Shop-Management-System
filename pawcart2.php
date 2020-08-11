<?php
session_start();
$q23=$q24=$q25=0;
$tp=$tq=0;
$orderErr="";
$q23Err=$q24Err=$q25Err="";
$error=false;



if($_SERVER["REQUEST_METHOD"]=="POST"){
if (!empty($_POST['item23'])) {
  if(!empty($_POST['item23qty']))
  {
    if($_POST['item23qty']<1 || $_POST['item23qty']>10)
    {
      $q23Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q23=$_POST['item23qty'];
    $tp=$tp+($q23*$_SESSION['p23']);
    $tq=$tq+$q23;
    $_SESSION['qty23']+=$q23;
    $_SESSION['page3']=true;
  }
  }
  else
  {
    $q23Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item24'])) {
  if(!empty($_POST['item24qty']))
  {
    if($_POST['item24qty']<1 || $_POST['item24qty']>10)
    {
      $q24Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q24=$_POST['item24qty'];
    $tp=$tp+($q24*$_SESSION['p24']);
    $tq=$tq+$q24;
    $_SESSION['qty24']+=$q24;
    $_SESSION['page3']=true;
    }
  }
  else
  {
    $q24Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item25'])) {
  if(!empty($_POST['item25qty']))
  {if($_POST['item25qty']<1 || $_POST['item25qty']>10)
    {
      $q25Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q25=$_POST['item25qty'];
    $tp=$tp+($q25*$_SESSION['p25']);
    $tq=$tq+$q25; 
    $_SESSION['qty25']+=$q25;  
    $_SESSION['page3']=true;
  }
  }
  else
  {
    $q25Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if($error==false)
{         
    $_SESSION['totalq']=$_SESSION['totalq']+$tq;
    $_SESSION['totalp']=$_SESSION['totalp']+$tp;   
 if($_POST['action']=='Previous Page')
 {
   header("location:pawcart1.php");
 }
}

}


if($_SERVER["REQUEST_METHOD"]=="POST"  && $_POST['action']=='ORDER NOW'){

if($error==false)
{
    if($_SESSION['page1']==true || $_SESSION['page2']==true ||  $_SESSION['page3']==true)
    {
      header("location:confirmorder.php");
    }
    else
    {
      $orderErr='Please Select Atleast 1 Item To Place The Order.... ';
    }
  }
}


?>
<!DOCTYPE html>
 
<html lang="en" dir="ltr">
 
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="orders.css">
    <link rel="icon" type="image/ico" href="paw.png">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Paw Cart Catalogue</title>
    <script type="text/javascript">
      function enablef()
      {

        if(document.getElementById("item23").checked==true)
        {
          document.getElementById("item23qty").style.display="block";
        }
        else
        {
         document.getElementById("item23qty").style.display="none";
        }
        if(document.getElementById("item24").checked==true)
        {
          document.getElementById("item24qty").style.display="block";
        }
        else
        {
          document.getElementById("item24qty").style.display="none";
        }
        if(document.getElementById("item25").checked==true)
        {
          document.getElementById("item25qty").style.display="block";
        }
        else
        {
          document.getElementById("item25qty").style.display="none";
        }
        
      }

       function added()
      {
        if((document.getElementById("item23").checked==true && document.getElementById("item23qty").value!="" && document.getElementById("item23qty").value>=1 && document.getElementById("item23qty").value<=10)||(document.getElementById("item24").checked==true && document.getElementById("item24qty").value!="" && document.getElementById("item24qty").value>=1 && document.getElementById("item24qty").value<=10)||(document.getElementById("item25").checked==true && document.getElementById("item25qty").value!="" && document.getElementById("item25qty").value>=1 && document.getElementById("item25qty").value<=10))
        {
          alert("The Item/s You Have Selected Have Been Added To Your Order Cart....");
        }
      }


    </script>
</head>
 
<body> 
    <div class="nav">
    <nav>
        
        <ul> <span>
  <li><a class="active" href="signin.php">Back To Home Page</a></li>
  <li><a href="signout.php" style="position:absolute; right:10px">Log Out</a></li>
            </span>
</ul>
    </nav>
        </div>
<form name="placeorder" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
   <?php
 if(empty($_SESSION["id"])){
  header("location:signin.php");
  exit;
}
  else{
    include "connect.php";
   $id=$_SESSION["id"];

   $in23=$in24=$in25="";
   $ic23=$ic24=$ic25="";
   $p23=$p24=$p25="";

    echo "<div class='past_orders' style='margin-top:380px' id='ppoi'><h1>Paw Cart</h1>";
    echo "<table border=5 cellspacing=10 cellpadding=7 bordercolor='lightblue' align='center' style='color: white;'>";
    echo "<tr><th>Item</th><th>Description</th><th>Price In Rs.</th><th>Tick The Checkbox And Enter The Quantity</th><th class='check'></th></tr>";

    $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1052;";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $result1=$stmt->execute();
    $row=$stmt->fetch();
    $in23=$row[1];
    $ic23=$row[3];
    $p23=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item23' style='display:none' id='item23'></td><td class='check'><input type='number' min='1' max='10' name='item23qty' id='item23qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
           echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item23' id='item23' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item23qty' id='item23qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q23Err."</span></td></tr></div>";
        }

    $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1055;";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in24=$row[1];
         $ic24=$row[3];
         $p24=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item24' style='display:none' id='item24'></td><td class='check'><input type='number' min='1' max='10' name='item24qty' id='item24qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item24' id='item24' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item24qty' id='item24qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q24Err."</span></td></tr></div>";
        }

        $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1057;";
       $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in25=$row[1];
         $ic25=$row[3];
         $p25=$row[2];
         $stmt->closeCursor();
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
         echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item25' style='display:none' id='item25'></td><td class='check'><input type='number' min='1' max='10' name='item25qty' id='item25qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
           echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item25' id='item25' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item25qty' id='item25qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q25Err."</span></td></tr></div>";
        }

            
    echo "</table>";

    $_SESSION['item23']=$in23;          $_SESSION['item24']=$in24;         $_SESSION['item25']=$in25;

    $_SESSION['ic23']=$ic23;          $_SESSION['ic24']=$ic24;         $_SESSION['ic25']=$ic25;

   $_SESSION['p23']=$p23;          $_SESSION['p24']=$p24;         $_SESSION['p25']=$p25;
            
            }

            ?>
           <br><br>
            <input type="submit" name="action" onclick="added();" class="backbtn"  value="Previous Page">
            <input type="submit" name="action" class="orderbtn" style="margin-right:100px" value="ORDER NOW"><br><br>
            <span class='error' style='background-color: red'><?php echo $orderErr ?></span>
            <br>
    </div>
  </form>
</body>
</html>