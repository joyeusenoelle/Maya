<?php // Used for main blog display. 

get_header();

echo "<!-- The Loop! -->\n";

if (have_posts()) : while (have_posts()) : the_post();



endwhile;
endif; 

?>