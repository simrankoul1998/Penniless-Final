<?php ?>
<!DOCTYPE html>
<html>
<title>
	Penniless
</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.column1 {
  float: left;
  width: 50%;
  padding: 5px;
  display:flex;
}

/* Clear floats after image containers */
.row1::after {
  content: "";
  clear: both;
  display: table;
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 10x;
  text-align: center;
  text-decoration: none;
  margin: 2px 2px;
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
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.googlemap{
	top:100px;

}
.row {
display: table-cell;
  display: flex;
  flex-wrap: wrap;
  padding: 16px;
  flex:1;
}
.w3-tangerine {
    font-family: "Tangerine", serif;
    font-size: 20px;
    font-style: normal;
    
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

.column {
  flex: 50%;
  padding: 0 4px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;

.x { 
    word-spacing: normal;
}
.btn2{
   position: fixed;
  top:17%;
  left: 79%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 28px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <!--<div class="w3-tangerine">-->
    <a href="#home" class="w3-large w3-bar-item w3-button"><i><b>Penniless</b></i></a>
 <!-- </div>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-large w3-bar-item w3-button">Home</a>
      <a href="register.php" class="w3-large w3-bar-item w3-button">Login</a>
      <a href="#contact" class="w3-large w3-bar-item w3-button">Contact Us</a>
      <a href="#about" class="w3-large w3-bar-item w3-button">About</a>
    </div>
  </div>
</div>

<!-- Header -->
<!--<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="c.jpg" alt="food wastage" width="1500" height="800">-->
   <div class=" w3-image w3-display-container w3-content w3-wide w3-content w3-section" style="max-width:1500px">
  <img class="mySlides" src="Hunger1.jpg" style="width:100%">
   <!--<img class="mySlides" src="b.jpg" style="width:100%">-->
    <img class="mySlides" src="c.jpg" style="width:100%">
  <div class="w3-display-middle w3-margin-top w3-center">
   <!-- <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span> <span class="w3-hide-small w3-text-light-grey">Architects</span></h1>-->

  </div>
</header>


  <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    <div class="x">
    <pre>
     <p style="font-style:normal;font-size:150%;text-align:center;color:#180336"><b><em> 1 In Every 9 People On The Planet Are Food Insecure<em></b></p>     <p style="font-style:verdana;font-size:150%;text-align:center;color:#180336">If you cannot feed hundred people, then just feed one.</p>
  </pre>
</div>

<!-- Page content 
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section 
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <img src="/w3images/house3.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <img src="/w3images/house4.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <img src="/w3images/house4.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <img src="/w3images/house3.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-hide-small">About</h3>
    <h5 style ="font-style:normal,font-size:80px,word-spacing:normal,white-space:normal,font-color:	rgb(144,0,0)";>We run a first of its kind program involving a running vehicle that collects and redistributes large food quantities of excess nutritious food especially from functions, cafeterias, events, etc. and serve meals to target beneficiaries while maintaining ensuring proper quality of the food.Penniless has many volunteers also called Hunger Heroes collect and donate food to the needy people. Apart from conducting food donations, Hunger Heroes also take up the task of spreading awareness and bringing on-ground change in the community
    </h5>


    </div>
  <div class="row">
  <div class="column">
  <div class="card">
  <img src="ff.jpg" alt="Ayush Suri" style="width:100%">
  <h1>Ayush Suri</h1>
  <p class="title">CEO & Founder</p>
  <p>Student At K.J. Somaiya College Of Engineering</p>
 <p><button>Contact</button></p>
</div>
</div>

  <div class="column">
  <div class="card">
  <img src="f.jpg" alt="Simran Koul" style="width:100%">
  <h1>Simran koul</h1>
  <p class="title">CEO & Founder</p>
  <p>Student At K.J. Somaiya College Of Engineering</p>

 <p><button>Contact</button></p>
</div>
</div>
</div>
 
<div class="row">
	
 <div class="w3-container w3-padding-32" id="contact" style="width:50% ">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <h3><b>Lets get in touch and talk </b></h3>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border  w3-padding-16" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
<div id="googleMap" style="width:50%;height:412px;top:110px;"></div>




<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUF9ymTz15UqMfXBHlJXwKMqhPGtN1nJk&callback=myMap"></script>
</div>


  <!-- Contact Section -->
 
  
<!-- End page content -->
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-small">
	<h2>Follow Us on<h2>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-linkedin"></a>  
</footer>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
