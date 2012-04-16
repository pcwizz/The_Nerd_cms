
<?php
include_once 'layout-templates/header.html';
?>
					<!-- title of content -->
				
				</hgroup>
			</header>
						<!-- content -->
						</article>


			<?php 
	include 'php-functions/news_display.php';
	$display = news_display('xml-feeds/newsfeed.xml', 200);
	foreach($display as $text){
echo "<article id='", $text['title'], "'><header><hgroup><h2>", $text['title'], "</h2></hgroup></header>Written on ", $text['date'], "<p>";		
$content = $text['content'];
$ad = 'news-articles/' . $content;
include $ad;
echo "</article>";		
		}		

include_once 'layout-templates/aside.html';
include_once 'layout-templates/footer.html';			
			
			?>