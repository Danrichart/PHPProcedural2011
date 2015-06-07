
<?php 		
		while($row = mysqli_fetch_array($check)) { 
		?>
			<div class="cms">
				"<span class="cm"><?php echo($row['comments'])?>" :: </span> 
				<span class="nm"><?php echo($row['name'])?></span>
				<span class="d"><?php echo($row['date'])?></span>
				<span class="t"><?php echo($row['time'])?></span><br />
				<?php 
				if($_SESSION['login'] == 'admin') {
					echo '<input type="checkbox" value="' . $row['tracker'] . '" name="todelete[]" /> Remove';	
				} ?>
			</div><!--cms-->
		<?php
		}
		if($_SESSION['login'] == 'admin') {
			echo '<input type="submit" name="remove" value="remove" />';
			if (isset($_POST['remove'])) {
				foreach ($_POST['todelete'] as $delete_id) {
					$query = "DELETE FROM comments WHERE tracker = $delete_id";
					mysqli_query($con, $query);
				}
			}
		}
		mysqli_close($con);
		?>
		</form>
</div><!--comments_sections-->