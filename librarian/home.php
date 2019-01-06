<?php
	require "../db_connect.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

<html>
	<head>
		<title>Welcome</title>
		<!--StyleSheet Links-->
		<link rel="stylesheet" type="text/css" href="css/home_style.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

		<!--JS Bootstrap Grid Links-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</head>
	<body>
		
		<div id="allTheThings">
			<div class="container">
				<div class="row">
			      <a href="pending_registrations.php" class="col-sm">
				  <input type="button" value="Pending Registrations" />
			      </a><br />
			      <a href="pending_book_requests.php" class="col-sm">
				  <input type="button" value="Pending Book Requests" />
			      </a><br />
			      <a href="insert_book.php" class="col-sm" >
				  <input type="button" value="Add a New Book" />
			      </a><br />
			    </div>
			    <div class="row">
			      <a href="update_copies.php" class="col-sm">
				  <input type="button" value="Update Copies of a Book" />
			      </a><br />
			      <a href="update_balance.php" class="col-sm">
				  <input type="button" value="Update Balance of a Member" />
			      </a><br />
			      <a href="due_handler.php" class="col-sm">
				  <input type="button" value="Reminders for Today" />
			      </a><br /><br />
		        </div>
	        </div>
	    </div>
	</body>
</html>