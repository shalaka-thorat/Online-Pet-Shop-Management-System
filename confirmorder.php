<?php

session_start();
 if(empty($_SESSION["name"])){
  header("location:index.php");
  exit;
}
  else{
    include "connect.php";
    $id= $_SESSION["id"];

     $address=$mob=$email=$pay="";
     $addressErr=$mobErr=$emailErr=$payErr="";
     $error=false;

     if($_SERVER["REQUEST_METHOD"]=="POST"){

    if (!preg_match("/^[a-zA-Z0-9 ,-]*$/",$_POST['address'])) {
      $addressErr = "Enter Valid Address";
      $error=true;
     }
     else{
      $address=$_POST['address'];
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Enter Valid Email";
      $error=true;
}
else{
    $email=$_POST['email'];
}


    if((!preg_match("/^[0-9]*$/",$_POST['mob']))||(strlen($_POST['mob'])!=10)){
      $mobErr = "Enter Valid Mobile Number";
      $error=true;
    }else{
    $mob=$_POST['mob'];
     }

     if(!empty($_POST['pay']))
     {
      $pay=$_POST['pay'];
     }
     else
     {
      $payErr="Please Select One Of The Options";
     }

       if($error==false)
       {
        $message='Thanks For Shopping With Pet Pash...'.'<br>'.'You Will Receive The Delivery Within 4-5 Working Days.'.'<br>'.'Your Order Details Are As Follows:'.'<br><br>'.'<table border=2><tr><th>Item Name</th><th>Quantity</th></tr>';

        date_default_timezone_set("Asia/Kolkata");
        $date1=date("Y/m/d h:i:sa");
        $stmt=$conn->prepare("INSERT INTO orders(uid,phonen,addr,orderdate,totalprice,totalqty) VALUES (:id,:mobn,:adr,:da,:tp,:tq);");
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':mobn',$mob);
        $stmt->bindParam(':adr',$address);
        $stmt->bindParam(':da',$date1);
        $stmt->bindParam(':tp',$_SESSION['totalp']);
        $stmt->bindParam(':tq',$_SESSION['totalq']);
        $st=$stmt->execute();
        $stmt=$conn->query("SELECT orderno FROM orders where uid='$id' AND orderdate='$date1' ;");
        $orderno=$stmt->fetch();
        $_SESSION['orderno']=$orderno[0];
       if($_SESSION['qty1']!=0)
        {
         $in1=$_SESSION['ic1'];                           
         $q1=$_SESSION['qty1'];
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in1';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q1') where icode='$in1';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in1);
        $stmt->bindParam(':qt',$q1);
        $stmt->execute();

        $message=$message."<tr><td>".$_SESSION['item1']."</td><td>".$_SESSION['qty1']."</td></tr>";
        }  

        if($_SESSION['qty2']!=0)
        {
        $in2=$_SESSION['ic2'];
        $q2=$_SESSION['qty2'];  
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in2';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q2') where icode='$in2';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in2);
        $stmt->bindParam(':qt',$q2);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item2']."</td><td>".$_SESSION['qty2']."</td></tr>";
      }

      if($_SESSION['qty3']!=0)
        {
         $in3=$_SESSION['ic3'];
         $q3=$_SESSION['qty3'];
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in3';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q3') where icode='$in3';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in3);
        $stmt->bindParam(':qt',$q3);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item3']."</td><td>".$_SESSION['qty3']."</td></tr>";
       }
       if($_SESSION['qty4']!=0)
        {
         $in4=$_SESSION['ic4']; 
        $q4=$_SESSION['qty4'];
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in4';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q4') where icode='$in4';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in4);
        $stmt->bindParam(':qt',$q4);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item4']."</td><td>".$_SESSION['qty4']."</td></tr>";
      }
      if($_SESSION['qty5']!=0)
        {
        $in5=$_SESSION['ic5'];
        $q5=$_SESSION['qty5'];
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in5';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q5') where icode='$in5';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in5);
        $stmt->bindParam(':qt',$q5);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item5']."</td><td>".$_SESSION['qty5']."</td></tr>";
      }
      if($_SESSION['qty6']!=0)
        {
         $in6=$_SESSION['ic6']; 
         $q6=$_SESSION['qty6']; 
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in6';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q6') where icode='$in6';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in6);
        $stmt->bindParam(':qt',$q6);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item6']."</td><td>".$_SESSION['qty6']."</td></tr>";
       }
       if($_SESSION['qty7']!=0)
        {
           $in7=$_SESSION['ic7']; 
           $q7=$_SESSION['qty7']; 
           $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in7';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q7') where icode='$in7';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in7);
        $stmt->bindParam(':qt',$q7);
        $stmt->execute(); 
        $message=$message."<tr><td>".$_SESSION['item7']."</td><td>".$_SESSION['qty7']."</td></tr>";
         }
         if($_SESSION['qty8']!=0)
        {
        $in8=$_SESSION['ic8'];                  
        $q8=$_SESSION['qty8']; 
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in8';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q8') where icode='$in8';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in8);
        $stmt->bindParam(':qt',$q8);
        $stmt->execute();    
        $message=$message."<tr><td>".$_SESSION['item8']."</td><td>".$_SESSION['qty8']."</td></tr>";                  
      }
      if($_SESSION['qty9']!=0)
        {
       $in9=$_SESSION['ic9'];       
        $q9=$_SESSION['qty9']; 
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in9';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q9') where icode='$in9';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in9);
        $stmt->bindParam(':qt',$q9);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item9']."</td><td>".$_SESSION['qty9']."</td></tr>";
      }
        if($_SESSION['qty10']!=0)
        {         
       $in10=$_SESSION['ic10'];  
      $q10=$_SESSION['qty10'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in10';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q10') where icode='$in10';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in10);
        $stmt->bindParam(':qt',$q10);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item10']."</td><td>".$_SESSION['qty10']."</td></tr>";
      }

      if($_SESSION['qty11']!=0)
        {         
       $in11=$_SESSION['ic11'];  
      $q11=$_SESSION['qty11'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in11';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q11') where icode='$in11';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in11);
        $stmt->bindParam(':qt',$q11);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item11']."</td><td>".$_SESSION['qty11']."</td></tr>";
      }
      if($_SESSION['qty12']!=0)
        {
         $in12=$_SESSION['ic12'];                           
         $q12=$_SESSION['qty12'];
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in12';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q12') where icode='$in12';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in12);
        $stmt->bindParam(':qt',$q12);
        $stmt->execute();

        $message=$message."<tr><td>".$_SESSION['item12']."</td><td>".$_SESSION['qty12']."</td></tr>";
        }  

        if($_SESSION['qty13']!=0)
        {
        $in13=$_SESSION['ic13'];
        $q13=$_SESSION['qty13'];  
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in13';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q13') where icode='$in13';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in13);
        $stmt->bindParam(':qt',$q13);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item13']."</td><td>".$_SESSION['qty13']."</td></tr>";
      }

      if($_SESSION['qty14']!=0)
        {
         $in14=$_SESSION['ic14'];
         $q14=$_SESSION['qty14'];
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in14';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q14') where icode='$in14';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in14);
        $stmt->bindParam(':qt',$q14);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item14']."</td><td>".$_SESSION['qty14']."</td></tr>";
       }
       if($_SESSION['qty15']!=0)
        {
         $in15=$_SESSION['ic15']; 
        $q15=$_SESSION['qty15'];
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in15';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q15') where icode='$in15';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in15);
        $stmt->bindParam(':qt',$q15);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item15']."</td><td>".$_SESSION['qty15']."</td></tr>";
      }
      if($_SESSION['qty16']!=0)
        {
        $in16=$_SESSION['ic16'];
        $q16=$_SESSION['qty16'];
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in16';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q16') where icode='$in16';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in16);
        $stmt->bindParam(':qt',$q16);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item16']."</td><td>".$_SESSION['qty16']."</td></tr>";
      }
      if($_SESSION['qty17']!=0)
        {
         $in17=$_SESSION['ic17']; 
         $q17=$_SESSION['qty17']; 
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in17';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q17') where icode='$in17';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in17);
        $stmt->bindParam(':qt',$q17);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item17']."</td><td>".$_SESSION['qty17']."</td></tr>";
       }
       if($_SESSION['qty18']!=0)
        {
           $in18=$_SESSION['ic18']; 
           $q18=$_SESSION['qty18']; 
           $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in18';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q18') where icode='$in18';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in18);
        $stmt->bindParam(':qt',$q18);
        $stmt->execute(); 
        $message=$message."<tr><td>".$_SESSION['item18']."</td><td>".$_SESSION['qty18']."</td></tr>";
         }
         if($_SESSION['qty19']!=0)
        {
        $in19=$_SESSION['ic19'];                  
        $q19=$_SESSION['qty19']; 
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in19';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q19') where icode='$in19';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in19);
        $stmt->bindParam(':qt',$q19);
        $stmt->execute();    
        $message=$message."<tr><td>".$_SESSION['item19']."</td><td>".$_SESSION['qty19']."</td></tr>";                  
      }
      if($_SESSION['qty20']!=0)
        {
       $in20=$_SESSION['ic20'];       
        $q20=$_SESSION['qty20']; 
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in20';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q20') where icode='$in20';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in20);
        $stmt->bindParam(':qt',$q20);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item20']."</td><td>".$_SESSION['qty20']."</td></tr>";
      }
        if($_SESSION['qty21']!=0)
        {         
       $in21=$_SESSION['ic21'];  
      $q21=$_SESSION['qty21'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in21';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q21') where icode='$in21';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in21);
        $stmt->bindParam(':qt',$q21);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item21']."</td><td>".$_SESSION['qty21']."</td></tr>";
      }

      if($_SESSION['qty22']!=0)
        {         
       $in22=$_SESSION['ic22'];  
      $q22=$_SESSION['qty22'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in22';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q22') where icode='$in22';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in22);
        $stmt->bindParam(':qt',$q22);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item22']."</td><td>".$_SESSION['qty22']."</td></tr>";
      }

      if($_SESSION['qty23']!=0)
        {         
       $in23=$_SESSION['ic23'];  
      $q23=$_SESSION['qty23'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in23';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q23') where icode='$in23';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in23);
        $stmt->bindParam(':qt',$q23);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item23']."</td><td>".$_SESSION['qty23']."</td></tr>";
      }

      if($_SESSION['qty24']!=0)
        {         
       $in24=$_SESSION['ic24'];  
      $q24=$_SESSION['qty24'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in24';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q24') where icode='$in24';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in24);
        $stmt->bindParam(':qt',$q24);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item24']."</td><td>".$_SESSION['qty24']."</td></tr>";
      }

      if($_SESSION['qty25']!=0)
        {         
       $in25=$_SESSION['ic25'];  
      $q25=$_SESSION['qty25'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in25';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'-'$q25') where icode='$in25';");
          $stmt->execute();

        $stmt=$conn->prepare("INSERT INTO orderitems VALUES (:ono,:ic,:qt);");
        $stmt->bindParam(':ono',$orderno[0]);
        $stmt->bindParam(':ic',$in25);
        $stmt->bindParam(':qt',$q25);
        $stmt->execute();
        $message=$message."<tr><td>".$_SESSION['item25']."</td><td>".$_SESSION['qty25']."</td></tr>";
      }
      $info="</table>"."Address: ".$address."<br>"."Mobile Number: ".$mob."<br>"."Payment Mode: ".$pay."<br>"."Total Price: ".$_SESSION['totalp']."<br>"."Total Quantity: ".$_SESSION['totalq'];
      $message=$message.$info;
      $_SESSION['msg']=$message;
      $_SESSION['oemail']=$email;
      if($pay=='Online Payment')
      {
        header("location:payment.php");
      }
      else
        {
          require("PHPMailer_5.2.4/class.phpmailer.php");
          $message=$_SESSION['msg']."<br><br>"."Regards,"."<br>"."Pet Pash";
error_reporting(E_ALL);
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->From = "petpashorg@gmail.com";
$mail->FromName = "PetPash Organization";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 465; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "petpashorg@gmail.com"; // SMTP username
$mail->Password = "PetPash@99"; // SMTP password
$mail->addAddress($email);
$mail->IsHTML(true); // set email format to HTML
$mail->Subject = 'Order Placed Successfully';
$mail->Body = $message;

        if($mail->send())
        { 
      header("location:orderthanks.php");
  }
  else
  {
    echo "Error In Processing. Please Try Again. ";
  }
}
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
    <title>Confirm Order</title>
    <script type="text/javascript">
      function cleared()
      {
        alert("Your Order Cart Has Been Cleared");
      }

      function placed()
      {
        if(document.getElementById("addr").value!="" && document.getElementById("mob").value!="" && document.getElementById("email").value!="" && (document.getElementById("pay1").checked==true || document.getElementById("pay2").checked==true))
        {
        if(document.getElementById("pay1").checked==true)
        {
          alert("Order Placed Successfully....");
        }
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
  <li><a href="pawcart.php" style="position:absolute; right:800px">Back To PawCart Without Clearing Your Order Cart</a></li>
  <li><a href="pawini.php" onlick="cleared();" style="position:absolute;  right:250px">Clear Your Order Cart And Go Back To PawCart</a></li>
            </span>
</ul>
    </nav>
        </div>
    <div class="past_orders" id="confirmo" style="margin-top: 500px">
        <form name="confirmorder" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <h1>Order Summary</h1>
            <div class="item">
                <table align="left" style="width:100%;" cellspacing="15" cellpadding="5" border="0"> 
                  <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                  </tr>
                   <?php if($_SESSION['qty1']!=0)
                   {
                    echo "<tr>
                    <td>".$_SESSION['item1']."</td>
                    <td>".$_SESSION['qty1']."</td>
                  </tr>";
                   } ?>
                   <?php if($_SESSION['qty2']!=0)
                   {
                      echo "<tr>
                    <td>".$_SESSION['item2']."</td>
                    <td>".$_SESSION['qty2']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty3']!=0)
                   {
                    echo "<tr>
                    <td>".$_SESSION['item3']."</td>
                    <td>".$_SESSION['qty3']."</td>
                  </tr>";
                  } ?>
                  <?php if($_SESSION['qty4']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item4']."</td>
                    <td>".$_SESSION['qty4']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty5']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item5']."</td>
                    <td>".$_SESSION['qty5']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty6']!=0)
                   {
                echo "<tr>
                    <td>".$_SESSION['item6']."</td>
                    <td>".$_SESSION['qty6']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty7']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item7']."</td>
                    <td>".$_SESSION['qty7']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty8']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item8']."</td>
                    <td>".$_SESSION['qty8']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty9']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item9']."</td>
                    <td>".$_SESSION['qty9']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty10']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item10']."</td>
                    <td>".$_SESSION['qty10']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty11']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item11']."</td>
                    <td>".$_SESSION['qty11']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty12']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item12']."</td>
                    <td>".$_SESSION['qty12']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty13']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item13']."</td>
                    <td>".$_SESSION['qty13']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty14']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item14']."</td>
                    <td>".$_SESSION['qty14']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty15']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item15']."</td>
                    <td>".$_SESSION['qty15']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty16']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item16']."</td>
                    <td>".$_SESSION['qty16']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty17']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item17']."</td>
                    <td>".$_SESSION['qty17']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty18']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item18']."</td>
                    <td>".$_SESSION['qty18']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty19']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item19']."</td>
                    <td>".$_SESSION['qty19']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty20']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item20']."</td>
                    <td>".$_SESSION['qty20']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty21']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item21']."</td>
                    <td>".$_SESSION['qty21']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty22']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item22']."</td>
                    <td>".$_SESSION['qty22']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty23']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item23']."</td>
                    <td>".$_SESSION['qty23']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty24']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item24']."</td>
                    <td>".$_SESSION['qty24']."</td>
                  </tr>";
                } ?>
                <?php if($_SESSION['qty25']!=0)
                   {
                  echo "<tr>
                    <td>".$_SESSION['item25']."</td>
                    <td>".$_SESSION['qty25']."</td>
                  </tr>";
                } ?>
                 </table>
                <h2 style="color:white">___________________________________________________________________</h2>
                <h3 style="color:white">TOTAL PRICE (In Rs.) : <big><?php echo $_SESSION['totalp'] ?></big></h3>
                <h3 style="color:white">TOTAL QUANTITY : <big><?php echo $_SESSION['totalq'] ?></big></h3>

                <br>
              <label><u><b>Enter Your Address</b></u></label><br>
            <textarea rows="3" cols="50" name="address" id="addr" required></textarea><br>
            <span class="error" style="background-color: red"> <?php echo $addressErr?></span><br><br>
           
            <label><u><b>Enter Your Mobile No.</b></u></label><br>
            <input type="text" name="mob" id="mob" required> <br>
            <span class="error" style="background-color: red"> <?php echo $mobErr?></span><br><br>

            <label><u><b>Enter Your Email Id (Gmail Account)</b></u></label> <br>
            <input type="email" name="email" id="email" required>
            <span class="error" style="background-color: red"> <?php echo $emailErr?> </span><br><br><br>

            <label><u><b>Payment Mode</b></u></label> <br>
            <input type="radio" name="pay" id="pay1" required value="Cash On Delivery (COD)">
            <label>Cash On Delivery (COD)</label><br>
            <input  type="radio" name="pay"  id="pay2" value="Online Payment">
            <label style="margin-right:-265px">Online Payment (Credit Card/ Debit Card/ Net Banking/ Wallet)</label>
            <span class="error" style="background-color: red"> <?php echo $payErr?></span> <br><br><br>

            <div class="placeorder">
            <input type="submit" onclick="placed();" id="placeorderbtn" value="CLICK HERE TO CONFIRM ORDER">
           </div>
         </div>
         <br>
    </div>
    </form>
</body>
</html>


