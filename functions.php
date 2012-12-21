<?php
// Register a single navigation menu, to be constructed in the admin panel, and displayed in nav.php
register_nav_menus(array(
	'primary' => 'Primary Navigation'		
));

function comment_form1() {
	global $post;
	?>
	<form method="post" action="<?php bloginfo('url');?>/wp-comments-post.php">
	
	<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID;?>" />
	<input type="hidden" name="comment_parent" id="comment_parent" value="0" />
	
	Name: <input name="author" type="text" /><br/>
	Email:<input name="email" type="text" /><br/>
	Website:<input name="website" type="text" /><br/>
	
	<textarea name="comment" ></textarea><br/>
	<input name="submit" class="btn btn-inverse" type="submit" value="Post Comment">
 	<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>	
	</form>

<?php } ?>