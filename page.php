<?php
get_header(); ?>

<?php if(is_front_page() || is_page('news') || is_page('news-2')){

}else{ ?>


<div id="Subheader" style="padding:80px 0; background-image:url('<?php echo get_the_post_thumbnail_url(); ?>'); background-repeat:no-repeat; background-position:100%; background-size:cover;"><div class="container"><div class="column one"><h1 class="title text-center text-white"><?php the_title();?></h1></div></div></div>

<?php } ?>


<main>
    <div class="container-fluid px-0 mx-0">
        <?php the_content(); ?>

                 <?php if(is_page('news') || is_page('news-2')){ ?>
                    <div class="container mx-auto posts-container">
              <?php  $blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1 ) );
				
                if ( $blog_posts->have_posts() ) : ?>
    
                    <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <article class="post-artcl card" id = "post-<?php the_ID(); ?>">
                <div class="post-image">

               
               <a class="post-a" href = "<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) { 
                the_post_thumbnail( get_the_ID(), 'full' );
                } ?></a> </div>
                <div class="post-content pl-md-3">

               
                    <div class = "d-flex justify-content-between">
                 <a class="post-a" href = "<?php the_permalink(); ?>"><h2 class = "post-title"><?php the_title(); ?></h2>
                 <?php if (get_locale() == 'en_GB') { ?>
                    <span class="post-small">Date: <?php echo get_the_date(); ?></span>
                 <span class="post-small">Author: <?php echo get_the_author(); ?></span>
                    <?php }else { ?>
                 <span class="post-small">Data: <?php echo get_the_date(); ?></span>
                 <span class="post-small">Autor: <?php echo get_the_author(); ?></span>
                 <?php } ?>
                </a>
                
                <?php the_category(', '); ?>
                </div>
                <div class = "post-excerpt">
                <?php wp_kses_post( the_excerpt() ) ?>
                </div>
                <span class = "post-read-more">
                <a itemprop = "url" href = "<?php the_permalink(); ?>" target = "_blank">
                <?php if (get_locale() == 'en_GB') {
                echo esc_html__( 'Read more', 'clean theme' ) ;
                }else{
                    echo esc_html__( 'Czytaj więcej', 'clean theme' ) ;
                }
                
                ?>
                </a>
                </span> 
                </div>
                </article>
                <?php endwhile; ?>
    
                    <?php else : ?>
    
                        </div>
    
                    <?php endif;  }?>
    
			





	</div>
</main>

<?php get_footer(); ?>
