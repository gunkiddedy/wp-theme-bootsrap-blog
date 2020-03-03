    <?php    
        if ( ! is_active_sidebar( 'primary' ) ) {
            return;
        }
    ?>

    <?php if( get_post_type() !=null ) :?>
    <aside class="col-md-4 blog-sidebar">
        <div class="p-4 mb-3 bg-light rounded">
            <h4 class="font-italic">About theme</h4>
            <p class="mb-0">
                This theme was developed by setiawan dedy, you can use to your wordpress site.
                it's 100% free. Cherrsss. :-)
            </p>
        </div>
        <?php dynamic_sidebar( 'primary' ); ?>
    </aside><!-- /.blog-sidebar -->
    <?php endif; ?>