    
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="card mb-3" style="">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo get_the_post_thumbnail_url()?>" class="card-img" alt="..."  style="height:100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="<?php the_permalink()?>">
                                <h3 class="card-title"><?php the_title()?></h3>
                            </a>
                            <p class="card-text"><?php the_excerpt(  )?></p>
                            <p class="small-text">
                                <a class="btn btn-secondary btn-sm" href="<?php the_permalink( )?>">Read more</a>
                            </p>
                            <p class="card-text"><small class="text-muted">Posted by <?php the_author()?> - On <?php the_date() ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="card mb-3" style="">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="card-body">
                            <a href="<?php the_permalink()?>">
                                <h3 class="card-title"><?php the_title()?></h3>
                            </a>
                            <p class="card-text"><?php the_excerpt(  )?></p>
                            <p class="small-text">
                                <a class="btn btn-secondary btn-sm" href="<?php the_permalink( )?>">Read more</a>
                            </p>
                            <p class="card-text"><small class="text-muted">Posted by <?php the_author()?> - On <?php the_date() ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
