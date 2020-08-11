<?php
session_start();
$q1=$q2=$q3=$q4=$q5=$q6=$q7=$q8=$q9=$q10=$q11=0;
$tp=$tq=0;
$orderErr="";
$q1Err=$q2Err=$q3Err=$q4Err=$q5Err=$q6Err=$q7Err=$q8Err=$q9Err=$q10Err=$q11Err="";
$error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){
if (!empty($_POST['item1'])) {
  if(!empty($_POST['item1qty']))
  {
    if($_POST['item1qty']<1 || $_POST['item1qty']>10)
    {
      $q1Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q1=$_POST['item1qty'];
    $tp=$tp+($q1*$_SESSION['p1']);
    $tq=$tq+$q1;
    $_SESSION['qty1']+=$q1;
    $_SESSION['page1']=true;
  }
  }
  else
  {
    $q1Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item2'])) {
  if(!empty($_POST['item2qty']))
  {
    if($_POST['item2qty']<1 || $_POST['item2qty']>10)
    {
      $q2Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q2=$_POST['item2qty'];
    $tp=$tp+($q2*$_SESSION['p2']);
    $tq=$tq+$q2;
    $_SESSION['qty2']+=$q2;
    $_SESSION['page1']=true;
    }
  }
  else
  {
    $q2Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item3'])) {
  if(!empty($_POST['item3qty']))
  {if($_POST['item3qty']<1 || $_POST['item3qty']>10)
    {
      $q3Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q3=$_POST['item3qty'];
    $tp=$tp+($q3*$_SESSION['p3']);
    $tq=$tq+$q3;
    $_SESSION['qty3']+=$q3;
    $_SESSION['page1']=true;
  }
  }
  else
  {
    $q3Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item4'])) {
  if(!empty($_POST['item4qty']))
  {
    if($_POST['item4qty']<1 || $_POST['item4qty']>10)
    {
      $q4Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q4=$_POST['item4qty'];
    $tp=$tp+($q4*$_SESSION['p4']);
    $tq=$tq+$q4;
    $_SESSION['qty4']+=$q4;
    $_SESSION['page1']=true;
  }
  }
  else
  {
    $q4Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}
if (!empty($_POST['item5'])) {
  if(!empty($_POST['item5qty']))
  {
    if($_POST['item5qty']<1 || $_POST['item5qty']>10)
    {
      $q5Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q5=$_POST['item5qty'];
    $tp=$tp+($q5*$_SESSION['p5']);
    $tq=$tq+$q5;
    $_SESSION['qty5']+=$q5;
    $_SESSION['page1']=true;
  }
  }
  else
  {
    $q5Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item6'])) {
  if(!empty($_POST['item6qty']))
  {
    if($_POST['item6qty']<1 || $_POST['item6qty']>10)
    {
      $q6Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q6=$_POST['item6qty'];
    $tp=$tp+($q6*$_SESSION['p6']);
    $tq=$tq+$q6;
    $_SESSION['qty6']+=$q6;
    $_SESSION['page1']=true;
    }
  }
  else
  {
    $q6Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item7'])) {
  if(!empty($_POST['item7qty']))
  {if($_POST['item7qty']<1 || $_POST['item7qty']>10)
    {
      $q7Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q7=$_POST['item7qty'];
    $tp=$tp+($q7*$_SESSION['p7']);
    $tq=$tq+$q7;
    $_SESSION['qty7']+=$q7;
    $_SESSION['page1']=true;
  }
  }
  else
  {
    $q7Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item8'])) {
  if(!empty($_POST['item8qty']))
  {
    if($_POST['item8qty']<1 || $_POST['item8qty']>10)
    {
      $q8Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q8=$_POST['item8qty'];
    $tp=$tp+($q8*$_SESSION['p8']);
    $tq=$tq+$q8;
    $_SESSION['qty8']+=$q8;
    $_SESSION['page1']=true;
  }
  }
  else
  {
    $q8Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}
if (!empty($_POST['item9'])) {
  if(!empty($_POST['item9qty']))
  {
    if($_POST['item9qty']<1 || $_POST['item9qty']>10)
    {
      $q9Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q9=$_POST['item9qty'];
    $tp=$tp+($q9*$_SESSION['p9']);
    $tq=$tq+$q9;
    $_SESSION['qty9']+=$q9;
    $_SESSION['page1']=true;
  }
  }
  else
  {
    $q9Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item10'])) {
  if(!empty($_POST['item10qty']))
  {
    if($_POST['item10qty']<1 || $_POST['item10qty']>10)
    {
      $q10Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q10=$_POST['item10qty'];
    $tp=$tp+($q10*$_SESSION['p10']);
    $tq=$tq+$q10;
    $_SESSION['qty10']+=$q10;
    $_SESSION['page1']=true;
    }
  }
  else
  {
    $q10Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item11'])) {
  if(!empty($_POST['item11qty']))
  {if($_POST['item11qty']<1 || $_POST['item11qty']>10)
    {
      $q11Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q11=$_POST['item11qty'];
    $tp=$tp+($q11*$_SESSION['p11']);
    $tq=$tq+$q11;
    $_SESSION['qty11']+=$q11;
    $_SESSION['page1']=true;
  }
  }
  else
  {
    $q11Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}


if($error==false)
{
    $_SESSION['totalq']=$_SESSION['totalq']+$tq;
    $_SESSION['totalp']=$_SESSION['totalp']+$tp;  
  if($_POST['action']=='Next Page')
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

        if(document.getElementById("item1").checked==true)
        {
          document.getElementById("item1qty").style.display="block";
        }
        else
        {
         document.getElementById("item1qty").style.display="none";
        }

        if(document.getElementById("item2").checked==true)
        {
          document.getElementById("item2qty").style.display="block";
        }
        else
        {
          document.getElementById("item2qty").style.display="none";
        }

        if(document.getElementById("item3").checked==true)
        {
          document.getElementById("item3qty").style.display="block";
        }
        else
        {
          document.getElementById("item3qty").style.display="none";
        }

        if(document.getElementById("item4").checked==true)
        {
          document.getElementById("item4qty").style.display="block";
        }
        else
        {
          document.getElementById("item4qty").style.display="none";
        }

        if(document.getElementById("item5").checked==true)
        {
          document.getElementById("item5qty").style.display="block";
        }
        else
        {
         document.getElementById("item5qty").style.display="none";
        }

        if(document.getElementById("item6").checked==true)
        {
          document.getElementById("item6qty").style.display="block";
        }
        else
        {
          document.getElementById("item6qty").style.display="none";
        }

        if(document.getElementById("item7").checked==true)
        {
          document.getElementById("item7qty").style.display="block";
        }
        else
        {
          document.getElementById("item7qty").style.display="none";
        }

        if(document.getElementById("item8").checked==true)
        {
          document.getElementById("item8qty").style.display="block";
        }
        else
        {
          document.getElementById("item8qty").style.display="none";
        }

        if(document.getElementById("item9").checked==true)
        {
          document.getElementById("item9qty").style.display="block";
        }
        else
        {
         document.getElementById("item9qty").style.display="none";
        }

        if(document.getElementById("item10").checked==true)
        {
          document.getElementById("item10qty").style.display="block";
        }
        else
        {
          document.getElementById("item10qty").style.display="none";
        }

        if(document.getElementById("item11").checked==true)
        {
          document.getElementById("item11qty").style.display="block";
        }
        else
        {
          document.getElementById("item11qty").style.display="none";
        }
        
      }

      function added()
      {
        if((document.getElementById("item1").checked==true && document.getElementById("item1qty").value!="" && document.getElementById("item1qty").value>=1 && document.getElementById("item1qty").value<=10)||(document.getElementById("item2").checked==true && document.getElementById("item2qty").value!="" && document.getElementById("item2qty").value>=1 && document.getElementById("item2qty").value<=10)||(document.getElementById("item3").checked==true && document.getElementById("item3qty").value!="" && document.getElementById("item3qty").value>=1 && document.getElementById("item3qty").value<=10)||(document.getElementById("item4").checked==true && document.getElementById("item4qty").value!="" && document.getElementById("item4qty").value>=1 && document.getElementById("item4qty").value<=10)||(document.getElementById("item5").checked==true && document.getElementById("item5qty").value!="" && document.getElementById("item5qty").value>=1 && document.getElementById("item5qty").value<=10)||(document.getElementById("item6").checked==true && document.getElementById("item6qty").value!="" && document.getElementById("item6qty").value>=1 && document.getElementById("item6qty").value<=10)||(document.getElementById("item7").checked==true && document.getElementById("item7qty").value!="" && document.getElementById("item7qty").value>=1 && document.getElementById("item7qty").value<=10)||(document.getElementById("item8").checked==true && document.getElementById("item8qty").value!="" && document.getElementById("item8qty").value>=1 && document.getElementById("item8qty").value<=10)||(document.getElementById("item9").checked==true && document.getElementById("item9qty").value!="" && document.getElementById("item9qty").value>=1 && document.getElementById("item9qty").value<=10)||(document.getElementById("item10").checked==true && document.getElementById("item10qty").value!="" && document.getElementById("item10qty").value>=1 && document.getElementById("item10qty").value<=10)||(document.getElementById("item11").checked==true && document.getElementById("item11qty").value!="" && document.getElementById("item11qty").value>=1 && document.getElementById("item11qty").value<=10))
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

   $in1=$in2=$in3=$in4=$in5=$in6=$in7=$in8=$in9=$in10=$in11="";
   $ic1=$ic2=$ic3=$ic4=$ic5=$ic6=$ic7=$ic8=$ic9=$ic10=$ic11="";
   $p1=$p2=$p3=$p4=$p5=$p6=$p7=$p8=$p9=$p10=$p11="";

    echo "<div class='past_orders' id='ppoi'><h1>Paw Cart</h1>";
    echo "<table border=5 cellspacing=10 cellpadding=7 bordercolor='lightblue' align='center' style='color: white;'>";
    echo "<tr><th>Item</th><th>Description</th><th>Price In Rs.</th><th>Tick The Checkbox And Enter The Quantity</th><th class='check'></th></tr>";

    $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1000;";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $result1=$stmt->execute();
    $row=$stmt->fetch();
    $in1=$row[1];
    $ic1=$row[3];
    $p1=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item1' style='display:none' id='item1' ></td><td class='check'><input type='number' min='1' max='10' name='item1qty' id='item1qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
           echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item1' id='item1' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item1qty' id='item1qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q1Err."</span></td></tr></div>";
        }

    $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1003;";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in2=$row[1];
         $ic2=$row[3];
         $p2=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item2' style='display:none' id='item2' ></td><td class='check'><input type='number' min='1' max='10' name='item2qty' id='item2qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item2' id='item2' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item2qty' id='item2qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q2Err."</span></td></tr></div>";
        }

        $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1005;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in3=$row[1];
         $ic3=$row[3];
         $p3=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
         echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item3' style='display:none' id='item3' ></td><td class='check'><input type='number' min='1' max='10' name='item3qty' id='item3qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
           echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item3' id='item3' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item3qty' id='item3qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q3Err."</span></td></tr></div>";
        }

        $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1006;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in4=$row[1];
         $ic4=$row[3];
         $p4=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item4' style='display:none' id='item4' ></td><td class='check'><input type='number' min='1' max='10' name='item4qty' id='item4qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item4' id='item4' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item4qty' id='item4qty' placeholder='Enter Quantity' style='display:none'>
                    <span class='error' style='background-color: red'>".$q4Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1007;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in5=$row[1];
         $ic5=$row[3];
         $p5=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
         echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item5' style='display:none' id='item5' ></td><td class='check'><input type='number' min='1' max='10' name='item5qty' id='item5qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item5' id='item5' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item5qty' id='item5qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q5Err."</span></td></tr></div>";
        }
           
    }

     $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1009;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in6=$row[1];
         $ic6=$row[3];
         $p6=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item6' style='display:none' id='item6' ></td><td class='check'><input type='number' min='1' max='10' name='item6qty' id='item6qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item6' id='item6' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item6qty' id='item6qty' placeholder='Enter Quantity' style='display:none;>
                    <span class='error' style='background-color: red'>".$q6Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1012;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in7=$row[1];
         $ic7=$row[3];
         $p7=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item7' style='display:none' id='item7' ></td><td class='check'><input type='number' min='1' max='10' name='item7qty' id='item7qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item7' id='item7' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item7qty' id='item7qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q7Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1015;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in8=$row[1];
         $ic8=$row[3];
         $p8=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item8' style='display:none' id='item8' ></td><td class='check'><input type='number' min='1' max='10' name='item8qty' id='item8qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item8' id='item8' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item8qty' id='item8qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q8Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1020;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in9=$row[1];
         $ic9=$row[3];
         $p9=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item9' style='display:none' id='item9' ></td><td class='check'><input type='number' min='1' max='10' name='item9qty' id='item9qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item9' id='item9' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item9qty' id='item9qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q9Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1022;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in10=$row[1];
         $ic10=$row[3];
         $p10=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item10' style='display:none' id='item10' ></td><td class='check'><input type='number' min='1' max='10' name='item10qty' id='item10qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item10' id='item10' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item10qty' id='item10qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q10Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1025;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in11=$row[1];
         $ic11=$row[3];
         $p11=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item11' style='display:none' id='item11' ></td><td class='check'><input type='number' min='1' max='10' name='item11qty' id='item11qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item11' id='item11' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item11qty' id='item11qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q11Err."</span></td></tr></div>";
        }
    echo "</table>";

    $_SESSION['item1']=$in1;          $_SESSION['item5']=$in5;         $_SESSION['item9']=$in9;
    $_SESSION['item2']=$in2;        $_SESSION['item6']=$in6;         $_SESSION['item10']=$in10;
    $_SESSION['item3']=$in3;           $_SESSION['item7']=$in7;         $_SESSION['item11']=$in11;
    $_SESSION['item4']=$in4;        $_SESSION['item8']=$in8;

    $_SESSION['ic1']=$ic1;         $_SESSION['ic2']=$ic2;       $_SESSION['ic3']=$ic3;         $_SESSION['ic4']=$ic4;
    $_SESSION['ic8']=$ic8;         $_SESSION['ic7']=$ic7;       $_SESSION['ic6']=$ic6;         $_SESSION['ic5']=$ic5;
    $_SESSION['ic9']=$ic9;         $_SESSION['ic10']=$ic10;       $_SESSION['ic11']=$ic11;     

    $_SESSION['p1']=$p1;         $_SESSION['p2']=$p2;       $_SESSION['p3']=$p3;         $_SESSION['p4']=$p4;
    $_SESSION['p8']=$p8;         $_SESSION['p7']=$p7;       $_SESSION['p6']=$p6;         $_SESSION['p5']=$p5;
    $_SESSION['p9']=$p9;         $_SESSION['p10']=$p10;       $_SESSION['p11']=$p11;     

    
    $stmt->closeCursor();
            
            ?>
           <br><br>
            <input type="submit" name="action"  class="orderbtn" style="margin-left:170px;" value="ORDER NOW">
            <input type="submit" name="action" value="Next Page" onclick="added();" class="nextbtn">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
            <span class='error' style='background-color: red'><?php echo $orderErr ?></span>
            <br>
    </div>
  </form>
</body>
</html>