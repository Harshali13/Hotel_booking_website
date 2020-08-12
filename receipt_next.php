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



$crid=$_GET['cid'];
$user=$_GET["user"];
$passcode=$_GET["passcode"];
$mysql="SELECT ROOM_TYPE from CUSTOMER_DETAIL WHERE  REG_ID=$crid";
$result=mysqli_query($conn,$mysql);
$result=mysqli_fetch_assoc($result);
$type = $result['ROOM_TYPE'];

if($type=='Custom'){
  $x=100;
  $data="SELECT * FROM CUSTOM_ROOMS WHERE REG_ID=$crid";
$value=mysqli_query($conn,$data);     
$v=mysqli_fetch_row($value);
}
elseif ($type=='Premium') {
  $x=235;
  $data="SELECT * FROM PREMIUM_ROOMS WHERE REG_ID=$crid";
$value=mysqli_query($conn,$data);     
$v=mysqli_fetch_row($value);
}
else{
  $x=350;
  $data="SELECT * FROM SUPER_DELUXE_ROOMS WHERE REG_ID=$crid";
$value=mysqli_query($conn,$data);     
$v=mysqli_fetch_row($value);
}

$data="SELECT * FROM CUSTOMER_DETAIL WHERE REG_ID=$crid";
$val=mysqli_query($conn,$data);     
$r=mysqli_fetch_row($val);







$mysql="SELECT USERNAME,PASSCODE from CUSTOMER_DETAIL WHERE  REG_ID=$crid";
  $result=mysqli_query($conn,$mysql);
  $result=mysqli_fetch_assoc($result);
  $username = $result['USERNAME'];
  $password = $result['PASSCODE'];
  if($user!=$username || $passcode!=$password){
    
$r=0;
$v=0;

}






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
          <h3 style="text-align: right;">Customer ID: <?php echo $crid; ?></h3>  
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
              <strong>Check In: <?php echo $v[7]; ?></strong><br>
              <br> <strong>Check Out: <?php echo $v[8]; ?></strong><br>
             
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
                      <td class="text-center"><?php echo $v[2]; ?></td> <!-- room type-->
                      <td class="text-center"><?php echo $v[3]; ?></td><!-- room see-->
                      <td class="text-center"><?php echo $v[4]; ?></td><!-- no of person-->
                      <td class="text-center"><?php echo $v[11]; ?></td><!-- special-->
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
                      <td class="text-center"><?php echo "$5 : ".$v[9]; ?></td> <!-- room type-->
                      <td class="text-center"><?php echo "$20 : ".$v[10];  ?></td><!-- room see-->
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