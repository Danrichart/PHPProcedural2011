<?php	include('header.php');?><div id="containerwrap">       	<div id="container">    		 <div id="leftcol">							 <ul>					 <li class="greytab"><a href="index.php"><img class="title_preview" src="images/main_tag.jpg" width="20" height="140" title="tag" alt="tag" style="opacity:0.4;filter:alpha(opacity=40)"/>				 <img class ="img_preview" src="images/june16issue.jpg" width="110" height="110" title="issue" alt="issue" style="opacity:0.4;filter:alpha(opacity=40)" /></a></li>						 				 <li class="wtab"><a href="index_preview_2.php"><img class="title_preview" src="images/main_tag2.jpg" width="20" height="139" title="tag" alt="tag" />				 <img class ="img_preview" src="images/may19issue.jpg" width="110" height="110" title="issue" alt="issue" /></a></li>						 				 <li class="greytab"><a href="index_preview_3.php"><img class="title_preview" src="images/main_tag3.jpg" width="20" height="139" title="tag" alt="tag" style="opacity:0.4;filter:alpha(opacity=40)" />				 <img class ="img_preview" src="images/april21issue.jpg" width="110" height="110" title="issue" alt="issue" style="opacity:0.4;filter:alpha(opacity=40)" /></a></li>						 			 </ul>					 <?php				if(isset($_SESSION['username'])) { ?>					<div class="extra_button"><a href="archive.php">Archive</a></div>				<?php				}				else { ?>					<div class="extra_button"><a href="subscribe.php">Subscribe</a></div>								<?php				}			?>		 </div> <!-- leftcol -->           			<div id="middlecol">						<div id="mainarticle">					<img class="main" src="images/mail.jpg" width="220" height="160" alt="picture" title="picture"></img> 					<h2>Editorial</h2>					<h5>May 19, 2010</h5>					<p>Many thanks to all of you, dear readers						who wrote, called, made donations, and						emailed with suggestions for the newspaper.						It was heartwarming to see how						much the newspaper means to so many						of you. One of the letters.. 							<a href="article_holder.php?article=21">read more</a></p>				</div><!--mainarticle-->								<div style="clear:both;"></div>				<img class="divide" src="images/nationaldivider.jpg" width="590" height="18" alt="divider" title="divider"></img>								<div id="secondarticle">				<img class="national" src="images/candles.jpg" width="163" height="124" alt="picture" title="picture"></img> 					<h3>Shabbat Shalom</h3>					<h5>by Rabbi Jon Adland May 14, 200</h5>					<p>His Holiness, the Dalai Lama, gave a						public talk at Conseco Fieldhouse this						morning. 					<a href="article_holder.php?article=22">read more</a></p>				</div><!--secondarticle-->								<div style="clear:both;"></div>										<div id="thirdarticle">					<img class="national" src="images/bonsai.jpg" width="163" height="124" alt="picture" title="picture"></img> 					<h3>Chassidic Rabbi</h3>					<h5>by Rabbi Benzion Cohen May 19, 2010</h5>					<p>In my column from Feb. 10, 2010, I						wrote about doing yoga and keeping						kosher. When I was 17, I practiced yoga.						One aspect of yoga is to be careful not to						hurt anyone or any living creature.					<a href="article_holder.php?article=23">read more</a></p>				</div><!--thirdarticle-->								<div style="clear:both;"></div>				<img class="divide" src="images/localdivider.jpg" width="590" height="18" alt="divider" title="divider"></img>									<div id="fourtha">				<img class="local" src="images/art519_4.jpg" width="202" height="150" alt="img" title="img"></img>						<h4>62 Things You Should Know About Israel</h4>						<h5>May 19, 2010</h5>						<p>On the occasion of Israel's							62th birthday, it							is thriving as a global							leader in science, technology,							medicine, culture, and much							more. In honor of 62 years,							here are 62 of the many contributions							that Israel and Israelis							have made to the world.					<a href="article_holder.php?article=24">read more </a></p>				</div> <!--fourtha-->									<div id="fiftha">			<img class="local" src="images/art519_5.jpg" width="202" height="140" alt="img" title="img"></img>						<h4>Great Cooks - Great Food</h4>						<h5>by Cindie Harp May 19, 2010</h5>						<p>Nancy Landman used to							dream about being a rabbi							when she was a child.						<a href="article_holder.php?article=25">read more </a></p>				</div><!--fiftha-->						</div> <!-- middlecol -->		<div id="adsections">		</div> <!-- ad section--> 		<div style="clear:both;"></div>	</div><!--container-->		</div> <!--containerwrap-->  	  	<?php	include('footer.php');?>	