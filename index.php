<?php
include('header.php');
?>
<div id="containerwrap">
<div id="container">
  <div id="leftcol">
		<ul>
			<li class="whitetab"><a href="index.php"><img class="title_preview" src="images/main_tag.jpg" width="20" height="140" title="tag" alt="tag"/>
			<img class ="img_preview" src="images/june16issue.jpg" width="110" height="110" title="issue" alt="issue"/></a></li>
			
			<li class="greytab"><a href="index_preview_2.php"><img class="title_preview" src="images/main_tag2.jpg" width="20" height="139" title="tag" alt="tag" style="opacity:0.4;filter:alpha(opacity=40)"/>
			<img class ="img_preview" src="images/may19issue.jpg" width="110" height="110" title="issue" alt="issue" style="opacity:0.4;filter:alpha(opacity=40)"/></a></li>
			
			<li class="greytab"><a href="index_preview_3.php"><img class="title_preview" src="images/main_tag3.jpg" width="20" height="139" title="tag" alt="tag" style="opacity:0.4;filter:alpha(opacity=40)"/>
			<img class ="img_preview" src="images/april21issue.jpg" width="110" height="110" title="issue" alt="issue" style="opacity:0.4;filter:alpha(opacity=40)"  /></a></li>
		</ul>
			<?php
				if(isset($_SESSION['username'])) { ?>
					<div class="extra_button" ><a href="archive.php">Archive</a></div>
				<?php
				}
				else { ?>
					<div class="extra_button"><a href="subscribe.php">Subscribe</a></div>
				<?php
				}
			?>
			

		</div> <!-- leftcol -->  
    <div id="middlecol">
	
				<div id="mainarticle">
						<img class="main" src="images/actor.jpg" width="220" height="160" alt="picture" title="picture"></img> 
						<h2>A Bit of Wit</h2>
						<h5>June 16, 2010</h5>
						<p>Moishe, a Jewish actor, is so down
						and out he's ready to take any acting gig
						that he can find.			
						<a href="article_holder.php?article=11">read more</a></p>
				</div><!--mainarticle-->
				
				<div style="clear:both;"></div>
				<img class="divide" src="images/nationaldivider.jpg" width="590" height="18" alt="divider" title="divider"></img>
				
				<div id="secondarticle">
					<img class="national" src="images/dreams.jpg" width="163" height="124" alt="picture" title="picture"></img> 
					<h3>Shabbat Shalom</h3>
					<h5>by Rabbi Jon Adland May 21, 200</h5>
					<p>Tonight five women - Lea Coleman,
						Erin Healey, Diane Healey, Shelly Sachs,
						and Barbie Stenacker - will fulfill a
						dream by leading a worship service..
					<a href="article_holder.php?article=12">read more</a></p>
				</div><!--secondarticle-->
				
				<div style="clear:both;"></div>
				
				<div id="thirdarticle">
					<img class="national" src="images/dinner.jpg" width="163" height="124" alt="picture" title="picture"></img> 
					<h3>Chassidic Rabbi</h3>
					<h5>by Rabbi Benzion Cohen June 16, 2010</h5>
					<p>The last day of Pesach has a special
						connection with Moshiach. Before
						sunset we gather together for a special
						festive meal. The Baal Shem Tov called
						this meal "The meal of Moshiach"
					
					<a href="article_holder.php?article=13">read more</a></p>
				</div><!--thirdarticle-->
				
				<div style="clear:both;"></div>
				<img class="divide" src="images/localdivider.jpg" width="590" height="18" alt="divider" title="divider"></img>	
				
					
					<div id="fourtha">
					<img class="local" src="images/train.jpg" width="150" height="200" alt="img" title="img"></img>
						<h4>Sisterhood delivers a
							mystery train adventure</h4>
						<h5>June 16, 2010</h5>
						<p>The Sisterhood of Congregation
							Beth-El Zedeck hosted
							a Mystery Train Adventure
							on Sun., May 23.
							<a href="article_holder.php?article=14">read more </a></p>
					</div> <!--fourtha-->
					
					<div id="fiftha">
							<img class="local" src="images/housing.jpg" width="150" height="200" alt="img" title="img"></img>
						<h4>Crooked Creek: A community for older adults</h4>
						<h5>by Cindie Harp May 16, 2010</h5>
						<p>Crooked Creek Tower, an
							affordable housing community
							for older adults, has been
							a notable fixture in Pike Township
							for over 25 years.
							<a href="article_holder.php?article=15">read more </a></p>
					</div><!--fiftha-->
					
    </div> <!-- middlecol -->
    <div id="adsections">
	</div> <!-- ad section--> 
<div style="clear:both;"></div>
</div><!--container-->
</div><!--containerwrap-->
<?php
	include('footer.php');
?>