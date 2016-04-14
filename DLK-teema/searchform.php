<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <ul class="menu">
        <li>
            <input type="search" placeholder="Haku" value="<?php the_search_query(); ?>" name="s">
        </li>
        <li>
            <button type="submit" class="button">Search</button>
        </li>
    </ul>
</form>