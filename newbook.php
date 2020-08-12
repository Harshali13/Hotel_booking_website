<!DOCTYPE html>
<html>
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
          <a class="dropdown-item" href="delete.php">CANCEL BOOKING</a>
          <a class="dropdown-item" href="receipt.php">PRINT RECEIPT</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contact.html">CONTACT US</a>
          </h6>
        </div>
      </li>
       <li class="nav-item  ">
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
   <br>
   <div class="container-fluid text-center text-md-center col-md-8" style="font-family: fantasy; font-size:20px; background-color: lightgray; font-color: gray">
    <B>NEW BOOKING - Personal Details</B>
  </div>
  <div class="col-md-2">
   </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
  <form action="http://localhost/hotel/newbook_next.php" method="get" >
    <div class="form-row">
    <div class="col-md-6">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
    </div>
    <div class="col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name"  required>
    </div>
  </div>
  <div class="form-group">
    <label for="user">Username</label>
    <input type="text" class="form-control" id="user" name="user"   placeholder="Enter username" required>
  
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text  " style="font-color:black;"><b>We'll never share your email with anyone else.</b></small>
  </div>
  <div class="form-group">
    <label for="contact">Contact Number(format: xxxx-xxx-xxx)</label>
    <input class="form-control" type="tel"  id="contact" name="contact" pattern="^\d{4}-\d{3}-\d{3}$"  placeholder="xxxx-xxx-xxx" maxlength="12" required>  
  </div>
    
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="passcode" name="passcode" placeholder="Password" minlength="6" required>
  </div>
  <div class="form-group">
      <center>
    <div class="form-row align-items-center">
      <label for="type">ROOM TYPE PREFERENCE</label>
      <select class="custom-select mr-sm-2" id="type" name='type'>
        <option selected>Choose ROOM TYPE...</option>
        <option value="Custom">Custom</option>
        <option value="Premium">Premium</option>
        <option value="Super Deluxe">Super Deluxe</option>
      </select>
    </div>
</center>
</div>



  
  <center>
  <button type="submit" class="btn btn-primary" style="width: 150px; background-color: black">SUBMIT
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
