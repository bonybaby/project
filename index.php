<?php get_header();?>
<?php if(have_posts()):?>


<div class="row">
<?php while(have_posts()):the_post();?>
<div class="col">
<h1><?php the_title();?></h1>

<?php the_excerpt();?>
<?php the_date();?><br>
<?php the_author();?>



</div>
<?php endwhile;?>


</div>
<?php endif;?>
<?php get_footer();?>