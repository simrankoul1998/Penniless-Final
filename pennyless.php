<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Penniless</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      /*padding: 32px;*/
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }

  .fa {
  padding: 10px;
  font-size: 30px;
 /* width: 30px;*/
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Penniless</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="scroll" href="#myPage">HOME</a></li>
        <li><a class="scroll" href="#band">ABOUT</a></li>
        <li><a class="scroll" href="#contact">CONTACT</a></li>
        <li><a class="scroll" href="register.php">DONATE</a></li>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="c.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="Hunger1.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    
      <!-- <div class="item">
        <img src="la.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div> -->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="w3-container" style="background-color:black;color:white;padding:10px;text-align:center">
  <p><em>1 In Every 9 People On The Planet Are Food Insecure . If you cannot feed hundred people, then just feed one.</em></p>
  <p> </p>
</div> 

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h2>About</h2>
  <p>We run a first of its kind program involving a running vehicle that collects and redistributes large food quantities of excess nutritious food especially from functions, cafeterias, events, etc. and serve meals to target beneficiaries while maintaining ensuring proper quality of the food.Penniless has many volunteers also called Hunger Heroes collect and donate food to the needy people. Apart from conducting food donations, Hunger Heroes also take up the task of spreading awareness and bringing on-ground change in the community</p>
  <br>
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
      <p class="text-center"><strong>Ayush Suri</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="ayush.jpg" class="img-circle person" alt="Ayush Suri" width="255" height="255">
      </a>
      <div id="demo" class="">
        <p>CEO & Founder</p>
        <p>Student At K.J. Somaiya College Of Engineering</p>
        <p>Member since 2018</p>
      </div>
    </div>
    <div class="col-sm-5">
      <p class="text-center"><strong>Simran koul</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="f.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="">
        <p>CEO & Founder</p>
        <p>Student At K.J. Somaiya College Of Engineering</p>
        <p>Member since 2018</p>
      </div>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>

<!-- Container (Contact Section) -->

<div id="contact" class="bg-1">
<div class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em></em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Drop a note !</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Mumbai,India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 8291675415</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: xyz@abc.com </</p>
    </div>
    <div class="col-md-8">
      <form action="/registration/action_page.php" target="_blank" method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn btn-info pull-right" type="submit">SEND MESSAGE</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  <br>
</div>
</div>
<!-- Add Google Maps -->  
<div class="mapouter"><div class="gmap_canvas">
  <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/d/embed?mid=1Dt7zBmMhx2BSpeekIfTdTfhDSdnCLvwJ" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
 </div>
</div>

</div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br>
  <!-- <p>Powered By Kj Somaiya Students<a href="" data-toggle="tooltip" title=""></a></p>  -->
  <h2>Follow Us on<h2>
    <a href="https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110" class="fa fa-facebook"></a>
    <a href="https://twitter.com/login?lang=en" class="fa fa-twitter"></a>
    <a href="https://accounts.google.com/ServiceLogin/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&followup=https%3A%2F%2Faccounts.google.com%2FManageAccount&flowName=GlifWebSignIn&flowEntry=AddSession" class="fa fa-google"></a>
    <!-- <a href="#" class="fa fa-linkedin"></a> -->
    <a href="https://www.instagram.com/penni_less/" class="fa fa-instagram"></a>
    <!-- <a href="#" class="fa fa-skype"></a> -->
</footer>
<!--
</footer>-->

<script>

$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
