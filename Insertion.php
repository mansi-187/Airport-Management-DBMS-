<!DOCTYPE html>
<html>
<title>Insert </title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<style type="text/css">
* {box-sizing: border-box;}

body { 

  margin:0;
  font-family: Arial, Helvetica, sans-serif;
  background:url(1456.jpg) no-repeat;
  background-size: 100%;

}

form{
              text-align: center;
              border-style: solid;
              border-color: red;
              border-radius: 10px;
              padding:1px;
              background-color: #e6e6e6;
            }
            
#navbar {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 50px 10px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 99;
}

#navbar a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 0.4s;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: dodgerblue;
  color: white;
}

#navbar-right {
  float: right;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}
</style>
</head>
<body>
<div id="navbar">
<a href="HomePage.php" id="logo">Airport Management Database</a>
  <div id="navbar-right">
    <a class="active" href="HomePage.php">Home</a>
    <a href="Insertion.php">Insert</a>
    <a href="Display.php">Display</a>
    <a href="Schema.php">Schema</a>
    <a href="Team.php">Team</a>
    <a href="Trigger.php">Trigger</a>
    <a href="Logout.php">Logout</a>
  </div>
</div>
<div style="margin-top:270px;margin-left:35%;margin-right:35%;padding:15px 15px;font-size:30px">
<div><form>
<p><h4>Insert New Passengers&nbsp;<a class="btn btn-success" href="PassengerIn.php"> Click Here</a></h4></p>
<p><h4>Insert New Tickets&emsp;&emsp;&ensp;<a class="btn btn-success" href="TicketsInFinal.php"> Click Here</a></h4></p>
<p><h4>Insert New Flights&emsp;&emsp;&ensp;<a class="btn btn-success" href="FlightsIn.php"> Click Here</a></h4></p>
</form>
</div>
  <script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>