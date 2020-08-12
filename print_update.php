<?php 
include_once 'includes/dbh_connect.php';

$crid=$_GET["crid"];
$scene=$_GET["scene"];
$person=$_GET["person"];
$adult=$_GET["adult"];
$child=$_GET["child"];
$checkin=$_GET["checkin"];
$checkout=$_GET["checkout"];
$wifi=$_GET["wifi"];
$trguide=$_GET["trguide"];
$sugg=$_GET["sugg"];


$mysql="SELECT ROOM_TYPE FROM CUSTOMER_DETAIL WHERE REG_ID=$crid ";
$result=mysqli_query($conn,$mysql);
$result=mysqli_fetch_assoc($result);
$room = $result['ROOM_TYPE'];
//echo $room;

	if($room == 'Custom'){
		
		$sql="UPDATE CUSTOM_ROOMS  SET ROOM_SCENE='$scene',PERSON='$person' ,ADULT='$adult',CHILD='$child' ,CHECKIN='$checkin' ,CHECKOUT='$checkout' ,WIFI='$wifi' , TRAVEL_GUIDE='$trguide',SPECIAL_INSTRUCT='$sugg' WHERE REG_ID=$crid";
		$result=mysqli_query($conn,$sql);
	}
	
	elseif ($room== 'Premium') {
		$sql="UPDATE PREMIUM_ROOMS  SET ROOM_SCENE='$scene',PERSON='$person' ,ADULT='$adult',CHILD='$child' ,CHECKIN='$checkin' ,CHECKOUT='$checkout' ,WIFI='$wifi' , TRAVEL_GUIDE='$trguide',SPECIAL_INSTRUCT='$sugg' WHERE REG_ID=$crid";
		$result=mysqli_query($conn,$sql);
	}
	elseif ($room== 'Super Deluxe') {
		$sql="UPDATE SUPER_DELUXE_ROOMS  SET ROOM_SCENE='$scene',PERSON='$person' ,ADULT='$adult',CHILD='$child' ,CHECKIN='$checkin' ,CHECKOUT='$checkout' ,WIFI='$wifi' , TRAVEL_GUIDE='$trguide',SPECIAL_INSTRUCT='$sugg' WHERE REG_ID=$crid";
		$result=mysqli_query($conn,$sql);
	}


if ($conn->query($result) == TRUE) {
   // echo "New record created successfully";
} else {
    //echo "Error: " . $result . "<br>" . $conn->error;
}

?>

<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>SAKURA SKY</title>
	
</head>
<body>
<?php 
include_once 'includes/dbh_connect.php';

if($room=='Custom'){
	$x=100;
}
elseif ($room=='Premium') {
	$x=235;
}
else{
	$x=350;
}

$data="SELECT * FROM CUSTOMER_DETAIL WHERE REG_ID=$crid";
$val=mysqli_query($conn,$data);			
$r=mysqli_fetch_row($val);

?>
<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="invoice-title">
          <center><h2 style="font-family: fantasy;">SAKURA SKY HOTEL</h2></center>
          <div class="row">
            <div class="col-md-6">
            <h3> <?php echo $r[1]."  ".$r[2]; ?> </h3>
          </div>
          <div class="col-md-6">
          <h3 style="text-align: right;">Customer ID: <?php echo $id; ?></h3>  
          </div>
        </div>
          
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6 text-left">
            <address>
              Email ID: <?php echo $r[4]; ?><br>
              Contact No.: <?php echo $r[5]; ?><br>
              Username: <?php echo $r[3]; ?>
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Check In: <?php echo $checkin; ?></strong><br>
              <br> <strong>Check Out: <?php echo $checkout; ?></strong><br>
             
            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            
          </div>
          <div class="col-xs-6 text-right">
           
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>ACCOMODATION DETAILS</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td class="text-center"><strong>Room Type</strong></td>
                      <td class="text-center"><strong>Room veiw</strong></td>
                      <td class="text-center"><strong>No. of Person</strong></td>
                      <td class="text-center"><strong>Special Requests</strong></td>
                      
                                </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                  <tr>
                      <td class="text-center"><?php echo $room; ?></td> <!-- room type-->
                      <td class="text-center"><?php echo $scene; ?></td><!-- room see-->
                      <td class="text-center"><?php echo $person; ?></td><!-- no of person-->
                      <td class="text-center"><?php echo $sugg; ?></td><!-- special-->
                  </tr>
                                <tr>
                      
                   
                  </tr>
                                <tr>
                      
                  </tr>
                  <tr>
                    
                  </tr>
                  
                  <tr>
                   
                  </tr>
                </tbody>
              </table>
               <table class="table table-condensed">
                <thead>
                                <tr>
                      <td class="text-center"><strong>WiFi</strong></td>
                      <td class="text-center"><strong>Travel Guide</strong></td>
                      <td class="text-center"><strong>Arrangements</strong></td>
                      <td class="text-center"><strong>Room Charges</strong></td>
                      
                                </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                  <tr>
                      <td class="text-center"><?php echo "$5 : ".$wifi; ?></td> <!-- room type-->
                      <td class="text-center"><?php echo "$20 : ".$trguide;  ?></td><!-- room see-->
                      <td class="text-center"><?php echo "Variable amount";  ?></td><!-- no of person-->
                      <td class="text-center"><?php echo "$".$x ?></td><!-- special-->
                  </tr>
                                <tr>
                      
                   
                  </tr>
                                <tr>
                      
                  </tr>
                  <tr>
                    
                  </tr>
                  
                  <tr>
                   
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<br><br>
<center>
<a class="btn btn-primary" style="width: 150px; background-color: black" name="btn" id="btn" href="home.html">BACK TO HOME</a>
</center>
</body>
</html>