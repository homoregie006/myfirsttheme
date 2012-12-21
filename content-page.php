<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
	<div class="post">
		<h2><?php the_title()?></h2>
		<div class="meta">
		</div>
		<div class="story-content">
			<?php the_content() ?>
		</div>
	</div>
		<?php 
		if(comments_open()) {
			// Display list of commments
			$comments = get_comments(array('post_id'=>$post->ID));
			wp_list_comments(null,$comments);
			
			// Display comments form
			comment_form1();
		}
	?>
	<?php endwhile ?>
<?php endif ?>