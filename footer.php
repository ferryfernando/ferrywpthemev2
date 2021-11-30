<!-- Footer-->
<footer class="py-4 bg-dark-ffe text-light">
    <p class="m-0 text-center"><?php bloginfo( 'name' ); ?></p>
</footer> <!-- /footer-->


<?php wp_footer(); ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script>
    //pakai jquery, di atas ini mesti dikasih src jquery
//     $(document).ready(function(){
//         $('#ahua a').addClass('list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 ');
// });


  var c = document.getElementById("ahua").children;
  var i;
  for (i = 0; i < c.length; i++) {
    c[i].classList.add("list-group-item", "list-group-item-action", "d-flex", "justify-content-between", "align-items-center", "border-0");
}

</script>
</body>
</html>