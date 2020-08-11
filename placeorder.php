<?php
session_start();
 if(empty($_SESSION["name"])){
  header("location:index.php");
  exit;
}
  else{
    include "connect.php";
    $id= $_SESSION["id"];

    $in1=$in=$in3=$in4=$in5=$in6=$in7=$in8=$in9=$in10="";
    $q1=$q2=$q3=$q4=$q5=$q6=$q7=$q8=$q9=$q10="";
    $in1Err=$in2Err=$in3Err=$in4Err=$in5Err=$in6Err=$in7Err=$in8Err=$in9Err=$in10Err="";
    $q1Err=$q2Err=$q3Err=$q4Err=$q5Err=$q6Err=$q7Err=$q8Err=$q9Err=$q10Err="";
    $stock1=$stock2=$stock3=$stock4=$stock5=$stock6=$stock7=$stock8=$stock9=$stock10="";
     $error=0;
     $tp=0;

if($_SERVER["REQUEST_METHOD"]=="POST"){
if (!empty($_POST['item1'])) {
      $in1=$_POST['item1'];
      if (!empty($_POST['qty1'])) {
        $q1=$_POST['qty1'];
        if($q1<1)
        {
            $q1Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
        $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in1';");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in1Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
           if($row[1]==0)
           {
            $q1Err="This Item Is Currently Unavailable";
            $error=1;
           }
           else if($row[1]<$q1)
            {
            $q1Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q1);
           }
       }
       }
    }
  }
    else
    {
        $q1Err="Enter Quantity of Item";
        $error=1;
    }
}
if (!empty($_POST['item2'])) {
      $in2=$_POST['item2'];
if (!empty($_POST['qty2'])) {
      $q2=$_POST['qty2'];
      if($q2<1)
        {
            $q2Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
      $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in2';");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in2Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
           if($row[1]==0)
           {
            $q2Err="This Item Is Currently Unavailable";
            $error=1;
           }
           else if($row[1]<$q2)
            {
            $q2Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q2);
           }
       }
       }
  }
}
  else
    {
        $q2Err="Enter Quantity of Item";
        $error=1;
    }

}
if (!empty($_POST['item3'])) {
      $in3=$_POST['item3'];
      if (!empty($_POST['qty3'])) {
      $q3=$_POST['qty3'];
      if($q3<1)
        {
            $q3Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
      $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in3';");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in3Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
            if($row[1]==0)
           {
            $q3Err="This Item Is Currently Unavailable";
            $error=1;
           }
           else if($row[1]<$q3)
            {
            $q3Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q3);
           }
       }
       }
       }
  }
  else
    {
        $q3Err="Enter Quantity of Item";
        $error=1;
    }
}
if (!empty($_POST['item4'])) {
      $in1=$_POST['item4'];
      if (!empty($_POST['qty4'])) {
      $q4=$_POST['qty4'];
      if($q4<1)
        {
            $q4Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
      $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in4;");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in4Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
            if($row[1]==0)
           {
            $q4Err="This Item Is Currently Unavailable";
            $error=1;
           }
           else if($row[1]<$q4)
            {
            $q4Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q4);
           }
       }
       }
   }
  }
  else
    {
        $q4Err="Enter Quantity of Item";
        $error=1;
    }
}
if (!empty($_POST['item5'])) {
      $in5=$_POST['item5'];
      if (!empty($_POST['qty5'])) {
      $q5=$_POST['qty5'];
      if($q5<1)
        {
            $q5Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
      $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in5';");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in5Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
            if($row[1]==0)
           {
            $q5Err="This Item Is Currently Unavailable";
            $error=1;
           }
            else if($row[1]<$q5)
            {
            $q5Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q5);
           }
       }
       }
       }
  }
  else
    {
        $q5Err="Enter Quantity of Item";
        $error=1;
    }
}
if (!empty($_POST['item6'])) {
      $in6=$_POST['item6'];
      if (!empty($_POST['qty6'])) {
      $q6=$_POST['qty6'];
      if($q6<1)
        {
            $q6Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
      $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in6';");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in6Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
            if($row[1]==0)
           {
            $q6Err="This Item Is Currently Unavailable";
            $error=1;
           }
            else if($row[1]<$q6)
            {
            $q6Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q6);
           }
       }
       }
       }
  }
  else
    {
        $q6Err="Enter Quantity of Item";
        $error=1;
    }
}
if (!empty($_POST['item7'])) {
      $in7=$_POST['item7'];
      if (!empty($_POST['qty7'])) {
      $q7=$_POST['qty7'];
      if($q7<1)
        {
            $q7Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
      $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in7';");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in7Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
            if($row[1]==0)
           {
            $q7Err="This Item Is Currently Unavailable";
            $error=1;
           }
            else if($row[1]<$q7)
            {
            $q7Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q7);
           }
       }
       }
   }
  }
  else
    {
        $q7Err="Enter Quantity of Item";
        $error=1;
    }
}
if (!empty($_POST['item8'])) {
      $in8=$_POST['item8'];
      if (!empty($_POST['qty8'])) {
      $q8=$_POST['qty8'];
      if($q8<1)
        {
            $q8Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
      $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in8';");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in8Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
           if($row[1]==0)
           {
            $q8Err="This Item Is Currently Unavailable";
            $error=1;
           }
           else if($row[1]<$q8)
            {
            $q8Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q8);
           }
       }
       }
       }
  }
  else
    {
        $q8Err="Enter Quantity of Item";
        $error=1;
    }
}
if (!empty($_POST['item9'])) {
      $in9=$_POST['item9'];
      if (!empty($_POST['qty9'])) {
      $q9=$_POST['qty9'];
      if($q9<1)
        {
            $q9Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
      $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in9';");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in9Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
          if($row[1]==0)
           {
            $q9Err="This Item Is Currently Unavailable";
            $error=1;
           }
           else if($row[1]<$q9)
            {
            $q9Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q9);
           }
       }
       }
   }
  }
  else
    {
        $q9Err="Enter Quantity of Item";
        $error=1;
    }
}
if (!empty($_POST['item10'])) {
      $in10=$_POST['item10'];
      if (!empty($_POST['qty10'])) {
      $q10=$_POST['qty10'];
      if($q10<1)
        {
            $q10Err="Enter Valid Quantity";
            $error=1;
        }
        else
        {
      $stmt=$conn->query("SELECT price,stock FROM foodtoys WHERE icode = '$in10';");
        if($stmt->execute()){
           if($stmt->rowcount()==0){
            $in10Err="Wrong Item Code";
            $error=1;
           }
           else
           {
            $row=$stmt->fetch();
            if($row[1]==0)
           {
            $q10Err="This Item Is Currently Unavailable";
            $error=1;
           }
            else if($row[1]<$q10)
            {
            $q10Err="Available Stock: "."$row[1]";
            $error=1;
           }
           else
           {
            $tp=$tp+($row[0]*$q10);
           }
       }
       }
   }
  }
  else
    {
        $q10Err="Enter Quantity of Item";
        $error=1;
    }
}

    if($error==0)
    {
        $_SESSION['in1']=$in1;     $_SESSION['in2']=$in2;        $_SESSION['in3']=$in3;         $_SESSION['in4']=$in4;      
        $_SESSION['q1']=$q1;        $_SESSION['q2']=$q2;          $_SESSION['q3']=$q3;           $_SESSION['q4']=$q4;
        
        $_SESSION['in8']=$in8;     $_SESSION['in7']=$in7;         $_SESSION['in6']=$in6;         $_SESSION['in5']=$in5;
        $_SESSION['q8']=$q8;       $_SESSION['q7']=$q7;          $_SESSION['q6']=$q6;           $_SESSION['q5']=$q5;

       $_SESSION['in9']=$in9;     $_SESSION['in10']=$in10;      
        $_SESSION['q9']=$q9;       $_SESSION['q10']=$q10;  

        $_SESSION['tp']=$tp;     
        $_SESSION['tq']=$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10;
        header("location:confirmorder.php");
    }
 }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="orders.css">
    <link rel="icon" type="image/ico" href="paw.png">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Place Order</title>
</head>
 
<body> 
    <div class="nav">
    <nav>
        
        <ul> <span>
  <li><a class="active" href="signin.php">Back To Home Page</a></li>
  <li><a href="signout.php" style="position:absolute; right:10px">Log Out</a></li>
  <li><a href="pawcart.php" style="position:absolute; right:650px">Back To PawCart</a></li>
            </span>
</ul>
    </nav>
        </div>
    <div class="past_orders" id="placeo" style="margin-top:520px">
        <form name="placeorder" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <h1>Place Your Order</h1>
            <div class="item">
                <table align="right" style="width:100%;" cellspacing="15" cellpadding="5">
                  <tr>
                    <th>Sr.No</th>
                    <th>Item Code</th>
                    <th>Quantity</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><input type="text" name="item1" size="40" placeholder="Enter Item Code" required></td>
                    <td><input type="text" name="qty1"  size="40" placeholder="Enter Quantity" required></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in1Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q1Err ?></span></td>
                </tr>
                  <tr>
                    <td>2</td>
                    <td><input type="text" name="item2" size="40" placeholder="Enter Item Code"></td>
                    <td><input type="text" name="qty2" size="40" placeholder="Enter Quantity"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in2Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q2Err ?></span></td>
                </tr>
                  <tr>
                    <td>3</td>
                    <td><input type="text" name="item3" size="40" placeholder="Enter Item Code"></td>
                    <td><input type="text" name="qty3" size="40" placeholder="Enter Quantity"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in3Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q3Err ?></span></td>
                </tr>
                  <tr>
                    <td>4</td>
                    <td><input type="text" name="item4" size="40" placeholder="Enter Item Code"></td>
                    <td><input type="text" name="qty4" size="40" placeholder="Enter Quantity"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in4Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q4Err ?></span></td>
                </tr>
                  <tr>
                    <td>5</td>
                    <td><input type="text" name="item5" size="40" placeholder="Enter Item Code"></td>
                    <td><input type="text" name="qty5" size="40" placeholder="Enter Quantity"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in5Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q5Err ?></span></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><input type="text" name="item6" size="40" placeholder="Enter Item Code"></td>
                    <td><input type="text" name="qty6" size="40" placeholder="Enter Quantity"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in6Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q6Err ?></span></td>
                </tr>
                  <tr>
                    <td>7</td>
                    <td><input type="text" name="item7" size="40" placeholder="Enter Item Code"></td>
                    <td><input type="text" name="qty7" size="40" placeholder="Enter Quantity"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in7Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q7Err ?></span></td>
                </tr>
                  <tr>
                    <td>8</td>
                    <td><input type="text" name="item8" size="40" placeholder="Enter Item Code"></td>
                    <td><input type="text" name="qty8" size="40" placeholder="Enter Quantity"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in8Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q8Err ?></span></td>
                </tr>
                  <tr>
                    <td>9</td>
                    <td><input type="text" name="item9" size="40" placeholder="Enter Item Code"></td>
                    <td><input type="text" name="qty9" size="40" placeholder="Enter Quantity"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in9Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q9Err ?></span></td>
                </tr>
                  <tr>
                    <td>10</td>
                    <td><input type="text" name="item10" size="40" placeholder="Enter Item Code"></td>
                    <td><input type="text" name="qty10" size="40" placeholder="Enter Quantity"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $in10Err ?></span></td>
                    <td><span class="error" style="background-color:crimson"><?php echo $q10Err ?></span></td>
                </tr>
                </table>
            <div class="placeorder">
            <input type="submit" id="placeorderbtn" value="CLICK HERE TO PLACE ORDER">
           </div>
         </div>
         <br>
    </div>
    </form>
</body>
</html>


