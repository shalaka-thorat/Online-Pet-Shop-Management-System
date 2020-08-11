<html>
<head>
	<title>Payment Processing</title>
	<link rel="stylesheet" href="payprocess.css">
    <link rel="icon" type="image/ico" href="paw.png">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <script type="text/javascript">
      function changef()
      {
        window.location="paymentprocess1.php";
      	alert("Payment Successful");
        setTimeout(placed,3000);
      }

      function placed()
      {
        alert("Order Placed Successfully....");
      }

    </script>
</head>
<body onload="setTimeout(changef,5000)">
	<div id="loader-wrapper">
    <div id="loader"></div>
        </div>
</body>
</html>





