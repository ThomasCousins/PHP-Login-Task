<!DOCTYPE html>
<html>
<title> Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('https://images.pexels.com/photos/316093/pexels-photo-316093.jpeg?cs=srgb&dl=abstract-architectural-design-architecture-316093.jpg&fm=jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  position: top;
  background-color: #00CDFF;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f1f1f1;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change color on hover */
.topnav a:hover {
  background-color: #006BA9;
  color: #FFFFFF;
}
	
.active {
  background-color: #022369;
}

/* Footer */
.footer {
  text-align: center;
  background: #585858;
  color: #FFFFFF;
}
	
A {text-decoration: none;}

</style>
<body>

<div class="topnav">
  <a href="#" class="active">Home</a>
  <a href="#">About Us</a> 
  <a href="#">More Info</a>
  <a href="#" style="float:right">Contact</a>
</div>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    Logo
  </div>
  <div class="w3-display-middle">
    <hr class="w3-border-grey" style="margin:auto;width:100%">
    <h1 class="w3-jumbo w3-animate-top">WELCOME</h1>
    <hr class="w3-border-grey" style="margin:auto;width:100%">
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
  </div>
</div>

<div class="footer w3-padding-large">
  <h2>© Copyright 2000 - 2019 Random.com</h2>
	Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
</div>

</body>
</html>