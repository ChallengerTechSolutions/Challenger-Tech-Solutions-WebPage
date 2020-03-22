<?php
include 'config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Terms of Service | <?php include 'title.php' ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/icon/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.oof {color: white!important;}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5cf881ccb534676f32ad91e7/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-orange w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="https://scammerblaster.com/" target="_blank" class="oof w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">ScammerBlaster's Website</a>
    <a href="https://scambaitersunited.tel/" target="_blank" class="oof w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">ScamBaiter's United Forum</a>
    <a href="https://bluephonebuster.flarum.cloud/" target="_blank" class="oof w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">BluePhoneBuster's Forum</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navBar" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="https://scammerblaster.com/" target="_blank" class="w3-bar-item w3-button w3-padding-large">ScammerBlaster's Website</a>
    <a href="https://scambaitersunited.tel/" target="_blank" class="w3-bar-item w3-button w3-padding-large">ScamBaiter's United Forum</a>
    <a href="https://bluephonebuster.flarum.cloud/" target="_blank" class="w3-bar-item w3-button w3-padding-large">BluePhoneBuster's Forum</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-orange w3-center" style="padding:128px 16px">
  <h1 class="oof w3-margin w3-jumbo">Terms of Service</h1>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Report a Scam Terms of Service</h1>
      <h4 class="w3-padding-32">Any scams that you report must have a working number if you reported a number and it stopped working after you reported it and don't think that we have took a look at your report please contact <a href="brian.challenger1143@challengertechsolutions.org">Brian Challenger</a> to get it resolved. If the number reported doesn't work and we believe is stopped working we will ban you from using the forum for 1 week with a notice from our tech department. Our form collects Internet Protocal Addresses for security reasons. Any number that you report to us and connects to a legitimate company will result in forwarding your info to that company for them to investigate.</h4>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Forum Terms of Service</h1>
      <h4 class="w3-padding-32">Currently Working on the forum. We will not post a Terms or Service for it till we have made it!</h4>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-black">  
  <h3 class="oof">Powered by: Challenger Tech Solutions Development Team</h3>
    <p class="w3-text-grey"><a href="terms.php">Terms of Service</a></p>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navBar");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</div>
</body>
</html>