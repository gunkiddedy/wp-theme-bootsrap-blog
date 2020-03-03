<?php get_header(  ) ?>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <?php
                if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'page' );

                        //default comment tempate(comments.php)
                        comments_template( ); 
                    endwhile;
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif; 
            ?>
            
            <nav aria-label="The Pagination"><!-- pagination -->
                <ul class="pagination justify-content-center">
                    <?php echo paginate_links( )?>
                </ul>
            </nav>

        </div><!-- /.blog-main -->
        <?php get_sidebar(  ) ?><!-- /sidebar -->
    </div><!-- /.row -->

<?php get_footer(  ) ?>