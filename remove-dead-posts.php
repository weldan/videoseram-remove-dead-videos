<?php
global $wpdb;
$posts = $wpdb->get_results("select * from $wpdb->posts");
foreach($posts as $p){
	$text = explode(' ',$p->post_content);
	//iterate only on posts that has content we want
	if (count($text) == 1) {
	$check = file_get_contents("http://gdata.youtube.com/feeds/api/videos/".$text[0]);
	//if there is 'xml' in content, we know the video can be viewed by public
	//so we find the opposite
	if (!preg_match('/xml/i', $check)) {
		echo "removing post id:".$p->ID." video id:".$text[0]."url:".$p->guid."\r\n";	
		wp_delete_post($p->ID);
	}
	//break 5 seconds
	sleep(5);
	}
}
?>
