<?php
/* Custom search form */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url(home_url('/')); ?>"
    class="input-group mb-3">
    <div class="input-group">
        <input type="search" class="header-search-input border-0 bg-black-light text-white" aria-label="search" name="s"
            id="search-input" value="<?php echo esc_attr(get_search_query()); ?>">
        <button type="submit" class="header-search-button">Buscar</button>
    </div>
</form>