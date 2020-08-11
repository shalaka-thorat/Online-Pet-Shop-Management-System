<?php

session_start();
 if(empty($_SESSION["name"])){
  header("location:index.php");
  exit;
}
  else{
    include "connect.php";
    $id= $_SESSION["id"];

    $petn= $pettype = $petbreed = $petage =$reason=$mob=$date=$time=$name= $address= $email = $contact =$petseen=$comment="";
    $petnErr= $pettypeErr = $petbreedErr = $petageErr =$reasonErr=$mobErr=$dateErr=$timeErr=$nameErr= $addressErr= $emailErr = $contactErr =$petseenErr="";

     $error= false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['ownern'])) {
      $nameErr = "Only Letters and White Space Allowed";
      $error=true;
}
else{
    $name=$_POST['ownern'];
}
if (!preg_match("/^[a-zA-Z0-9 -,]*$/",$_POST['address'])) {
      $addressErr = "Only Letters and White Space Allowed";
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

if(empty($_POST['contact']))
{
    $contactErr="Please Select A Proper Time To Contact";
    $error=true;
}
else
{
    $contact=$_POST['contact'];
}
if(empty($_POST['petseen']))
{
    $petseenErr="Please Select YES Or NO";
    $error=true;
}
else
{
    $petseen=$_POST['petseen'];
}

if (!preg_match("/^[a-zA-Z ]*$/",$_POST['petn'])) {
      $petnErr = "Only Letters and White Space Allowed";
      $error=true;
}
else{
    $petn=$_POST['petn'];
}
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['species'])) {
      $pettypeErr = "Only Letters and White Space Allowed";
      $error=true;
}
else{
    $pettype=$_POST['species'];
}
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['reason'])) {
      $reasonErr = "Only Letters and White Space Allowed";
      $error=true;
}
else{
    $reason=$_POST['reason'];
}
if(strcasecmp($_POST['species'],'cat')||strcasecmp($_POST['species'],'dog')||strcasecmp($_POST['species'],'Nil'))
{
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['breed'])) {
      $petbreedErr = "Only Letters and White Space Allowed";
      $error=true;
}
else{
    $petbreed=$_POST['breed'];
}  
}

if(!empty($_POST['comment']))
{
    $comment=$_POST['comment'];
}
if ((!preg_match("/^[0-9]*$/",$_POST['mob']))||(strlen($_POST['mob'])!=10)){
      $mobErr = "Enter Valid Mobile Number";
      $error=true;
}
else{
    $mob=$_POST['mob'];
}

$date0=date_create($_POST['date']);
$date1=date_create(date("m/d/Y"));
date_add($date1,date_interval_create_from_date_string("2 days"));
$date2=date_create(date("m/d/Y"));
date_add($date2,date_interval_create_from_date_string("2 months"));

if(($date0<$date1)||($date0>$date2))
{
    $dateErr="Enter Valid Date: 2 Days to 2 months From Today";
    $error=true;
}
else
{
    $date=$_POST['date'];
}
if(($_POST['time']<"10:00")||($_POST['time']>"21:00"))
{
    $timeErr="Enter Valid Time: Between 10 AM To 9 PM";
    $error=true;
}
else
{
    $time=$_POST['time'];
}

if($_POST['age']=='Years')
{
    if(!($_POST['year']>=1 && $_POST['year']<=20))
    {
        $petageErr="Enter Valid Age In Years";
        $error=true;
    }
    else
    {
        $petage=($_POST['year']*12);
    }
}
if($_POST['age']=='Months')
{
    if(!($_POST['month']>=1 && $_POST['month']<=11))
    {
        $petageErr="Enter Valid Age In Months";
        $error=true;
    }
    else
    {
        $petage=$_POST['month'];
    }
}

$datetime=$date." ".$time.":00";

if(($error==false)){
  require("PHPMailer_5.2.4/class.phpmailer.php");

$message='Your Appointment Has Been Scheduled Successfully.'.'<br>'.'Your Appointment Details Are As Follows:'.'<br><br>'.'Mobile Number: '.$mob.'<br>'.'Address: '.$address.'<br>'.'Pet Name: '.$petn.'<br>'.'Pet Species: '.$pettype.'<br>'.'Pet Breed: '.$petbreed.'<br>'.'Pet Age In Months: '.$petage.'<br>'.'Reason For Visit: '.$reason.'<br>'.'Date Requested: '.$date.'<br>'.'Time Requested: '.$time.'<br><br>'.'Regards,'.'<br>'.'Pet Pash';

error_reporting(E_ALL);
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
//$mail->SMTPDebug  = 2;
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
$mail->Subject = 'Appointment Scheduled Successfully';
$mail->Body = $message;

if($mail->send())
{
   $stmt=$conn->prepare("INSERT INTO appointment VALUES (:id,:petn,:pettype,:petbreed,:petage,:dati,:mob,:address,:reason);");
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':petn',$petn);
        $stmt->bindParam(':pettype',$pettype);
        $stmt->bindParam(':petbreed',$petbreed);
        $stmt->bindParam(':petage',$petage);
        $stmt->bindParam(':dati',$datetime);
        $stmt->bindParam(':mob',$mob);
         $stmt->bindParam(':address',$address);
        $stmt->bindParam(':reason',$reason);
        $st=$stmt->execute();

        $file_open=fopen("vet.csv","a");
        $no_rows=count(file("vet.csv"));
        
        $form_data=array($no_rows, $id,$name,$contact,$petseen,$comment);
        
        fputcsv($file_open,$form_data,';');
        fclose($file_open);

    if($st){
        header("location:vetthank.php");
        }
        else{
               echo "Error In Processing. Please Try Again. ";
         }
    }
    else
    {
        echo "Error In Processing. Please Try Again Email Err. ";
    }
  }
   
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vet Appointment</title>
    <link rel="stylesheet" href="vet.css">  
    <link rel="icon" type="image/ico" href="paw.png">
    <script type="text/javascript">
        function Check(val){
            var element1=document.getElementById('year');
            var element2=document.getElementById('month');
            if(val=='Years')
            {
                element1.style.display='block';
            }
            else
            {
                element1.style.display='none';
            }
            if(val=='Months')
                {
                    element2.style.display='block';
                }
                else
                {
                    element2.style.display='none';
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
    <center>
        <h1>VET APPOINTMENT FORM</h1>
    </center>
    <p style="font-size: 20px;">Our online vet appointment form is intended to help you schedule your pet's appointment for your routine veterinary care. 
        If you need help right away, Please telephone us at 972-529-5033 or 972-239-1309. You will receive a <b>confirmation mail </b> for the appointment scheduled. And as per the scheduled date and time, our doctor will come to you for your pets check-up.  
    </p>
    <form name="vetform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <fieldset>
            <legend>
                <strong>PET OWNER'S INFORMATION</strong>
            </legend>
            <label>Name</label> <br>
            <input type="text" name="ownern" required> 
            <span class="error" style="background-color: red"> <?php echo $nameErr?></span><br> <br>
           
            <label>Address</label> <br>
            <textarea rows="2" cols="50" name="address" required></textarea>
            <span class="error" style="background-color: red"> <?php echo $addressErr?></span><br><br>
           
            <label>Mobile No.</label> <br>
            <input type="text" name="mob" required> 
            <span class="error" style="background-color: red"> <?php echo $mobErr?></span><br> <br>
           
            <label>Email Id (Gmail Account)</label> <br>
            <input type="email" name="email" required>
            <span class="error" style="background-color: red"> <?php echo $emailErr?> </span><br> <br>
           
            <label>Best Time To Contact</label> <br>
          
               <input type="radio" name="contact" value="Morning" required>Morning
               <input type="radio" name="contact" value="Afternoon">Afternoon
               <input type="radio" name="contact" value="Evening">Evening
               <span class="error" style="background-color: red"> <?php echo $contactErr?></span>
             <br> <br>
        </fieldset>

        <br>

        <fieldset>
            <legend>
               <strong> PET'S INFO</strong>
            </legend>

            <label>Name</label> <br>
            <input type="text" name="petn" required> 
            <span class="error" style="background-color: red"> <?php echo $petnErr?></span><br> <br>
           
            <label>Species</label> <br>
            <input type="text" name="species" required> 
            <span class="error" style="background-color: red"> <?php echo $pettypeErr?></span><br> <br>
           
            <label>Breed(if cat/dog) Else write Nil</label> <br>
            <input type="text"  name="breed" required> 
            <span class="error" style="background-color: red"> <?php echo $petbreedErr?></span><br> <br>
           
            <label>Age</label> <br>
            <select required name="age" onchange="Check(this.value);">
                
               <option value="Years">In Years</option>
               <option value="Months">In Months (1 month-11 months) </option>
           </select><br><br>
               <input type="number" min="1" max="20" id="year" placeholder="Age In Years" name="year" style="display:block">
                <input type="number" min="1" max="11" id="month" placeholder="Age In Months" name="month" style="display:none">
                <span class="error" style="background-color: red"> <?php echo $petageErr?></span>
             <br> <br>
           
            <label>Has Pet Been Seen Here Before?</label> <br>
            <select name="petseen" required>
                
               <option value="Yes">YES</option>
               <option value="No">NO</option>
            </select> 
            <span class="error" style="background-color: red"> <?php echo $petseenErr?></span><br> <br>
           
            <label>Reason For Visit</label> <br>
            <input type="text"  name="reason" required>
            <span class="error" style="background-color: red"> <?php echo $reasonErr; ?></span> <br> <br>
           
           
            <label>Date Requested (2 days From Today And Before 2 months in case of Advance Appointment) </label> <br>
            <input type="date" name="date" required> 
            <span class="error" style="background-color: red"> <?php echo $dateErr; ?></span><br><br>
           
            <label>Time Requested (Opening Hours 10 AM to 9 PM)</label> <br>
            <input type="time" min="10:00 AM" max="09:00 PM" name="time" required> <br> <br>
            <span class="error" style="background-color: red"> <?php echo $timeErr; ?></span> <br> <br>

            <label> Additional Comments</label> <br>
            <textarea rows="3" cols="50" name="comments"></textarea>

           
        </fieldset> <br>
           <center>
               <button class="b1" type="submit">&nbsp;SUBMIT&nbsp;</button>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <button class="b2" type="reset">&nbsp;CLEAR&nbsp;</button>
           </center>
           <br><br>
     
    </form>
</body>
</html>