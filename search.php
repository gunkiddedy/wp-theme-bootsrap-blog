<?php get_header(  ) ?>

<div class="col" style="margin-top:1rem">
    <h3>
    <?php
        _e("Search Results for: ".'<span class="badge badge-danger">'.get_query_var('s').'</span>' );
    ?>
    </h3>
    <hr class="my-4">
</div>

<main role="main" class="container">
    <div class="row">
        <?php
            $none = 12;
            $exist = 8;
            if( get_post_type() ==null ) :
        ?>
        <div class="col-md-<?php echo $none ?> blog-main" style="margin-top:100px">
        <?php else : ?>
        <div class="col-md-<?php echo $exist ?> blog-main">
        <?php endif; ?>
            <?php
                if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'search' );
                    endwhile;
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif; 
            ?>

            <nav aria-label="The Pagination"> <!-- /pagination-->
                <ul class="pagination justify-content-center">
                    <?php echo paginate_links( )?>
                </ul>
            </nav>

        </div><!-- /.blog-main -->
        
        <?php get_sidebar(  ) ?><!-- /sidebar -->
    
    </div><!-- /.row -->

<?php get_footer(  ) ?>