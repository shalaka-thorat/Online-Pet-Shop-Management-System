<?php
session_start();
 if(empty($_SESSION["name"])){
  header("location:index.php");
  exit;
}
  else{
    include "connect.php";
    $id= $_SESSION["id"];

 $petid=$mob=$city=$name=$care=$email=$age=$prof=$living=$residence=$floor=$house=$neighbour=$experience=$primary=$hoursaway=$doghome=$replace=$diet=$tiedup=$sleepplace=$access=$return=$dogage=$gender=$breed=$special=$contact=$contacttime=$eligible=$vet=$additional="";
 $mobErr=$cityErr=$petidErr=$nameErr=$emailErr=$careErr=$ageErr=$profErr=$livingErr=$residenceErr=$floorErr=$houseErr=$neighbourErr=$experienceErr=$primaryErr=$hoursawayErr=$doghomeErr=$replaceErr=$dietErr=$tiedupErr=$sleepplaceErr=$accessErr=$returnErr=$dogageErr=$genderErr=$breedErr=$specialErr=$contactErr=$contacttimeErr=$eligibleErr=$vetErr="";
 $error=$pid=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){

if (!preg_match("/^[a-zA-Z ]*$/",$_POST['city'])) {
      $cityErr = "Only Letters and White Space Allowed";
      $error=true;
}
else if(empty($_POST['city']))
{
	 $cityErr = "Enter Valid City Name";
      $error=true;
}
else{
    $city=$_POST['city'];
}
if ((!preg_match("/^[0-9]*$/",$_POST['mob']))||(strlen($_POST['mob'])!=10)||(empty($_POST['mob']))){
      $mobErr = "Enter Valid Mobile Number";
      $error=true;
}
else{
    $mob=$_POST['mob'];
}
$petid=$_POST['choice'];
if(($petid!="Nil")&&($petid!="NIL")&&($petid!="nil")&&($petid!="NO")&&($petid!="no")&&($petid!="No"))
{
	if($petid<=50)
	{
    $stmt=$conn->query("SELECT petid FROM avpets WHERE petid = '$petid';");
    $stmt->execute();
     if($stmt->rowcount()==0){
            $petidErr="Invalid PetID";
             $error=true;
           }
           else
           {
           	$stmt=$conn->query("SELECT availadopt FROM avpets where petid='$petid';");
    	$stmt->execute();
    	$avail=$stmt->fetch();
    	   if($avail[0]=='In Adoption Process')
    	    {
    	    	$petidErr="Sorry....The Pet With Specified PetID Is Already Under Adoption Process....";
    	    	$error=true;
    	    }
    	  else if($avail[0]=='Adopted') 
    	  {
    	  	$petidErr="Sorry....The Pet With Specified PetID Has Already Been Adopted....";
    	  	$error=true;
    	  }
       }
   }
       else
       {
       	     $petidErr="Enter Valid PetID of Respective Dog/Puppy";
             $error=true;
       }

}
else
{
	$petid=NULL;
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)||(empty($_POST['email']))) {
      $emailErr = "Enter Valid Email";
      $error=true;
}
else{
    $email=$_POST['email'];
}
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
      $nameErr = "Only Letters and White Space Allowed";
      $error=true;
}
else if(empty($_POST['name']))
{
	 $nameErr = "Enter Valid Name";
      $error=true;
}
else{
    $name=$_POST['name'];
}
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['care'])) {
      $careErr = "Only Letters and White Space Allowed";
      $error=true;
}
else if(empty($_POST['care']))
{
	 $careErr = "Please Answer This One";
      $error=true;
}
else{
    $care=$_POST['care'];
}

if(empty($_POST['age']))
{
	$ageErr="Please Select One Of The Options";
}
else
{
	$age=$_POST['age'];
}
if(empty($_POST['prof']))
{
	$profErr="Please Select One Of The Options";
}
else
{
	$prof=$_POST['prof'];
}
if(empty($_POST['living']))
{
	$livingErr="Please Select One Of The Options";
}
else
{
	$living=$_POST['living'];
}
if(empty($_POST['residence']))
{
	$residenceErr="Please Select One Of The Options";
}
else
{
	$residence=$_POST['residence'];
}
if(empty($_POST['floor']))
{
	$floorErr="Please Select One Of The Options";
}
else
{
	$floor=$_POST['floor'];
}
if(empty($_POST['house']))
{
	$houseErr="Please Select One Of The Options";
}
else
{
	$house=$_POST['house'];
}
if(empty($_POST['neighbour']))
{
	$neighbourErr="Please Select One Of The Options";
}
else
{
	$neighbour=$_POST['neighbour'];
}
if(empty($_POST['experience']))
{
	$experienceErr="Please Select One Of The Options";
}
else
{
	$experience=$_POST['experience'];
}
if(empty($_POST['primary']))
{
	$primaryErr="Please Select One Of The Options";
}
else
{
	$primary=$_POST['primary'];
}
if(empty($_POST['hoursaway']))
{
	$hoursawayErr="Please Select One Of The Options";
}
else
{
	$hoursaway=$_POST['hoursaway'];
}
if(empty($_POST['doghome']))
{
	$doghomeErr="Please Select One Of The Options";
}
else
{
	$doghome=$_POST['doghome'];
}
if(empty($_POST['replace']))
{
	$replaceErr="Please Select One Of The Options";
}
else
{
	$replace=$_POST['replace'];
}
if(empty($_POST['diet']))
{
	$dietErr="Please Select One Of The Options";
}
else
{
	$diet=$_POST['diet'];
}
if(empty($_POST['tiedup']))
{
	$tiedupErr="Please Select One Of The Options";
}
else
{
	$tiedup=$_POST['tiedup'];
}
if(empty($_POST['sleepplace']))
{
	$sleepplaceErr="Please Select One Of The Options";
}
else
{
	$sleepplace=$_POST['sleepplace'];
}
if(empty($_POST['access']))
{
	$accessErr="Please Select One Of The Options";
}
else
{
	$access=$_POST['access'];
}
if(empty($_POST['return']))
{
	$returnErr="Please Select One Of The Options";
}
else
{
	$return=$_POST['return'];
}
if(empty($_POST['dogage']))
{
	$dogageErr="Please Select One Of The Options";
}
else
{
	$dogage=$_POST['dogage'];
}
if(empty($_POST['gender']))
{
	$genderErr="Please Select One Of The Options";
}
else
{
	$gender=$_POST['gender'];
}
if(empty($_POST['breed']))
{
	$breedErr="Please Select One Of The Options";
}
else
{
	$breed=$_POST['breed'];
}
if(empty($_POST['special']))
{
	$specialErr="Please Select One Of The Options";
}
else
{
	$special=$_POST['special'];
}
if(empty($_POST['contact']))
{
	$contactErr="Please Select One Of The Options";
}
else
{
	$contact=$_POST['contact'];
}
if(empty($_POST['contacttime']))
{
	$contacttimeErr="Please Select One Of The Options";
}
else
{
	$contacttime=$_POST['contacttime'];
}
if(empty($_POST['eligible']))
{
	$eligibleErr="Please Select One Of The Options";
}
else
{
	$eligible=$_POST['eligible'];
}
if(empty($_POST['vet']))
{
	$vetErr="Please Select One Of The Options";
}
else
{
	$vet=$_POST['vet'];
}
$additional=$_POST['additional'];

if(($error==false)){
	require("PHPMailer_5.2.4/class.phpmailer.php");

$message='Thank You For Your Heart-Warming Response Of Dog Adoption Application.'.'<br>'.'Your Application Is In Process Now.'.'<br>'.'Once It Is Processed, We Will Call You Regarding The Further Steps To Be Followed.'.'<br><br>'.'Regards,'.'<br>'.'Pet Pash';

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
$mail->Subject = 'Response Recorded Successfully';
$mail->Body = $message;

        if($mail->send())
        {
	date_default_timezone_set("Asia/Kolkata");
    $date1=date("Y/m/d h:i:sa");
        $stmt=$conn->prepare("INSERT INTO adopt VALUES (:id,:petid,:dt,:city,:phn);");
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':petid',$petid);
        $stmt->bindParam(':dt',$date1);
        $stmt->bindParam(':city',$city);
        $stmt->bindParam(':phn',$mob);
        $st=$stmt->execute();
        $stmt=$conn->query("UPDATE avpets SET availadopt='In Adoption Process' WHERE petid='$petid';");
    	$stmt->execute();

    	$file_open=fopen("adopt.csv","a");
        $no_rows=count(file("adopt.csv"));
        
        $form_data=array($no_rows, $id,$name,$email,$age,$prof,$living,$residence,$floor,$house,$neighbour,$care,$experience,
                          $primary,$hoursaway,$doghome,$replace,$diet,$tiedup,$sleepplace,$access,$return,$dogage,$gender,$breed,
                           $special,$contact,$contacttime,$eligible,$additional);
        
        fputcsv($file_open,$form_data,';');
        fclose($file_open);

       if($st){
           header("location:adoptthank.php");
        }
        else{
               echo "Error In Processing. Please Try Again. ";
         }
    }
    else
    {
    	echo "Error In Processing. Please Try Again. ";
    }
}

 }
}

?>



<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="dogcat.css">
        <link rel="icon" type="image/ico" href="paw.png">
        <title>Dog Adoption Application</title>
        <script type="text/javascript">

          function Otherop(val)
          {
          	var element=document.getElementById('otherprof');
          	if(val=="Other")
          	{
          		element.style.display="block";
          	}
          	else
          	{
          		element.style.display="none";
          	}
          }

        </script>
    </head>
<body class="dogs">
	<div class="nav">
    <nav>
        <ul> <span>
  <li><a class="active" href="signin.php">Back To Home Page</a></li>
  <li><a href="signout.php" style="position:absolute; right:10px">Log Out</a></li>
   <li><a href="adoption.php" style="position:absolute; right:650px">Back To Adoption Page</a></li>
            </span>
</ul>
    </nav>
        </div>
  <form name="adoptdog" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <div class="container">
		<div class="col-sm-12">
			<div class="mm-survey">

				<div class="mm-survey-bottom">
					<div class="mm-survey-container">

						<div class="mm-survey-page active" data-page="1">
							<div class="mm-survery-content">
                                    <h1>Application for Adoption From PetPash Pune</h1>
                                <h3>We Are Thrilled That You Want To Adopt A Puppy/Dog From PetPash! Please Fill
                                   This Form With As Many  Details As Possible To Help Us Screen Your Application 
                                   To The Best Of Our Ability. Our Adoption Coordinator Will Conatct You Soon When 
                                   Your Application Has Been Processed. Thank You!
                                </h3>
                                    <p style=color:;> * Required</p>
								<div class="mm-survey-question">
									<p>1)Email Address (Gmail Account) *</p>
								</div>
								<div class="mm-survey-item">
									<input type="text" placeholder="Your Email" id="radio222" data-item="1" name="email" size="209" tabindex=1  maxlength="255" />
									<span class="error" style="color: red"> <?php echo $emailErr?></span>
								</div>
                                <div class="mm-survey-question">
									<p>2)Your Name *</p>
								</div>
                                <div class="mm-survey-item">
									<input type="text" placeholder="Your Name" id="radio01" data-item="1" name="name" size="209" tabindex=1  maxlength="10" />
									<span class="error" style="color: red"> <?php echo $nameErr?></span>
								</div>
                                <div class="mm-survey-question">
									<p>3)Your City *</p>
								</div>
                                <div class="mm-survey-item">
									<input type="text" placeholder="Your City" id="radio01" data-item="1" name="city" size="209" tabindex=1  maxlength="10" />
									<span class="error" style="color: red"> <?php echo $cityErr?></span>
								</div>
								<div class="mm-survey-question">
									<p>4)Your Mobile Number *</p>
								</div>
                                <div class="mm-survey-item">
									<input type="text" placeholder="Your Mobile Number" id="radio01" data-item="1" name="mob" size="209" tabindex=1  maxlength="10" />
									<span class="error" style="color: red"> <?php echo $mobErr?></span>
								</div>
                                <div class="mm-survey-question">
									<p>5)Your Age Group *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $ageErr?></span><br>
									<input type="radio" id="radio02" data-item="1" name="age" value="Under 18" />
									<label for="radio02"><span></span>Under 18 years</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio03" data-item="1" name="age" value="18-21" />
									<label for="radio03"><span></span>18-21 years</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio04" data-item="1" name="age" value="12-25" />
									<label for="radio04"><span></span>12-25 years</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio05" data-item="1" name="age" value="12-25" />
									<label for="radio05"><span></span>26-50 years</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio06" data-item="1" name="age" value="50 Above" />
									<label for="radio06"><span></span>50 years+</label>
								</div>
                                 <div class="mm-survey-question">
									<p>6)I am a ... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $profErr?></span><br>
									<input type="radio" id="radio07" data-item="1" name="prof" value="Working Professional" />
									<label for="radio07"><span></span>Working Professional.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio08" data-item="1" name="prof" value="Work From Home" />
									<label for="radio08"><span></span>Work From Home.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio09" data-item="1" name="prof" value="Currently not Working" />
									<label for="radio09"><span></span>Currently not Working.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio10" data-item="1" name="prof" value="Stay at home Mother/Father" />
									<label for="radio10"><span></span>Stay at home Mother/Father.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio11" data-item="1" name="prof" value="Student" />
									<label for="radio11"><span></span>Student.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio12" data-item="1" name="prof" value="Retired" />
									<label for="radio12"><span></span>Retired.</p></label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio13" data-item="1" name="prof" value="Other" onclick="Otherop(this.value);"/>
									<label for="radio13"><span></span>Other.</label>
                                <input type="text" placeholder="Your Answer" data-item="1" id="otherprof" name="otherprof" size="80" tabindex=1  maxlength="255" style="display:none"/>
								</div>
                                <div class="mm-survey-question">
                                    <h3><div class="mm-survey-item1">
                                        Living Arrangements
                                        </div>
                                    </h3>
									<p>7)Please select who all live with you at Home...  *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $livingErr?></span><br>
									<input type="radio" id="radio14" data-item="1" name="living" value="I live on my own" />
									<label for="radio14"><span></span>I live on my own.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio15" data-item="1" name="living" value="Husband/Wife" />
									<label for="radio15"><span></span>Husband/Wife.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio16" data-item="1" name="living" value="Child/Children" />
									<label for="radio16"><span></span>Child/Children.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio17" data-item="1" name="living" value="Mother/Father" />
									<label for="radio17"><span></span>Mother/Father.<label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio18" data-item="1" name="living" value="Grandparents/Senior Citizen" />
									<label for="radio18"><span></span>Grandparents/Senior Citizen.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio19" data-item="1" name="living" value="Extended Family" />
									<label for="radio19"><span></span>Extended Family.</label>
                                </div>
                                 <div class="mm-survey-question">
									<p>8)My places of residence is... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $residenceErr?></span><br>
									<input type="radio" id="radio20" data-item="1" name="residence" value="Permanent" />
									<label for="radio20"><span></span>Permanent.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio21" data-item="1" name="residence" value="Temporary" />
									<label for="radio21"><span></span>Temporary.</label>
								</div>
                                 <div class="mm-survey-question">
									<p>9)I live on the.....*</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $tiedupErr?></span><br>
									<input type="radio" id="radio22" data-item="1" name="floor" value="Ground Floor or 1st Floor" />
									<label for="radio22"><span></span>Ground Floor or 1st Floor.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio23" data-item="1" name="floor" value="2nd Floor or Higher" />
									<label for="radio23"><span></span>2nd Floor or Higher.</label>
								</div>
                                 <div class="mm-survey-question">
									<p>10)My House..... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $houseErr?></span><br>
									<input type="radio" id="radio24" data-item="1" name="house" value="Is on ground floor and its impossible to grill/mesh up the exit" />
									<label for="radio24"><span></span>Is on ground floor and its impossible to grill/mesh up the exit.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio25" data-item="1" name="house" value="Has no open balconies/terraces" />
									<label for="radio25"><span></span>Has no open balconies/terraces.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio26" data-item="1" name="house" value="Has balconies/terraces that are dog safe/can be made dog safe or my ground floor house has window with grills/mesh" />
									<label for="radio26"><span></span>Has balconies/terraces that are dog safe/can be made dog safe or my ground floor house has window with grills/mesh.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio27" data-item="1" name="house" value="Has balconies/terraces but Iam sure dog won't jump out" />
									<label for="radio27"><span></span>Has balconies/terraces but Iam sure dog won't jump out.</label>
								</div>
                                <div class="mm-survey-question">
									<p>11)Will your neighbours object to your decision to adopt a dog? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $neighbourErr?></span><br>
									<input type="radio" id="radio28" data-item="1" name="neighbour" value="Yes" />
									<label for="radio28"><span></span>Yes.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio29" data-item="1" name="neighbour" value="No" />
									<label for="radio29"><span></span>No.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio30" data-item="1" name="neighbour" value="Maybe" />
									<label for="radio30"><span></span>Maybe.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio31" data-item="1" name="neighbour" value="I do not have neighbours" />
									<label for="radio31"><span></span>I do not have neighbours.</label>
								</div>
                                <div class="mm-survey-question">
                                    <h3><div class="mm-survey-item1">
                                        Dog Care and Well-Being
                                        </div></h3>
									<p>12)Do you have any other Pets? *</p>
                                   <p> <input type="text" placeholder="Yes or No and please provide any more details about your existing pet if any" id="radio32" data-item="1" name="care" size="207" tabindex=1  maxlength="500" />
                                   	<span class="error" style="color: red"> <?php echo $careErr?></span><br>
                                    </p>
                                </div>
                                
                                
                                <div class="mm-survey-question">
                                <p>13)Have you ever had a dog Before? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $experienceErr?></span><br>
									<input type="radio" id="radio00" data-item="1" name="experience" value="Yes" />
									<label for="radio00"><span></span>Yes.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio101" data-item="1" name="experience" value="No" />
									<label for="radio101"><span></span>No.</label>
								</div>
                                
                                <div class="mm-survey-question">
                                <p>14)Will you be the Primary care-giver of the Dog? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $primaryErr?></span><br>
									<input type="radio" id="radio102" data-item="1" name="primary" value="Yes" />
									<label for="radio102"><span></span>Yes.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio103" data-item="1" name="primary" value="No" />
									<label for="radio102"><span></span>No.</label>
								</div>
                                 <div class="mm-survey-item">
									<input type="radio" id="radio103" data-item="1" name="primary" value="Maybe" />
									<label for="radio103"><span></span>Maybe.</label>
								</div>
                                
                                  <div class="mm-survey-question">
                                <p>15)How many hours will you be away from home every day (including your commute time)? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $hoursawayErr?></span><br>
									<input type="radio" id="radio104" data-item="1" name="hoursaway" value="Never"  />
									<label for="radio104"><span></span>Never.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio105" data-item="1" name="hoursaway" value="Less than 1 hour" />
									<label for="radio105"><span></span>Less than 1 hour.</label>
								</div>
                                 <div class="mm-survey-item">
									<input type="radio" id="radio106" data-item="1" name="hoursaway" value="1-3 Hours" />
									<label for="radio106"><span></span>1-3 Hours.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio107" data-item="1" name="hoursaway" value="3-8 Hours" />
									<label for="radio107"><span></span>3-8 Hours.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio108" data-item="1" name="hoursaway" value="8 Hours or more" />
									<label for="radio108"><span></span>8 Hours or more.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio109" data-item="1" name="hoursaway" value="I may be out long but there will be someone at home" />
									<label for="radio109"><span></span>I may be out long but there will be someone at home.</label>
								</div>
                                
                                                                  <div class="mm-survey-question">
                                <p>16)Where will the dog be kept for most it's day? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $doghomeErr?></span><br>
									<input type="radio" id="radio110" data-item="1" name="doghome" value="Inside a kennel" />
									<label for="radio110"><span></span>Inside a kennel.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio111" data-item="1" name="doghome" value="Tied within a specific room in the house" />
									<label for="radio111"><span></span>Tied within a specific room in the house.</label>
								</div>
                                 <div class="mm-survey-item">
									<input type="radio" id="radio112" data-item="1" name="doghome" value="Tied outside the house" />
									<label for="radio112"><span></span>Tied outside the house.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio113" data-item="1" name="doghome" value="Free to roam inside the house or appartment" />
									<label for="radio113"><span></span>Free to roam inside the house or appartment.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio114" data-item="1" name="doghome" value="Outside the house with a gated compound" />
									<label for="radio114"><span></span>Outside the house with a gated compound.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio115" data-item="1" name="doghome" value="Covered balcony or porch" />
									<label for="radio115"><span></span>Covered balcony or porch.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio116" data-item="1" name="doghome" value="Shed area outside the house" />
									<label for="radio116"><span></span>Shed area outside the house.</label>
								</div>

                                                                  <div class="mm-survey-question">
                                <p>17)If you go out of town for more two days you will? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $replaceErr?></span><br>
									<input type="radio" id="radio117" data-item="1" name="replace" value="Get a dog-sitter to come home once a day to feed and walk tha dog" />
									<label for="radio117"><span></span>Get a dog-sitter to come home once a day to feed and walk tha dog.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio118" data-item="1" name="replace" value="Board the dog in a Dog Hostel" />
									<label for="radio118"><span></span>Board the dog in a Dog Hostel.</label>
								</div>
                                 <div class="mm-survey-item">
									<input type="radio" id="radio119" data-item="1" name="replace" value="Give it to a friend/family to babysit when I am out" />
									<label for="radio119"><span></span>Give it to a friend/family to babysit when I am out.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio120" data-item="1" name="replace" value="Get a maid or caretaker to stay at my home and take care of the dog" />
									<label for="radio120"><span></span>Get a maid or caretaker to stay at my home and take care of the dog.</label>
								</div>
                                
                                                                  <div class="mm-survey-question">
                                <p>18)What diet will your dog be on ? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $dietErr?></span><br>
									<input type="radio" id="radio121" data-item="1" name="diet" value="Packaged food only-like Pedigree,Royal Canin ,Fidele etc"  />
									<label for="radio121"><span></span>Packaged food only-like Pedigree,Royal Canin ,Fidele etc.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio122" data-item="1" name="diet" value="Home cooked-Non vegeterian only" />
									<label for="radio122"><span></span>Home cooked-Non vegeterian only.</label>
								</div>
                                 <div class="mm-survey-item">
									<input type="radio" id="radio123" data-item="1" name="diet" value="Home cooked-Vegeterian only" />
									<label for="radio123"><span></span>Home cooked-Vegeterian only.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio124" data-item="1" name="diet" value="Home cooked-with Eggs" />
									<label for="radio124"><span></span>Home cooked-with Eggs.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio125" data-item="1" name="diet" value="Rice/Rolls with Milk" />
									<label for="radio125"><span></span>Rice/Rolls with Milk.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio126" data-item="1" name="diet" value="Not Sure" />
									<label for="radio126"><span></span>Not Sure.</label>
								</div>
                                
                                                                  <div class="mm-survey-question">
                                <p>19)How many hours in a day will your dog be Tied up ? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $tiedupErr?></span><br>
									<input type="radio" id="radio200" data-item="1" name="tiedup" value="For 1-2 hours when my maid comes to clean" />
									<label for="radio200"><span></span>For 1-2 hours when my maid comes to clean.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio127" data-item="1" name="tiedup" value="For a few hours everyday when everyone is busy" />
									<label for="radio127"><span></span>For a few hours everyday when everyone is busy.</label>
								</div>
                                 <div class="mm-survey-item">
									<input type="radio" id="radio128" data-item="1" name="tiedup" value="Zero hours" />
									<label for="radio128"><span></span>Zero hours.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio129" data-item="1" name="tiedup" value="For few hours if the dog is misbehaving and needs to be displined" />
									<label for="radio129"><span></span>For few hours if the dog is misbehaving and needs to be displined.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio130" data-item="1" name="tiedup" value="I will mostly tie the dog up to prevent from running away, but I will provide walks " />
									<label for="radio130"><span></span>I will mostly tie the dog up to prevent from running away, but I will provide walks .</label>
								</div>
                                
                                
                                 <div class="mm-survey-question">
									<p>20)Where will the puppy/dog sleep at night? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $sleepplaceErr?></span><br>
									<input type="radio" id="radio33" data-item="1" name="sleepplace" value="In the Kennel" />
									<label for="radio33"><span></span>In the Kennel.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio34" data-item="1" name="sleepplace" value="Covered Balcony or Porch" />
									<label for="radio34"><span></span>Covered Balcony or Porch.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio35" data-item="1" name="sleepplace" value="In its own bed placed in the House" />
									<label for="radio35"><span></span>In its own bed placed in the House.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio36" data-item="1" name="sleepplace" value="On our bed" />
									<label for="radio36"><span></span>On our bed.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio37" data-item="1" name="sleepplace" value="Spacious garage for the Dog" />
									<label for="radio37"><span></span>Spacious garage for the Dog.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio38" data-item="1" name="sleepplace" value="The Dog will sleep outside the house to guard us" />
									<label for="radio38"><span></span>The Dog will sleep outside the house to guard us.</label>
								</div>
                                <div class="mm-survey-question">
									<p>21)Is There any part of Your house that the Dog Won't have Access to? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $accessErr?></span><br>
									<input type="radio" id="radio39" data-item="1" name="access" value="Pooja room" />
									<label for="radio39"><span></span>Pooja room.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio40" data-item="1" name="access" value="Kitchen" />
									<label for="radio40"><span></span>Kitchen.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio41" data-item="1" name="access" value="Bedrooms" />
									<label for="radio41"><span></span>Bedrooms.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio42" data-item="1" name="access" value="Dining Room" />
									<label for="radio42"><span></span>Dining Room.</label>
								</div>
                                <div class="mm-survey-item">
									<input type="radio" id="radio43" data-item="1" name="access" value="My Dog will be everywhere in my House" />
									<label for="radio43"><span></span>My Dog will be everywhere in my House.</label>
								</div>
                                <div class="mm-survey-question">
                                <div class="mm-survey-question">
									<p>22)I would consider returning the puppy/dog if... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $returnErr?></span><br>
									<input type="radio" id="radio47" data-item="1" name="return" value="If the pet is too shy or scared to interact with all members of the family" />
									<label for="radio47"><span></span>If the pet is too shy or scared to interact with all members of the family.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio48" data-item="1" name="return" value="If I get married" />
									<label for="radio48"><span></span>If I get married.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio49" data-item="1" name="return"value="If I have a child" />
									<label for="radio49"><span></span>If I have a child.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio50" data-item="1" name="return" value="If my Parents or Senior citizen comes to live in my house" />
									<label for="radio50"><span></span>If my Parents or Senior citizen comes to live in my house.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio52" data-item="1" name="return" value="If someone is allergetic to dogs in my house" />
									<label for="radio52"><span></span>If someone is allergic to dogs in my house.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio53" data-item="1" name="return" value="If the dog chews up my things " />
									<label for="radio53"><span></span>If the dog chews up my things .</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio54" data-item="1" name="return" value="If it dog bites or unprovokes aggression" />
									<label for="radio54"><span></span>If it dog bites or unprovokes aggression.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio55" data-item="1" name="return" value="If it pees or poops on our furniture" />
									<label for="radio55"><span></span>If it pees or poops on our furniture.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio56" data-item="1" name="return" value="If the dog has seperation anxiety " />
									<label for="radio56"><span></span>If the dog has seperation anxiety .</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio57" data-item="1" name="return" value="If the dog develops a health issue in the future" />
									<label for="radio57"><span></span>If the dog develops a health issue in the future.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio58" data-item="1" name="return" value="If I move out of the city" />
									<label for="radio58"><span></span>If I move out of the city.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio59" data-item="1" name="return" value="If my neighbour or society members ask me to return the dog" />
									<label for="radio59"><span></span>If my neighbour or society members ask me to return the dog.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio60" data-item="1" name="return" value="I would never give the puppy/dog back under any circumstance" />
									<label for="radio60"><span></span>I would never give the puppy/dog back under any circumstance.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio61" data-item="1" name="return" value="I would never give the puppy/dog to a shelter,I would find it another suitable home myself" />
									<label for="radio61"><span></span>I would never give the puppy/dog to a shelter,I would find it another suitable home myself.</label>
								</div>
                                 <div class="mm-survey-question">
                                <p>23)Age: I am looking to adopt a... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $dogageErr?></span><br>
									<input type="radio" id="radio62" data-item="1" name="dogage" value="Puppy only" />
									<label for="radio62"><span></span>Puppy only.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio63" data-item="1" name="dogage" value="Young Dog" />
									<label for="radio63"><span></span>Young Dog.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio64" data-item="1" name="dogage" value="Older Dog" />
									<label for="radio64"><span></span>Older Dog.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio65" data-item="1" name="dogage" value="Doesn't matter,either Puppy or Dog is Fine with me" />
									<label for="radio65"><span></span>Doesn't matter,either Puppy or Dog is Fine with me.</label>
								</div>
                                 <div class="mm-survey-question">
                                <p>24)Gender: I would like to adopt... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $genderErr?></span><br>
									<input type="radio" id="radio66" data-item="1" name="gender" value="A female Dog" />
									<label for="radio66"><span></span>A female Dog.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio67" data-item="1" name="gender" value="A male Dog" />
									<label for="radio67"><span></span>A male Dog.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio68" data-item="1" name="gender" value="Doesn't matter,fine with any" />
									<label for="radio68"><span></span>Doesn't matter,fine with any.</label>
								</div>
                                <div class="mm-survey-question">
								<p>25)Breed: I would like to adopt a... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $breedErr?></span><br>
									<input type="radio" id="radio69" data-item="1" name="breed" value="Indian/Mixed Breed puppy or dog" />
									<label for="radio69"><span></span>Indian/Mixed Breed puppy or dog.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio70" data-item="1" name="breed" value="Pedigree/Purebred puppy/dog" />
									<label for="radio70"><span></span>Pedigree/Purebreed puppy/dog.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio71" data-item="1" name="breed" value="Doesn't matter ,any is fine" />
									<label for="radio71"><span></span>Doesn't matter ,any is fine.</label>
								</div>
								<div class="mm-survey-question">
								<p>26)Would you be comfortable and confident caring for a special-needs dog.i.e aprt that is disabled or requiring more medical attention than an otherwise healthy dog? *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $specialErr?></span><br>
									<input type="radio" id="radio72" data-item="1" name="special" value="Yes" />
									<label for="radio72"><span></span>Yes.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio73" data-item="1" name="special" value="No" />
									<label for="radio73"><span></span>No.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio74" data-item="1" name="special" value="Maybe" />
									<label for="radio74"><span></span>Maybe.</label>
								</div>
                                <div class="mm-survey-question">
								<p>27)Is there any specific PetPash Dog/Puppy that you would like to adopt as shown in the adoption table before?  If Yes Enter the PetID Else Write Nil. (Please Enter PetID Only) *</p>
                                    <p> <input type="text" placeholder="Write PetID of that pet or write Nil" id="radio75" data-item="1" name="choice" size="204" tabindex=1  maxlength="255" /></p>
                                    <span class="error" style="color: red"> <?php echo $petidErr?></span><br>
								</div>
                                 <div class="mm-survey-question">
								<p>28)I am agreeable to....... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $contactErr?></span><br>
									<input type="radio" id="radio81" data-item="1" name="contact" value="Telephonic Interview" />
									<label for="radio81"><span></span>Telephonic Interview.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio82" data-item="1" name="contact" value="Whatsapp/Video Interview to conduct a house-check and meet my whole family " />
									<label for="radio82"><span></span>Whatsapp/Video Interview to conduct a house-check and meet my whole family .</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio83" data-item="1" name="contact" value="Physical house check" />
									<label for="radio83"><span></span>Physical house check.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio84" data-item="1" name="contact" value="All of the above" />
									<label for="radio84"><span></span>All of the above.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio85" data-item="1" name="contact" value="None of the Above" />
									<label for="radio85"><span></span>None of the Above.</label>
								</div>
                                 <div class="mm-survey-question">
								<p>29)I would like to be contacted during....... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $contacttimeErr?></span><br>
									<input type="radio" id="radio86" data-item="1" name="contacttime" value="Weekdays Only" />
									<label for="radio86"><span></span>Weekdays Only.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio87" data-item="1" name="contacttime" value="Weekends only " />
									<label for="radio87"><span></span>Weekends only .</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio88" data-item="1" name="contacttime" value="Any day is fine" />
									<label for="radio88"><span></span><p>Any day is fine.</p></label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio89" data-item="1" name="contacttime" value="Between 9:00am-12:00pm" />
									<label for="radio89"><span></span>Between 9:00am-12:00pm.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio90" data-item="1" name="contacttime" value="Between 12:00pm-5:00pm" />
									<label for="radio90"><span></span>Between 12:00pm-5:00pm.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio91" data-item="1" name="contacttime" value="Between 5:00pm-7:00pm" />
									<label for="radio91"><span></span>Between 5:00pm-7:00pm.</label>
								</div>
                                <div class="mm-survey-question">
								<p>30)In case I am not resident of Pune but eligible to adopt from PetPash, I would....... *</p>
								</div>
								<div class="mm-survey-item">
									<span class="error" style="color: red"> <?php echo $eligibleErr?></span><br>
									<input type="radio" id="radio92" data-item="1" name="eligible" value="Travel by road/air to the PetPash Center in Pune and collect my new best Friend" />
									<label for="radio92"><span></span>Travel by road/air to the PetPash Center in Pune and collect my new best Friend.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio93" data-item="1" name="eligible" value="Expect PetPash team to transport the animal to me" />
									<label for="radio93"><span></span>Expect PetPash team to transport the animal to me.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio94" data-item="1" name="eligible" value="Bear the costs for road/air transport for a PetPash employee to bring the animal to me" />
									<label for="radio94"><span></span>Bear the costs for road/air transport for a PetPash employee to bring the animal to me.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio95" data-item="1" name="eligible" value="Use a private Pet transport service to bring the animal to me" />
									<label for="radio95"><span></span>Use a private Pet transport service to bring the animal to me.</label>
								</div>
								<div class="mm-survey-item">
									<input type="radio" id="radio96" data-item="1" name="eligible" value="I am a resident of Pune" />
									<label for="radio96"><span></span>I am a resident of Pune.</label>
								</div>
                                <div class="mm-survey-question">
								<p>31)Have we missed anything? Please feel free to mention any additional information that will help us understand you as a pet parent! *</p>
                                    <p> <textarea cols="80" rows="2" placeholder="Yes or No ,name the puppy or dog ,if possible" id="radio97" data-item="1" name="additional" size="80" tabindex=1  maxlength="255" /></textarea></p>
								</div>
                                
							</div>
						</div>
					
						<input type="submit" id="placeorderbtn1" value="CLICK TO SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset" id="placeorderbtn2" value="CLICK TO CLEAR">

					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</body>
</html>
