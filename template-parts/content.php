    
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-5 img-index">
                        <img src="<?php echo get_the_post_thumbnail_url()?>" class="card-img" alt="..."  style="height:100%">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <a href="<?php the_permalink()?>">
                                <h3 class="card-title"><?php the_title()?></h3>
                            </a>
                            <p class="card-text"><?php the_excerpt(  )?></p>
                            <p class="small-text">
                                <a class="btn btn-secondary btn-sm" href="<?php the_permalink( )?>">Read more</a>
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    by <?php the_author()?> - On <?php the_date( 'd-m-y' ) ?>
                                    in <?php the_category( ', ' )?>
                                    <span class="badge badge-success">
                                        <i class="fa fa-comments"></i>
                                        <?php echo comment_per_post() ?>
                                    </span>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="card mb-3">
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
                            <p class="card-text">
                                <small class="text-muted">
                                    by <?php the_author()?> - On <?php the_date( 'd-m-Y' ) ?>
                                    <span class="badge badge-success">
                                        <i class="fa fa-comments"></i>
                                        <?php echo comment_per_post() ?>
                                    </span>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
