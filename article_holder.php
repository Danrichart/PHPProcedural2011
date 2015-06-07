<?php
include('header.php');
?>    

<div id="containerwrap">
	<div id="container">   
		<div id="maincol">

			<div class="articlewrap">
				<?php 
					$id = $_GET['article'];
					$con = mysqli_connect ("localhost", "root", "", "jpostdatabase") or die ('Could not connect to the database.');
					
					$check_art = mysqli_query($con, "SELECT * FROM article_database WHERE art_id=$id");
					$row_art = mysqli_fetch_array($check_art);
					$art_name = $row_art['art_nme'];
					$art_arthr = $row_art['art_arthr'];
					$art_date = $row_art['art_date'];
					$art_content = $row_art['art_content'];

				?>
				<h2><?php echo $art_name; ?></h2>
				<h3><?php echo $art_arthr; ?></h3>
				<h4><?php echo $art_date; ?></h4>
				<?php
				if(isset($_SESSION['username']))
					echo $art_content;
				else {
					echo substr($art_content, 0, 700);
					?>
					<p><a href="subscribe.php">Subscribe</a> to read more.</p>
					<?php
				} 
				if(isset($_SESSION['username'])) {
					if(isset($_POST['submit'])){
						include('insert_comment.php');
					}
					
					if($_SESSION['login'] != 'admin') { ?>
						<form action="<?php echo "article_holder.php?article=$id" ?>" method="post" onsubmit ="return check_form(this)">
							<textarea name="comments" class="comment_txt">Comments</textarea><br />
							<input type="hidden" name="idpost" value="<?php echo $id; ?>" />
							<input type="submit" name="submit" value="Submit" class="submit_comments" />
						</form>	
						<?php
					} ?>
					<div id="comments_sections">
					<form action="<?php echo "article_holder.php?article=$id" ?>" method="post"> 
	
					<?php
					$con = mysqli_connect ("localhost", "root", "", "jpostdatabase") or die ('Could not connect to the database.');
					$check = mysqli_query($con, "SELECT * FROM comments WHERE c_id=$id");
					if (isset($check)) {
						include('comments.php');
					}
				} 
				?>
			</div><!--articlewarp-->
		</div> <!-- maincol -->
		<?php
		include('adsections1.php');
		?>
		<div style="clear:both;"></div>
	</div> <!-- container --> 
</div><!--container-Wrap-->
<?php
include('footer.php');
?>