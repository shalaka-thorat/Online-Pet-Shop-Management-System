<?php

session_start();
if(empty($_SESSION["name"])){
  header("location:index.php");
  exit;
}
  else{
    include "connect.php";
	$payErr="";
	if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['action']=='CONTINUE'){

		if(empty($_POST['paym']))
		{
			$payErr="Please Select One Of The Options";
		}
		else
		{
			$_SESSION['paym']=$_POST['paym'];
			header("location:payprocess.php");
		}
	}

   if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['action']=='CANCEL ORDER AND GO BACK TO PAWCART'){

        $order=$_SESSION['orderno'];

        $stmt=$conn->prepare("DELETE FROM orderitems WHERE orderno='$order';");
        $stmt->execute();

        $stmt=$conn->prepare("DELETE FROM orders WHERE orderno='$order';");
        $stmt->execute();

		if($_SESSION['qty1']!=0)
        {
         $in1=$_SESSION['ic1'];                           
         $q1=$_SESSION['qty1'];
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in1';");
         $stmt->execute();
         $stock=$stmt->fetch();

         $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q1') where icode='$in1';");
         $stmt->execute();
        }  

        if($_SESSION['qty2']!=0)
        {
        $in2=$_SESSION['ic2'];
        $q2=$_SESSION['qty2'];  
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in2';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q2') where icode='$in2';");
          $stmt->execute();
      }

      if($_SESSION['qty3']!=0)
        {
         $in3=$_SESSION['ic3'];
         $q3=$_SESSION['qty3'];
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in3';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q3') where icode='$in3';");
          $stmt->execute();
       }
       if($_SESSION['qty4']!=0)
        {
         $in4=$_SESSION['ic4']; 
        $q4=$_SESSION['qty4'];
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in4';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q4') where icode='$in4';");
          $stmt->execute();
      }
      if($_SESSION['qty5']!=0)
        {
        $in5=$_SESSION['ic5'];
        $q5=$_SESSION['qty5'];
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in5';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q5') where icode='$in5';");
          $stmt->execute();
      }
      if($_SESSION['qty6']!=0)
        {
         $in6=$_SESSION['ic6']; 
         $q6=$_SESSION['qty6']; 
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in6';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q6') where icode='$in6';");
          $stmt->execute();
       }
       if($_SESSION['qty7']!=0)
        {
           $in7=$_SESSION['ic7']; 
           $q7=$_SESSION['qty7']; 
           $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in7';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q7') where icode='$in7';");
          $stmt->execute();
         }
         if($_SESSION['qty8']!=0)
        {
        $in8=$_SESSION['ic8'];                  
        $q8=$_SESSION['qty8']; 
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in8';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q8') where icode='$in8';");
          $stmt->execute();    
      }
      if($_SESSION['qty9']!=0)
        {
       $in9=$_SESSION['ic9'];       
        $q9=$_SESSION['qty9']; 
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in9';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q9') where icode='$in9';");
          $stmt->execute();
      }
        if($_SESSION['qty10']!=0)
        {         
       $in10=$_SESSION['ic10'];  
      $q10=$_SESSION['qty10'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in10';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q10') where icode='$in10';");
          $stmt->execute();
      }

      if($_SESSION['qty11']!=0)
        {         
       $in11=$_SESSION['ic11'];  
      $q11=$_SESSION['qty11'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in11';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q11') where icode='$in11';");
          $stmt->execute();
      }
      if($_SESSION['qty12']!=0)
        {
         $in12=$_SESSION['ic12'];                           
         $q12=$_SESSION['qty12'];
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in12';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q12') where icode='$in12';");
          $stmt->execute();
        }  

        if($_SESSION['qty13']!=0)
        {
        $in13=$_SESSION['ic13'];
        $q13=$_SESSION['qty13'];  
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in13';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q13') where icode='$in13';");
          $stmt->execute();
      }

      if($_SESSION['qty14']!=0)
        {
         $in14=$_SESSION['ic14'];
         $q14=$_SESSION['qty14'];
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in14';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q14') where icode='$in14';");
          $stmt->execute();
       }
       if($_SESSION['qty15']!=0)
        {
         $in15=$_SESSION['ic15']; 
        $q15=$_SESSION['qty15'];
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in15';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q15') where icode='$in15';");
          $stmt->execute();
      }
      if($_SESSION['qty16']!=0)
        {
        $in16=$_SESSION['ic16'];
        $q16=$_SESSION['qty16'];
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in16';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q16') where icode='$in16';");
          $stmt->execute();
      }
      if($_SESSION['qty17']!=0)
        {
         $in17=$_SESSION['ic17']; 
         $q17=$_SESSION['qty17']; 
         $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in17';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q17') where icode='$in17';");
          $stmt->execute();
       }
       if($_SESSION['qty18']!=0)
        {
           $in18=$_SESSION['ic18']; 
           $q18=$_SESSION['qty18']; 
           $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in18';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q18') where icode='$in18';");
          $stmt->execute(); 
         }
         if($_SESSION['qty19']!=0)
        {
        $in19=$_SESSION['ic19'];                  
        $q19=$_SESSION['qty19']; 
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in19';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q19') where icode='$in19';");
          $stmt->execute();            
      }
      if($_SESSION['qty20']!=0)
        {
       $in20=$_SESSION['ic20'];       
        $q20=$_SESSION['qty20']; 
        $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in20';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q20') where icode='$in20';");
          $stmt->execute();
      }
        if($_SESSION['qty21']!=0)
        {         
       $in21=$_SESSION['ic21'];  
      $q21=$_SESSION['qty21'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in21';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q21') where icode='$in21';");
          $stmt->execute();
      }

      if($_SESSION['qty22']!=0)
        {         
       $in22=$_SESSION['ic22'];  
      $q22=$_SESSION['qty22'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in22';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q22') where icode='$in22';");
          $stmt->execute();
      }

      if($_SESSION['qty23']!=0)
        {         
       $in23=$_SESSION['ic23'];  
      $q23=$_SESSION['qty23'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in23';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q23') where icode='$in23';");
          $stmt->execute();
      }

      if($_SESSION['qty24']!=0)
        {         
       $in24=$_SESSION['ic24'];  
      $q24=$_SESSION['qty24'];  
      $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in24';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q24') where icode='$in24';");
          $stmt->execute();
      }

      if($_SESSION['qty25']!=0)
        {         
       $in25=$_SESSION['ic25'];  
       $q25=$_SESSION['qty25'];  
       $stmt=$conn->query("SELECT stock FROM foodtoys WHERE icode = '$in25';");
         $stmt->execute();
         $stock=$stmt->fetch();

          $stmt=$conn->query("UPDATE foodtoys SET stock=('$stock[0]'+'$q25') where icode='$in25';");
          $stmt->execute();
      }
      header("location:pawini.php");
	}
}


?>

<html>
<head>
	<title>Online Payment</title>
	<link rel="stylesheet" href="orders.css">
    <link rel="icon" type="image/ico" href="paw.png">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <script type="text/javascript">
    	function cleared()
    	{
    		alert("Order Cancelled Successfully....");
    	}
    </script>
</head>
<body>
	<form class="past_orders" style='margin-top:350px; padding:30px' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method='post'>
		<h2>Amount To Be Paid: <?php echo $_SESSION['totalp'] ?></h2><br><br>
	<h2>Please Select The Respective Online Payment Mode</h2><br>
	<h3><input type='radio' name='paym' value="Credit Card"><label style='margin-right:2px' required>Credit Card</h3></label>
	<h3><input type='radio' name='paym' value="Debit Card"><label style='margin-right:12px'>Debit Card</h3></label>
	<h3><input type='radio' name='paym' value="Net Banking"><label>Net Banking</h3></label>
	<h3><input type='radio' name='paym'value="Wallet"><label style='margin-right:-218px'>Wallet (Paytm/ PhonePe/ GooglePay)</h3></label><br>
	<span class='error' style='background-color:red'><?php echo $payErr ?></span><br>
	<input type="submit" name="action" class="orderbtn" style="font-size:20px" value="CONTINUE"><br><br><br>
	<input type="submit" name="action" class="orderbtn" onclick="cleared();" style=" font-size:20px" value="CANCEL ORDER AND GO BACK TO PAWCART"><br><br><br>
    
	</form>
</body>
</html>
