<?php
session_start();
$q12=$q13=$q14=$q15=$q16=$q17=$q18=$q19=$q20=$q21=$q22=0;
$tp=$tq=0;
$orderErr="";
$q12Err=$q13Err=$q14Err=$q15Err=$q16Err=$q17Err=$q18Err=$q19Err=$q20Err=$q21Err=$q22Err="";
$error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){
if (!empty($_POST['item12'])) {
  if(!empty($_POST['item12qty']))
  {
    if($_POST['item12qty']<1 || $_POST['item12qty']>10)
    {
      $q12Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q12=$_POST['item12qty'];
    $tp=$tp+($q12*$_SESSION['p12']);
    $tq=$tq+$q12;
    $_SESSION['qty12']+=$q12;
    $_SESSION['page2']=true;
  }
  }
  else
  {
    $q12Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item13'])) {
  if(!empty($_POST['item13qty']))
  {
    if($_POST['item13qty']<1 || $_POST['item13qty']>10)
    {
      $q13Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q13=$_POST['item13qty'];
    $tp=$tp+($q13*$_SESSION['p13']);
    $tq=$tq+$q13;
    $_SESSION['qty13']+=$q13;
    $_SESSION['page2']=true;
    }
  }
  else
  {
    $q13Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item14'])) {
  if(!empty($_POST['item14qty']))
  {if($_POST['item14qty']<1 || $_POST['item14qty']>10)
    {
      $q14Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q14=$_POST['item14qty'];
    $tp=$tp+($q14*$_SESSION['p14']);
    $tq=$tq+$q14;
    $_SESSION['qty14']+=$q14;
    $_SESSION['page2']=true;
  }
  }
  else
  {
    $q14Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item15'])) {
  if(!empty($_POST['item15qty']))
  {
    if($_POST['item15qty']<1 || $_POST['item15qty']>10)
    {
      $q15Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q15=$_POST['item15qty'];
    $tp=$tp+($q15*$_SESSION['p15']);
    $tq=$tq+$q15;
    $_SESSION['qty15']+=$q15;
    $_SESSION['page2']=true;
  }
  }
  else
  {
    $q15Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}
if (!empty($_POST['item16'])) {
  if(!empty($_POST['item16qty']))
  {
    if($_POST['item16qty']<1 || $_POST['item16qty']>10)
    {
      $q16Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q16=$_POST['item16qty'];
    $tp=$tp+($q16*$_SESSION['p16']);
    $tq=$tq+$q16;
    $_SESSION['qty16']+=$q16;
    $_SESSION['page2']=true;
  }
  }
  else
  {
    $q16Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item17'])) {
  if(!empty($_POST['item17qty']))
  {
    if($_POST['item17qty']<1 || $_POST['item17qty']>10)
    {
      $q17Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q17=$_POST['item17qty'];
    $tp=$tp+($q17*$_SESSION['p17']);
    $tq=$tq+$q17;
    $_SESSION['qty17']+=$q17;
    $_SESSION['page2']=true;
    }
  }
  else
  {
    $q17Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item18'])) {
  if(!empty($_POST['item18qty']))
  {if($_POST['item18qty']<1 || $_POST['item18qty']>10)
    {
      $q18Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q18=$_POST['item18qty'];
    $tp=$tp+($q18*$_SESSION['p18']);
    $tq=$tq+$q18;
    $_SESSION['qty18']+=$q18;
    $_SESSION['page2']=true;
  }
  }
  else
  {
    $q18Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item19'])) {
  if(!empty($_POST['item19qty']))
  {
    if($_POST['item19qty']<1 || $_POST['item19qty']>10)
    {
      $q19Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q19=$_POST['item19qty'];
    $tp=$tp+($q19*$_SESSION['p19']);
    $tq=$tq+$q19;
    $_SESSION['qty19']+=$q19;
    $_SESSION['page2']=true;
  }
  }
  else
  {
    $q19Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}
if (!empty($_POST['item20'])) {
  if(!empty($_POST['item20qty']))
  {
    if($_POST['item20qty']<1 || $_POST['item20qty']>10)
    {
      $q20Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q20=$_POST['item20qty'];
    $tp=$tp+($q20*$_SESSION['p20']);
    $tq=$tq+$q20;
    $_SESSION['qty20']+=$q20;
    $_SESSION['page2']=true;
  }
  }
  else
  {
    $q20Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item21'])) {
  if(!empty($_POST['item21qty']))
  {
    if($_POST['item21qty']<1 || $_POST['item21qty']>10)
    {
      $q21Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q21=$_POST['item21qty'];
    $tp=$tp+($q21*$_SESSION['p21']);
    $tq=$tq+$q21;
    $_SESSION['qty21']+=$q21;
    $_SESSION['page2']=true;
    }
  }
  else
  {
    $q21Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}

if (!empty($_POST['item22'])) {
  if(!empty($_POST['item22qty']))
  {if($_POST['item22qty']<1 || $_POST['item22qty']>10)
    {
      $q22Err="Enter Quantity Of Item Between 1 and 10";
      $error=true;
    }
    else
    {
    $q22=$_POST['item22qty'];
    $tp=$tp+($q22*$_SESSION['p22']);
    $tq=$tq+$q22;
    $_SESSION['qty22']+=$q22;
    $_SESSION['page2']=true;
  }
  }
  else
  {
    $q22Err="Enter Quantity Of Item Selected Before";
    $error=true;
  }
}


if($error==false)
{
    $_SESSION['totalq']=$_SESSION['totalq']+$tq;
    $_SESSION['totalp']=$_SESSION['totalp']+$tp;  

  if($_POST['action']=='Next Page')
  {
    header("location:pawcart2.php");
  }
  if($_POST['action']=='Previous Page')
 {
   header("location:pawcart.php");
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

        if(document.getElementById("item12").checked==true)
        {
          document.getElementById("item12qty").style.display="block";
        }
        else
        {
         document.getElementById("item12qty").style.display="none";
        }
        if(document.getElementById("item13").checked==true)
        {
          document.getElementById("item13qty").style.display="block";
        }
        else
        {
          document.getElementById("item13qty").style.display="none";
        }
        if(document.getElementById("item14").checked==true)
        {
          document.getElementById("item14qty").style.display="block";
        }
        else
        {
          document.getElementById("item14qty").style.display="none";
        }
        if(document.getElementById("item15").checked==true)
        {
          document.getElementById("item15qty").style.display="block";
        }
        else
        {
          document.getElementById("item15qty").style.display="none";
        }
        if(document.getElementById("item16").checked==true)
        {
          document.getElementById("item16qty").style.display="block";
        }
        else
        {
         document.getElementById("item16qty").style.display="none";
        }
        if(document.getElementById("item17").checked==true)
        {
          document.getElementById("item17qty").style.display="block";
        }
        else
        {
          document.getElementById("item17qty").style.display="none";
        }
        if(document.getElementById("item18").checked==true)
        {
          document.getElementById("item18qty").style.display="block";
        }
        else
        {
          document.getElementById("item18qty").style.display="none";
        }
        if(document.getElementById("item19").checked==true)
        {
          document.getElementById("item19qty").style.display="block";
        }
        else
        {
          document.getElementById("item19qty").style.display="none";
        }
        if(document.getElementById("item20").checked==true)
        {
          document.getElementById("item20qty").style.display="block";
        }
        else
        {
         document.getElementById("item20qty").style.display="none";
        }
        if(document.getElementById("item21").checked==true)
        {
          document.getElementById("item21qty").style.display="block";
        }
        else
        {
          document.getElementById("item21qty").style.display="none";
        }
        if(document.getElementById("item22").checked==true)
        {
          document.getElementById("item22qty").style.display="block";
        }
        else
        {
          document.getElementById("item22qty").style.display="none";
        }
        
      }

       function added()
      {
        if((document.getElementById("item12").checked==true && document.getElementById("item12qty").value!="" && document.getElementById("item12qty").value>=1 && document.getElementById("item12qty").value<=10)||(document.getElementById("item13").checked==true && document.getElementById("item13qty").value!="" && document.getElementById("item13qty").value>=1 && document.getElementById("item13qty").value<=10)||(document.getElementById("item14").checked==true && document.getElementById("item14qty").value!="" && document.getElementById("item14qty").value>=1 && document.getElementById("item14qty").value<=10)||(document.getElementById("item15").checked==true && document.getElementById("item15qty").value!="" && document.getElementById("item15qty").value>=1 && document.getElementById("item15qty").value<=10)||(document.getElementById("item16").checked==true && document.getElementById("item16qty").value!="" && document.getElementById("item16qty").value>=1 && document.getElementById("item16qty").value<=10)||(document.getElementById("item17").checked==true && document.getElementById("item17qty").value!="" && document.getElementById("item17qty").value>=1 && document.getElementById("item17qty").value<=10)||(document.getElementById("item18").checked==true && document.getElementById("item18qty").value!="" && document.getElementById("item18qty").value>=1 && document.getElementById("item18qty").value<=10)||(document.getElementById("item19").checked==true && document.getElementById("item19qty").value!="" && document.getElementById("item19qty").value>=1 && document.getElementById("item19qty").value<=10)||(document.getElementById("item20").checked==true && document.getElementById("item20qty").value!="" && document.getElementById("item20qty").value>=1 && document.getElementById("item20qty").value<=10)||(document.getElementById("item21").checked==true && document.getElementById("item21qty").value!="" && document.getElementById("item21qty").value>=1 && document.getElementById("item21qty").value<=10)||(document.getElementById("item22").checked==true && document.getElementById("item22qty").value!="" && document.getElementById("item22qty").value>=1 && document.getElementById("item22qty").value<=10))
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

   $in12=$in13=$in14=$in15=$in16=$in17=$in18=$in19=$in20=$in21=$in22="";
   $ic12=$ic13=$ic14=$ic15=$ic16=$ic17=$ic18=$ic19=$ic20=$ic21=$ic22="";
   $p12=$p13=$p14=$p15=$p16=$p17=$p18=$p19=$p20=$p21=$p22="";

    echo "<div class='past_orders' id='ppoi'><h1>Paw Cart</h1>";
    echo "<table border=5 cellspacing=10 cellpadding=7 bordercolor='lightblue' align='center' style='color: white;'>";
    echo "<tr><th>Item</th><th>Description</th><th>Price In Rs.</th><th>Tick The Checkbox And Enter The Quantity</th><th class='check'></th></tr>";

    $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1027;";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $result1=$stmt->execute();
    $row=$stmt->fetch();
    $in12=$row[1];
    $ic12=$row[3];
    $p12=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item12' style='display:none' id='item12'></td><td class='check'><input type='number' min='1' max='10' name='item12qty' id='item12qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
           echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item12' id='item12' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item12qty' id='item12qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q12Err."</span></td></tr></div>";
        }

    $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1028;";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in13=$row[1];
         $ic13=$row[3];
         $p13=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item13' style='display:none' id='item13'></td><td class='check'><input type='number' min='1' max='10' name='item13qty' id='item13qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item13' id='item13' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item13qty' id='item13qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q13Err."</span></td></tr></div>";
        }

        $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1030;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in14=$row[1];
         $ic14=$row[3];
         $p14=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
         echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item14' style='display:none' id='item14'></td><td class='check'><input type='number' min='1' max='10' name='item14qty' id='item14qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
           echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item14' id='item14' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item14qty' id='item14qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q14Err."</span></td></tr></div>";
        }

        $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1035;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in15=$row[1];
         $ic15=$row[3];
         $p15=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item15' style='display:none' id='item15'></td><td class='check'><input type='number' min='1' max='10' name='item15qty' id='item15qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item15' id='item15' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item15qty' id='item15qty' placeholder='Enter Quantity' style='display:none'>
                    <span class='error' style='background-color: red'>".$q15Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1037;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in16=$row[1];
         $ic16=$row[3];
         $p16=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
         echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item16' style='display:none' id='item16'></td><td class='check'><input type='number' min='1' max='10' name='item16qty' id='item16qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item16' id='item16' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item16qty' id='item16qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q16Err."</span></td></tr></div>";
        }
           
    }

     $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1038;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in17=$row[1];
         $ic17=$row[3];
         $p17=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item17' style='display:none' id='item17'></td><td class='check'><input type='number' min='1' max='10' name='item17qty' id='item17qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item17' id='item17' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item17qty' id='item17qty' placeholder='Enter Quantity' style='display:none;>
                    <span class='error' style='background-color: red'>".$q17Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1040;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in18=$row[1];
         $ic18=$row[3];
         $p18=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item18' style='display:none' id='item18'></td><td class='check'><input type='number' min='1' max='10' name='item18qty' id='item18qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item18' id='item18' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item18qty' id='item18qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q18Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1044;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in19=$row[1];
         $ic19=$row[3];
         $p19=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item19' style='display:none' id='item19'></td><td class='check'><input type='number' min='1' max='10' name='item19qty' id='item19qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item19' id='item19' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item19qty' id='item19qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q19Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1045;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in20=$row[1];
         $ic20=$row[3];
         $p20=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item20' style='display:none' id='item20'></td><td class='check'><input type='number' min='1' max='10' name='item20qty' id='item20qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item20' id='item20' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item20qty' id='item20qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q20Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1048;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in21=$row[1];
         $ic21=$row[3];
         $p21=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item21' style='display:none' id='item21'></td><td class='check'><input type='number' min='1' max='10' name='item21qty' id='item21qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item21' id='item21' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item21qty' id='item21qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q21Err."</span></td></tr></div>";
        }

         $sql="SELECT image,name,price,icode,stock FROM foodtoys WHERE icode=1050;";
        $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
       $result1=$stmt->execute();
        $row=$stmt->fetch();
         $in22=$row[1];
         $ic22=$row[3];
         $p22=$row[2];
        if($row[4]==0)
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img style='filter:grayscale(100%)' src='PawCart/$row[0]' height='150' width='150'>"."</td><td bgcolor='grey'>".$row[1]."</td><td bgcolor='grey'>".$row[2]."</td><td bgcolor='grey'><input type='checkbox' name='item22' style='display:none' id='item22'></td><td class='check'><input type='number' min='1' max='10' name='item22qty' id='item22qty' placeholder='Enter Quantity' style='display:none'></td></tr></div>";
        }
        else
        {
          echo "<div class='item'>";
          echo "<tr><td>";
          echo "<img src='PawCart/$row[0]' height='150' width='150'>"."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
           echo "<td><input type='checkbox' name='item22' id='item22' onclick='enablef();'></td>
                    <td class='check'><input type='number' min='1' max='10' name='item22qty' id='item22qty' placeholder='Enter Quantity' style='display:none;'>
                    <span class='error' style='background-color: red'>".$q22Err."</span></td></tr></div>";
        }
    echo "</table>";

    $_SESSION['item12']=$in12;          $_SESSION['item16']=$in16;         $_SESSION['item20']=$in20;
    $_SESSION['item13']=$in13;        $_SESSION['item17']=$in17;         $_SESSION['item21']=$in21;
    $_SESSION['item14']=$in14;           $_SESSION['item18']=$in18;         $_SESSION['item22']=$in22;
    $_SESSION['item15']=$in15;        $_SESSION['item19']=$in19;

    $_SESSION['ic12']=$ic12;          $_SESSION['ic16']=$ic16;         $_SESSION['ic20']=$ic20;
    $_SESSION['ic13']=$ic13;        $_SESSION['ic17']=$ic17;         $_SESSION['ic21']=$ic21;
    $_SESSION['ic14']=$ic14;           $_SESSION['ic18']=$ic18;         $_SESSION['ic22']=$ic22;
    $_SESSION['ic15']=$ic15;        $_SESSION['ic19']=$ic19;   

   $_SESSION['p12']=$p12;          $_SESSION['p16']=$p16;         $_SESSION['p20']=$p20;
    $_SESSION['p13']=$p13;        $_SESSION['p17']=$p17;         $_SESSION['p21']=$p21;
    $_SESSION['p14']=$p14;           $_SESSION['p18']=$p18;         $_SESSION['p22']=$p22;
    $_SESSION['p15']=$p15;        $_SESSION['p19']=$p19;
    

    
    $stmt->closeCursor();
            
            ?>
           <br><br>
            <input type="submit" name="action"  onclick="added();" class="backbtn" value="Previous Page">
            <input type="submit" name="action" class="orderbtn"  value="ORDER NOW">
            <input type="submit" name="action"  onclick="added();" class="nextbtn" value="Next Page">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
            <span class='error' style='background-color: red'><?php echo $orderErr ?></span>
            <br>
    </div>
  </form>
</body>
</html>