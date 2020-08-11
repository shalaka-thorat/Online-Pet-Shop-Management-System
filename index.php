<?php

include "connect.php";   
$name = $password = $nameErr = $passwordErr = $error= "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty(test_input($_POST["name"]))){  
 $nameErr="Enter Username ";
}
else{
   $name=test_input($_POST["name"]);
}
if(empty(test_input($_POST["password"]))){  
$passwordErr="Enter Password ";

}
else{
     $password=test_input($_POST["password"]);
}

if(empty($nameErr)&&empty($passwordErr)){
    $stmt=$conn->query("SELECT uid FROM user WHERE name = '$name' and password = '$password';");
    
    if($stmt->execute()){
        if($stmt->rowcount()==1){
            session_start();
        $_SESSION["name"]=$name;
        header("location:signin.php");
        }else{
        $error="Username And/Or Password Didn't Match";

    }
    }
    
}

}

function test_input($data)
{
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

 ?>

<html>
<head>
	<title>Pet Pash</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="signlog.css">
    <link rel="icon" type="image/png" href="paw.png">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>

<img src="Golden-Retriever-Puppy-Flooring.jpg"  width="1525" height="850" style="position: absolute;left: 0px;top: 0px ; background: url(Golden-Retriever-Puppy-Flooring.jpg)">

<h1 align="left" style="position: absolute;left: 75px;top: 1px;font-family:cursive;font-size: 25px">Pet Pash</h1>

<img src="fold-heart-with-paw.jpg" style="position: absolute;width: 60px;height: 60px;left: 0px;top: 6px ;mix-blend-mode: darken;border-radius: 20px;">

<div class="signup_form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" name="loginform">
            <h1>Login !</h1>
            <input type="text" name="name" placeholder="User Name" class="txtb" required >
            <span class="error" style="background-color: red"> <?php echo $nameErr?></span>
            <input type="password" name="password" placeholder="Password" class="txtb" required >
            <span class="error" style="background-color: red"> <?php echo $passwordErr?></span>
            <input type="submit" name="submit" value="Login" class="signup-btn"><br>
            <span class="error" style="background-color: red"><?php echo $error ?></span>
            <br><a href="welcome.php">New User? Click Here To Sign Up</a>
        </form>
</div>
</body>
</html>