<html>
<title> Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 10px;
  text-align: topleft;
}

.header h1 {
  font-size: 50px;
}

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

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card1 {
  box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  border-top: 5px solid #00CDFF;
  margin-top: 20px;
  margin-left: 20px;
  margin-right: 20px;
  text-align: justify;
  background-color: #f1f1f1;
}

.button {
  padding: 5px 20px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #00CDFF;
  border: none;
  border-radius: 10px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #006BA9}

.button:active {
  background-color: #006BA9;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.button2 {
  padding: 5px 20px;
  font-size: 24px;
  text-align: right;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #00CDFF;
  border: none;
  border-radius: 10px;
  box-shadow: 0 9px #999;
}

.button2:hover {background-color: #006BA9}

.button2:active {
  background-color: #006BA9;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
/* Footer */
.footer {
  text-align: center;
  background: #585858;
  color: #FFFFFF;
  margin-top: 20px;
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

<body>
    <div class="rightcolumn">
        <div class="card1" style="padding-bottom: 40px;">
            <h1><?php
    session_start();

    if ($_SESSION["logcheck"] === "login")
        {
            echo "You are now logged in";
        } else {
            header("Location: http://localhost/index.php");
        }
?></h1>
            <p style="padding-bottom: 10px;">Click the home button to go to the home page, or click on log out to log out.</p>
            <button class="button"><a href="home.php">Home</a></button>
            <button class="button2" style="float: right;"><a type="submit" href="logout.php">Log Out</a></button>
        </div>
    </div>

    <div class="footer w3-padding-large">
        <h2>© Copyright 2000 - 2019 Random.com</h2>
	    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
    </div>
</body>
</html>