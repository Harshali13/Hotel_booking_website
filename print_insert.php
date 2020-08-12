<?php 
include_once 'includes/dbh_connect.php';

$scene=$_GET["view"];
$person=$_GET["person"];
$adult=$_GET["adult"];
$child=$_GET["child"];
$checkin=$_GET["checkin"];
$checkout=$_GET["checkout"];
$wifi=$_GET["wifi"];
$trguide=$_GET["trguide"];
$sugg=$_GET["sugg"];

$mysql="SELECT REG_ID FROM CUSTOMER_DETAIL ";
$result=mysqli_query($conn,$mysql);
$rowcount=mysqli_num_rows($result);
$id=$id + $rowcount -1;

$query="SELECT ROOM_TYPE FROM CUSTOMER_DETAIL ORDER BY REG_ID DESC LIMIT 1";
$result=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($result);
$type = $result['ROOM_TYPE'];
	if($type == 'Custom'){
		$sql="SELECT ROOM_NO FROM CUSTOM_ROOMS ";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_num_rows($result);
		$num= $row + 301;
		if ($row < 50) {
		$sql="INSERT INTO CUSTOM_ROOMS (ROOM_NO,REG_ID,ROOM_TYPE,ROOM_SCENE,PERSON ,ADULT,CHILD ,CHECKIN ,CHECKOUT ,WIFI , TRAVEL_GUIDE,SPECIAL_INSTRUCT)
		VALUES ('$num','$id','$type','$scene','$person','$adult','$child','$checkin','$checkout','$wifi','$trguide','$sugg')";
	}
	else{
	echo "Rooms full";
} }
	elseif ($type== 'Premium') {
		$sql="SELECT ROOM_NO FROM PREMIUM_ROOMS ";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_num_rows($result);
		$num= $row + 301;
		if ($row < 50) {
		$sql="INSERT INTO PREMIUM_ROOMS (ROOM_NO,REG_ID,ROOM_TYPE,ROOM_SCENE,PERSON ,ADULT,CHILD ,CHECKIN ,CHECKOUT ,WIFI , TRAVEL_GUIDE,SPECIAL_INSTRUCT)
		VALUES ('$num','$id','$type','$scene','$person','$adult','$child','$checkin','$checkout','$wifi','$trguide','$sugg')";
	} 
	else{
	echo "Rooms full";
		}}
	else{
		$sql="SELECT ROOM_NO FROM SUPER_DELUXE_ROOMS_ROOMS ";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_num_rows($result);
		$num= $row + 301;
		if ($row < 50) {
		$sql="INSERT INTO SUPER_DELUXE_ROOMS (ROOM_NO,REG_ID,ROOM_TYPE,ROOM_SCENE,PERSON ,ADULT,CHILD ,CHECKIN ,CHECKOUT ,WIFI , TRAVEL_GUIDE,SPECIAL_INSTRUCT)
		VALUES ('$num','$id','$type','$scene','$person','$adult','$child','$checkin','$checkout','$wifi','$trguide','$sugg')";
	}
	else{
	echo "Rooms full";
} }
	


 
 





if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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

if($type=='Custom'){
	$x=100;
}
elseif ($type=='Premium') {
	$x=235;
}
else{
	$x=350;
}

$data="SELECT * FROM CUSTOMER_DETAIL WHERE REG_ID=$id";
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
                      <td class="text-center"><?php echo $type; ?></td> <!-- room type-->
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