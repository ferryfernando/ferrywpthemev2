<!-- Search-->
<form role="search" method="get" class="" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group py-4 px-3 px-md-0">
        <input type="text" class="form-control rounded-0" placeholder="Pencarian" aria-label="Recipient's username" aria-describedby="button-addon2" value="<?php echo get_search_query() ?>" name="s">
        <button class="btn btn-outline-primary rounded-0" type="submit" id="button-addon2">Cari</button>
    </div> 
</form> <!--/search-->