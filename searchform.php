<form id="searchform" name="form-search" method="get" action="<?php echo home_url('/'); ?>" class="form-inline my-2 my-lg-0">
    <input type="text" class="form-control mr-sm-2" name="s" placeholder="Search" value="<?php the_search_query(); ?>">
    <input type="submit" value="Search" class="btn btn-secondary my-2 my-sm-0">
</form>

<!-- <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
</form> -->