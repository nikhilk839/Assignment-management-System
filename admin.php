<?php
	error_reporting(E_ALL^E_NOTICE);
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>admin</title>
</head>
<body>
	<?php
		if(!$_SESSION['login'])
		{
			die('user logged out');
		}
	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
	  	<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button> -->
	  	<a class="navbar-brand" href="student.php">
    		<img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="nikhil">
  		</a>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
	    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      	<li class="nav-item">
		        	<a class="nav-link" href="admin.php">My Institution</a>
		      	</li>
	    	</ul>
	    	<?php
	    		echo  $_SESSION['u_name'];
	    	?>
	    	<a href="logout.php">logout</a>
	  	</div>
	</nav>
	<div>
		<a href="user_registration.html"><button>create user</button></a>
		<a href="course_registration.html"><button> create course</button></a>
		<a href="update_user.html">update user</a>
		<a href="update_course.html">update course</a>
	</div>
</body>
</html>
