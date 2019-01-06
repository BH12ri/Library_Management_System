<?php 
require "db_connect.php";
require "header.php";
  session_start();
  
  if(empty($_SESSION['type']));
  else if(strcmp($_SESSION['type'], "librarian") == 0)
    header("Location: librarian/home.php");
  else if(strcmp($_SESSION['type'], "member") == 0)
    header("Location: member/home.php");
?>
<html>
<head><title>Member</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Stylesheet Links-->
<link href="css/frontpage.css" rel="stylesheet" type="text/css">
<link href="css/navigation.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="container">
	<!--Side Navigation bar-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="srs.php">Software Requirement Specification</a>
</div>
<div id="main">
	<div class="home_front">
  <p class="web_info">
Library management system is a project which aims in developing a computerized
system to maintain all the daily work of library.<br/>
To know more about our Project.<button onclick="openNav()">Click Here</button>
  </p>
  <br/>
<div style="margin-left:250px; width:50%;" class="animated bounceInUp ass">
    <div class="row">
            <div class="col-md-5 col-md-offset-2 col-sm-6">
			    <div class="box">
				<img src="img/ic_librarian.svg" alt="Librarian login" class="image"><figcaption>
			    <h2 class="text" style="cursor: pointer;"><a href="librarian">Librarian</a></h2></figcaption>
			    </div>
			</div>
			<div class="col-md-5 col-sm-6">
			     <div class="box">
                <img src="img/ic_member.svg" alt="User Login" class="image"><figcaption>
			    <h2 class="text" style="cursor: pointer;"><a href="member">Member</a></h2></figcaption>
			    </div>
		 </div>
    </div>
</div>
</div>
</div>
</div>
</body>
<script>
	/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
	function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}

</script>
</html>