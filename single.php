<?php get_header(  ) ?>

        


<main role="main" class="container">

    <div class="row">

        <div class="col-md-8 blog-main">
            <?php
                if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'single' );
                    endwhile;
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif; 
            ?>
        </div><!-- /.blog-main -->
                
        <!-- sidebar -->
        <?php get_sidebar(  ) ?>
        
    </div><!-- /.row -->


    <?php get_footer(  ) ?>