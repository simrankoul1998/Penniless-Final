<?php ?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="style.css">

<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('com.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    margin: auto;
    width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>penniless</p>
  </div>
  <div class="middle">
    <h1>Thank You</h1>
    <h4>We will get back to you shortly</h4>
    <a href="register.php"><button class="btn">Donate</button></a>

    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">
    <p>A Step Towards Eradication Of Starvation</p>
  </div>
</div>

</body>
</html>

