<?php
if( ! function_exists( 'better_comments' ) ):
function better_comments($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="card">
        <div class="card-body">

            <div class="comment">
                <div class="d-none d-sm-block">
                    <?php echo get_avatar($comment,$size='30',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>
                    <strong><?php echo get_comment_author() ?></strong>
                </div>
                <div class="comment-block">
                    <!-- <div class="comment-arrow"></div> -->
    
                        <?php if ($comment->comment_approved == '0') : ?>
                            <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
                            <br />
                        <?php endif; ?>
    
                        <span class="comment-by">
                            <!-- <strong><?php echo get_comment_author() ?></strong> -->
                            <span class="float-right">
                                <span> 
                                    <a href="#">
                                        <i class="fa fa-reply"></i> 
                                        <?php 
                                            comment_reply_link(
                                                array_merge( $args, 
                                                    array(
                                                        'depth' => $depth, 
                                                        'max_depth' => $args['max_depth']
                                                    )
                                                )
                                            ) 
                                        ?>
                                    </a>
                                </span>
                            </span>
                        </span>
                        <hr>
                        <?php comment_text() ?>
                                                    
                    
                        <span class="date float-right">
                            <?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?>
                        </span>
                </div>
            </div>
        </div>
    </div>
    <br>
<?php
        }
endif;
