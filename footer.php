<!-- Footer-->
<footer class="py-4 bg-dark-ffe text-light">
    <p class="m-0 text-center"><?php bloginfo( 'name' ); ?></p>
</footer> <!-- /footer-->

<?php wp_footer(); ?>

<script>
    var c = document.getElementById("ahua").children;
    var i;
    for (i = 0; i < c.length; i++) {
        c[i].classList.add("list-group-item", "list-group-item-action", "d-flex", "justify-content-between", "align-items-center", "border-0");
    }   
</script>
</body>
</html>