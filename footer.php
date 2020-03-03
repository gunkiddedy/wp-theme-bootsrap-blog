



</div><!-- /.row -->

</main><!-- /.container -->

<?php if( get_post_type() !=null ) :?>
<footer class="blog-footer">
    
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-3">
                <a href="<?php echo site_url( ) ?>">Home <span class="sr-only"></a> &nbsp;
                <a href="<?php echo site_url( 'about' ) ?>">About</a> &nbsp;
                <a href="<?php echo site_url( 'profile' ) ?>">Profile</a> &nbsp;
                <a href="<?php echo site_url( 'contact' ) ?>">Contact</a> &nbsp;
            </div>
            <div class="col-3">
                <p>
                    developed by <a href="https://www.facebook.com/setiawandedys">Setiawan-Dedy</a>
                </p>
            </div>
        </div>

    </div>
                    
    
                    
</footer>
<?php endif; ?>

<?php wp_footer(  ) ?>

</body>
</html>