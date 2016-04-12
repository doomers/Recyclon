<?php 
//displays static content from a given page
$page_id = 20; 
$page_data = get_page( $page_id ); 
$content = apply_filters('the_content', $page_data->post_content); // Get Content and retain Wordpress filters such as paragraph tags. 
$title = $page_data->post_title; // Get title
echo "<h2>".$title."</h2>";
echo "<div class='single-page-content'>".$content."</div>"; // Output Content
?>   