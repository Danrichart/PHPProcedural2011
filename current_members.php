<?phpinclude('header.php');?><div id="containerwrap">   <div id="container">		<div id="maincol">			<div id="log_in_page">			<div id="members_navigation">				<a class="back" href="members_info.php">Back to Update Info</a>				<a class="refresh" href="current_members.php"><img src="images/refresh.jpg" width="20" height="20" alt="refresh" title="refresh" /></a><br />			</div><!--memebrs_navigation-->			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">			<?php			$con = mysqli_connect ("localhost", "root", "", "jpostdatabase");			$check = mysqli_query($con, "SELECT * FROM registration");			while($row = mysqli_fetch_array($check)){				if($row['member'] == 'y') {				echo '<div class="members_divide">';				echo '<ul class="members_ul">';				echo '<li><input type="checkbox" value="' . $row['id'] . '" name="toupdate[]" /> De-activate </li>';				echo '<li><span class="members_name">' . $row['name'] . '</span></li>';					echo '<ul>';					echo '<li><span class="members_tags"> Email: </span>' . $row['email'] . '</li>';					echo '<li><span class="members_tags">Login: </span>' . $row['login'] . '</li>';					echo '</ul>';				echo '</ul>';				echo '</div><!--members_divide-->';				}			}			echo '<input type="submit" value="deactivate" name="deactivate" class="members_submit" />';			if(isset($_POST['deactivate'])) {				foreach ($_POST['toupdate'] as $updateid) {					$query = "UPDATE registration SET member = 'n' WHERE id = $updateid";					mysqli_query($con, $query);				}			}						mysqli_close($con);			?>			</form>			<p>Refresh after updates to see them take effect</p>			</div><!--log_in_page-->		</div> <!-- maincol -->		<?php		include('adsections2.php');		?>		<div style="clear:both;"></div>	</div> <!-- container --> </div> <!--containerwrap-->	  <?phpinclude('footer.php');?>	