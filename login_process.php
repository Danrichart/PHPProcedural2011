<?phpsession_start(); if(isset($_POST['submit'])){		$log_in = 0;	$msg = "";	$user_check = 1;	$pass_check = 1;	$member_check = 1;	$login = strtolower($_POST['login']);	$pass = strtolower($_POST['pass']);		$con = mysqli_connect ("localhost", "root", "", "jpostdatabase") or die ('Could not connect to the database.');	$check = mysqli_query($con, "SELECT * FROM registration");	while($row = mysqli_fetch_array($check)) {		if($row['login'] == $login) {			$user_check = 0;			if($row['pass'] == $pass ) {				echo $row['password'];				$pass_check = 0;				if($row['member'] == 'y') {				$member_check = 0;				$string=$row['name'];				$array=explode(" ",$string);				$array_count=count($array);				$login_name=$array[0];				$cap = ucfirst($login_name);				$_SESSION['username'] = $cap;				$_SESSION['login'] = $login;				}			}		}	}		if ($user_check == 1)  {		$msg .= '<p>Incorrect Username</p>';		$msg .= '<p class="login_prompt">The username you entered does not match any records on file. 		Double check you are correctly entering information associated with your account.</p>';		$msg .= '<p class="login_prompt">Please re-enter your username</p>';}	if ($pass_check == 1 && $user_check !=1) {		$msg .= '<p>Incorrect Password</p>';		$msg .= '<p class="login_prompt">Please re-enter your password</p>'; 		}		if ($member_check == 1 && $user_check != 1 && $pass_check != 1){		$msg .='<p>Not Activated Member</p>';		$msg .='<p class="login_prompt">Please 24-48 Hours for activation to be set. If not activated with that time frame, please contact us		at this email: jpostopinion@gmail.com </p>';}					$_SESSION['msg'] = $msg;	if (isset($_SESSION['msg'])) {		header("Location: login_page.php");	}	else {	header("Location: index.php");	}	mysqli_close($con);}?>