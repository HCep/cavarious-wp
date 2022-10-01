<?php
get_header(); ?>

<header class="banner-container d-flex flex-column my-0 justify-content-center align-items-center">
	
</header>


<main>
    <div class="container-fluid px-0 mx-0">
        <?php the_content(); ?>
      
				
                <?php if ( have_posts() ) : ?>
    
                    <?php /* Start the Loop */ ?>
    
                    <?php while ( have_posts() ) : the_post(); ?>
    
                        <?php
    
                      
                        ?>
    
                    <?php endwhile; ?>
    
                    <?php else : ?>
    
    
    
                    <?php endif; ?>
    
			





	</div>
</main>

<?php get_footer(); ?>
