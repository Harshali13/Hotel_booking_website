<!DOCTYPE html>
<html>

<?php
include_once 'includes/dbh_connect.php';

$cid=$_GET["cid"];
$mysql="SELECT ROOM_TYPE from CUSTOMER_DETAIL WHERE  REG_ID=$cid";
$result=mysqli_query($conn,$mysql);
$result=mysqli_fetch_assoc($result);
$room = $result['ROOM_TYPE'];

?>



<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
  <title>HOTEL SAKURA SKY</title>
  
  <style>
  body {
     background-color: lightyellow;
  }
  h1,h3,h5,li{
    text-align: center;
    font-family: fantasy;
    color: white;

  }
  h4{
    text-align: center;
    font-family: fantasy;
    color: black;

  }
hr{
  border:1px solid black;
  width: 70%;
}
  footer{
    background-color: black;
  }
  body {
  background-color: lightgray;
}
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <font face="Algerian">SAKURA SKY</font>
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item ">
        <a class="nav-link" href="home.html" >HOTEL AND RESTAURENTS |</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          RESERVATIONS |
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown " style="background-color: lightgray;">
          <h6><a class="dropdown-item" href="newbook.php">NEW BOOKING</a>
          <a class="dropdown-item" href="update.php">UPDATE BOOKING</a>
          <a class="dropdown-item" href="#">CANCEL BOOKING</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contact.html">CONTACT US</a>
          </h6>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="events.html"> EVENTS AND MEETINGS |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="offers.html"> OFFERS |</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.html"> ABOUT US |</a>
      </li>
    </ul>
  </div>
</nav>
<footer class="page-footer font-small blue pt-3" style="background-color:Gray;">
  <div class="row">
   <div class="col-md-2">
   </div> 
   <div class="container-fluid text-center text-md-center col-md-8" style="font-family: fantasy; font-size:20px; background-color: lightgray; font-color: gray">
    <B>UPDATE BOOKING - Accomodation Details</B>
  </div>
  <div class="col-md-2">
   </div>
</div>



<br>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
  <form action="http://localhost/hotel/print_update.php" method="get" >
    
    <div class="form-group">
      <label for="rid">REGISTRATION ID</label>
      <input class="form-control" type="number"  id="rid" name="rid"  value="<?php echo $cid;?>" disabled>
  </div>
  <div class="form-group">
      <label for="room">ROOM TYPE</label>
      <input class="form-control" type="text"  id="room" name="room" value="<?php echo $room;?>"  disabled>
  </div>
  
    
  <center>
    <div class="form-row align-items-center">
      <label for="scene">VIEW PREFERENCE</label>
      <select class="custom-select mr-sm-2" id="scene" name="scene">
        <option selected>Choose View...</option>
        <option value="Garden scene">Garden View</option>
        <option value="Ocean scene">Ocean View</option>
        <option value="Pool scene">Pool View</option>
      </select>
    </div>
</center>
<hr style="width: 70%; border: 0.1px solid black; ">
  <div class="form-row align-items-center">
      <label for="person">NUMBER OF PERSONS</label>
      <select class="custom-select mr-sm-2" id="person" name='person'>
        <option selected value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
    </div>
  <div class="form-row">
    <div class="col-md-6">
      <label for="adult">NUMBER OF ADULTS</label>
      <select class="custom-select mr-sm-2" id="adult" name='adult'>
        <option selected value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="child">NUMBER OF CHILDREN</label>
      <select class="custom-select mr-sm-2" id="child" name='child'>
        <option selected value="0">NONE</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="checkin">CHECKIN DATE</label>
    <input class="form-control" type="tel"  id="checkin" name="checkin" pattern="^\d{2}/\d{2}/\d{4}$"  placeholder="DD/MM/YYYY" maxlength="10" required>  
  </div>
  <div class="form-group">
    <label for="checkout">CHECKOUT DATE</label>
    <input class="form-control" type="tel"  id="checkout" name="checkout" pattern="^\d{2}/\d{2}/\d{4}$"  placeholder="DD/MM/YYYY" maxlength="10" required>  
  </div>
  <hr style="width: 70%; border: 0.1px solid black; ">
   <div class="form-row align-items-center">
      <label for="wifi">NEED WIFI?</label>
      <select class="custom-select mr-sm-2" id="wifi" name='wifi' >
        <option selected value="No">--</option>
        <option value="Yes">YES</option>
        <option value="No">NO</option>
      </select>
    </div>
  <div class="form-row align-items-center">
      <label for="trguide">NEED TRAVEL GUIDE</label>
      <select class="custom-select mr-sm-2" id="trguide" name='trguide'>
        <option selected value="No">--</option>
        <option value="Yes">YES</option>
        <option value="No">NO</option>
      </select>
    </div>
  <div class="form-group">
      <label for="sugg">ANY SPECIAL ARRANGEMENTS?</label>
      <input class="form-control" type="text"  id="sugg" name="sugg"   placeholder="Type it to us" >
  </div>

  <hr style="width: 70%; border: 0.1px solid black; ">
   
  <div class="form-group">
      <label for="crid">FINAL CONFIRMATION REGISTRATION ID</label>
      <input class="form-control" type="number"  id="crid" name="crid"  required>
  </div>
<small>No changes can be made after this.</small>
<br>
  <center>
  <button type="submit" class="btn btn-primary" style="width: 150px; background-color: black">UPDATE
  </button>
  <button type="reset" class="btn btn-primary" style="width: 150px; background-color: black">RESET
  </button>
  </center>
</form>
</div>
    <div class="col">
    </div>
  </div>
</div>


<br>
<br>
<footer class="page-footer font-small blue pt-4">
  <div class="container-fluid text-center text-md-center">
    <h3 class="text-uppercase">COME, GET US AT SAKURA SKY</h3>
    <hr>
    <div class="row">

      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Our Features</h5>

        <ul class="list-unstyled">
          <li>Customer Service
          </li>
          <li>Friendly Staff
          </li>
          <li>Fully Facilitated
          </li>
          <li>Peaceful Stay
          </li>
        </ul>

      </div>
    
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">For You</h5>

        <ul class="list-unstyled">
          <li>Gift Cards
          </li>
          <li>Celebrations
          </li>
          <li>Festivals & Events
          </li>
          <li>Memories for Life
          </li>
        </ul>

      </div>

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
       
        <h5>CONNECT WITH US AT</h5>
        <a href="https://www.facebook.com/"><img src="facebook.png" width="30" height="30"></a> &emsp;
        <a href="https://www.instagram.com/"><img src="insta.jpg" width="30" height="30"></a> &emsp;
        <a href="https://www.twitter.com/"><img src="twitter.png" width="30" height="30"></a>
      <hr style="border: 0.1px solid white; width: 70%">
               <h5>GET THE MOBILE APP</h5>
                <a href="https://www.googleplay.com/"><img src="google.png" width="100" height="30"></a>
      </div>




    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <h5>Email us at: sakurasky@gmail.com</h5>
    <a href="home.html">SAKURA SKY GROUP</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>