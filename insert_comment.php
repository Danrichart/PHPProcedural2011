	<?php
		$date = date('M j Y');
		$time = date('g:i a');
		$id = $_POST['idpost'];
		$name = $_SESSION['login'];
		$comments = $_POST['comments'];
		$con = mysqli_connect ("localhost", "root", "", "jpostdatabase") or die ('Could not connect to the database.');
		$query = "INSERT INTO comments ( c_id, name, comments, date, time ) VALUES ('$id', '$name', '$comments', '$date', '$time')";
		$result = mysqli_query($con, $query);
		mysqli_close($con);
	?>