<?php // Used for main blog display. 

get_header();

echo "<!-- The Loop! -->\n";

if (have_posts()) : while (have_posts()) : the_post();
?>

			<div class="post" id="post-<?php the_ID(); ?>">
            	<!-- Post header: title, date, and other info -->
            	<div class="post-head" id="post-head-<?php the_ID(); ?>">
                	<div class="post-title" id="post-title-<?php the_ID(); ?>">
                    	<a class="title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to this post"><?php the_title(); ?></a>
                    </div>
                    <div class="post-info" id="post-info-<?php the_ID(); ?>">
                    	<span class="postDate"><?php echo get_the_date('d F Y'); ?></span><br />
                    </div>
				</div>
                <br clear="all">
                <!-- Post content -->
                <div class="post-content" id="post-content-<?php the_ID(); ?>">
                	<?php the_content('More... &raquo'); ?>
                    <?php comments_template(); ?>
                </div>
			</div>

<? 	endwhile; 
	else: ?>
			<div class="post" id="post-404">
            	<div class="post-head" id="post-head-404">
                	<div class="post-title" id="post-title-404">
                    	<a href="<?php bloginfo('url'); ?>" class="title">No posts here</a>
                    </div>
                </div>
                <br clear="all">
                <div class="post-content" id="post-content-404">
                	<p>No matching posts were found.</p>
                </div>
            </div>
<? endif; ?>
			<!-- Post navigation -->
            <div class="posts-navigation">
            	<?php next_posts_link('&laquo; Older entries'); ?>
				<?php previous_posts_link('&sect; Newer entries &raquo;'); ?>
			</div>
            
<?php get_footer(); ?>