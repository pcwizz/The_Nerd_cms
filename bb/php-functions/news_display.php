<?php

			function news_display($file, $limit) {
$news = simplexml_load_file($file);
$x = 1;
$output = array();

foreach($news->article as $article){
if($x <= $limit) {
$title = $article->title;
$date = $article->date;
$content = $article->content;
$output[] = array('title' => $title, 'date' => $date, 'content' => $content);
}
	}			
	return $output;		
	}		

	
?>
