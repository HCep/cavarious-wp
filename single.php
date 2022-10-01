<?php
get_header(); ?>

<?php if(is_front_page() || is_page('news')){

}else{ ?>


<div id="Subheader" style="padding:80px 0; background-image:url('<?php echo get_the_post_thumbnail_url(); ?>'); background-repeat:no-repeat; background-position:100%; background-size:cover;"><div class="container"><div class="column one"><h1 class="title text-center text-white"><?php the_title();?></h1></div></div></div>

<?php } ?>


<main>
    <div class="container-fluid px-0 mx-0">
        <div class="container mx-auto">
        <?php the_content(); ?>

               
    
			




        <?php if (comments_open()){
    comments_template();
}?>
	</div>
	</div>
</main>

<?php get_footer(); ?>
