<?php
include "connect.php";

$nameErr = $emailErr  = $cpassErr = $passErr= $status="";
$name = $email =  $password = $cpassword ="";
$error=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
  	$error=true;
    $nameErr = "User Name is Required ";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$name)) {
      $nameErr = "Only LETTERS, DIGITS And UNDERSCORE Allowed ";
      $error=true;
    } else {
      $stmt=$conn->query("SELECT * FROM user WHERE name = '$name'");
      if($stmt->execute()){
        if($stmt->rowcount()==1){
          $error=true;
          $nameErr="User Name Already Exists. Please Try A Different Username ";
    }
  }
 }
}

  if (empty($_POST["email"])) {
    $emailErr = "Email is Required ";
    $error=true;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid Email Format ";
      $error=true;
    }
  }

  if (empty($_POST["password"])) {
    $passErr = "Password is Required ";
    $error=true;
  } else {
    $password = test_input($_POST["password"]);
    if (strlen($password)<7 && strlen($password)<10) {
      $passErr = "Password Length Should Be Between 7 And 10";
      $error=true;
    }

  }

  if (empty($_POST["cpassword"])) {
    $cpassErr = "Confirm Password is Required ";
    $error=true;
  } else {
    $cpassword = test_input($_POST["cpassword"]);
    if ($password!=$cpassword) {
      $cpassErr = "Password and Confirm Password Don't Match ";
      $error=true;
    }

  }
    
    if(!$error)
    {
          require("PHPMailer_5.2.4/class.phpmailer.php");

$message='Hey, Welcome To Pet Pash!'.'<br>'.'Thank you For Registering.'.'<br>'.'Your Account Has Been Successfully Created.'.'<br>'.'Your Login Credentials Are As Follows:'.'<br><br>'.'Username: '.$name.'<br>'.'Password: '.$password.'<br><br>'.'Best Regards,'.'<br>'.'-Pet Pash Team';

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
$mail->Subject = 'Welcome To Pet Pash';
$mail->Body = $message;

        if($mail->send())
        {
          $insert=$conn->prepare("INSERT INTO user (name,email,password) VALUES(:name,:email,:password)");
          $insert->bindParam(':name',$name);
          $insert->bindParam(':email',$email);
        $insert->bindParam(':password',$password);
        $st=$insert->execute();
        if($st)
        {
          $status="Successfully Registered ";
         }
        else
        {
        	$status="Error in Registering. Please Try Again ";
        }
      }
      else
      {
        $status="Error in Registering. Please Try Again ";
      }

    }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>
<head>
	<title>Pet Pash</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="signlog.css">
  <link rel="icon" type="image/ico" href="paw.png">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>

<img src="Golden-Retriever-Puppy-Flooring.jpg"  width="1525" height="850" style="position: absolute;left: 0px;top: 0px ; background: url(Golden-Retriever-Puppy-Flooring.jpg)">

<h1 align="left" style="position: absolute;left: 75px;top: 1px;font-family:cursive;font-size: 25px">Pet Pash</h1>

<img src="fold-heart-with-paw.jpg" style="position: absolute;width: 60px;height: 60px;left: 0px;top: 6px ;mix-blend-mode: darken;border-radius: 20px;">

<div class="signup_form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" name="signupform">
            <h1>Sign Up !</h1><br>
            <input type="text" name="name" placeholder="Create User Name" class="txtb" required >
            <span class="error" style="background-color: red"><?php echo $nameErr?></span>
            <input type="email" name="email" placeholder="Email (Gmail Account)" class="txtb" required>
            <span class="error" style="background-color: red"> <?php echo $emailErr?></span>
            <input type="password" name="password" placeholder=" Create Password" class="txtb" required >
            <span class="error" style="background-color: red"> <?php echo $passErr?></span>
            <input type="password" name="cpassword" placeholder="Confirm Password" class="txtb" required>
            <span class="error" style="background-color: red"> <?php echo $cpassErr?></span>
            <input type="submit" name="submit" value="Create Account" class="signup-btn">
            <?php if($status=="Successfully Registered ")
            {
              echo "<p style='background-color: green'>".$status."</p>";
            }
            else
            {
              echo "<p style='background-color: red'>".$status."</p>";
            }
            ?>
            <br><br><a href="index.php">Already have an Account? Click Here To Login</a>

        </form>
    </div>
</body>
</html>