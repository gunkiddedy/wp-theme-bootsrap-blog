
    <!-- content single -->
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="blog-post">
            <div class="card">
                <img src="<?php echo get_the_post_thumbnail_url()?>" class="card-img-top" alt="...">
            </div>
            <br>
            <p class="blog-post-meta">
                Posted by <?php the_author()?> - On <?php the_date( 'd-m-Y' ) ?>
                in <?php the_category( ', ' )?>    
            </p>
            <hr>
            <p><?php the_content()?></p>
            <hr>
            <div class="row justify-content-between">
                <div class="col-4">
                    <p><?php previous_post_link( ) ?></p>
                </div>
                <div class="col-4">
                    <p><?php next_post_link( ) ?> </p>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="blog-post">
            <p class="blog-post-meta">
                Posted by <a href="#"><?php the_author()?></a>
                - On <?php the_date() ?> 
            </p>
            <p><?php the_content()?></p>
            <hr>
            <div class="row justify-content-between">
                <div class="col-4">
                    <p><?php previous_post_link( ) ?></p>
                </div>
                <div class="col-4">
                    <p><?php next_post_link( ) ?> </p>
                </div>
            </div>
        </div>
    <?php endif; ?>