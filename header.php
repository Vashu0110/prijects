<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
	<div class="navbar" id="box1"><a href="index.php"><img src="images/logo/bankit-logo.png" id="myImage"></a>
	<span onclick="openNav()" value="Change" >&#9776;</span>
    </div>
    <div id="mySidenav" class="sidenav">
    <ul><li><a href="index.php"><img src="images/logo/bankit-white.png" id="myImage" ></a></li>
    <li><h2>Let's Chat</h2></li>
    <li><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p></li></ul>
    <span type="button">SCHDULE A CALL</span>
    </div>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul><li><a href="#"><h2>About</h2></a></li>
    <li><a href="#"><h2>Services</h2></a></li>
    <li><a href="#"><h2>Clients</h2></a></li>
    <li><a href="#"><h2>Contact</h2></a></li></ul>
    </div></div>

<!-- 

    <div class="tab">
    <div id="leftbox"></div>
    <div id="leftbox"></div>
    <div id="leftbox"></div>
    <div id="leftbox"><button type="button">SCHDULE A CALL</button></div></div>
    	</div>
	<div class="closebtn"><a href="javascript:void(0)"  style="text-decoration: none" onclick="closeNav()">&times;</a>
    </div>
 -->
<!-- <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a></div>
<div id="mySidenav1" class="sidenav">
<h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right.</p></div>


<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div> -->

  <!-- <div class="box" id="box3">box3</div>
   <div class="box" id="box4">box4</div>
   <div class="box" id="box5">box5</div>
   <div class="box" id="box6">box6</div>
   <div class="box" id="box7">box7</div>
   <div class="box" id="box8">box8</div>
   <div class="box" id="box9">box9</div>
   <div class="box" id="box10">box10</div>
   <div class="box" id="box11">box11</div>
   <div class="box" id="box12">box12</div>
   <div class="box" id="box13">box13</div>
   <div class="box" id="box14">box14</div>
   <div class="box" id="box15">box15</div> -->
   </div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
   // document.getElementById("mySidenav1").style.width = "60 %";
 
 }
 
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  // document.getElementById("mySidenav1").style.width = "0";
  
  }


</script>
   
</body>
</html> 
