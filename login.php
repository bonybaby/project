<?php get_header();?>
<?php while(have_posts()):the_post();?>

<div class="log">
<?php the_content();?>

	<form>
	<input type="text" placeholder="userid" class="frm"></input>
	<input type="text" placeholder="password" class="frm"></input>
	<input type="submit" value="Reset" class="frm-btn"></input>
	<input type="submit" value="Login" class="frm-btn"></input>
	
	</form>
</div>
<?php endwhile;?>
<?php get_footer();?>

