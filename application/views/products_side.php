<?php
    $item = array("idisc-notebook",
                  "paper-commodity",
                  "reinforce-filler",
                  "spine-guard",
                  "ring-binder",
                  "sewing-products");
?>
<div id="container_body">
<div id="body">
<div id="vmbrowse">
<img src="images/content/products_welcome.jpg" style="padding-bottom:10px;" alt=""/><br/>
<div id="leftcolumn">
    <?php for($i = 0; $i < count($item) ; ++$i): ?>
        <?php if($item[$i] == $title): ?>
            <a href="products/<?=$item[$i];?>"><img src="images/product_menu/<?=$item[$i]?>-bar-on.jpg"/></a> <br/>
        <?php else: ?>
            <?php //echo $title,$item[$i]?>
            <a href="products/<?=$item[$i];?>"><img src="images/product_menu/<?=$item[$i]?>-bar.jpg"/></a> <br/>
        <?php endif; ?>
    <?php endfor ?>
    <br><strong>* PRODUCT IMAGES MAY VARY<strong>
</div>

<!-- For zoom in/zoom out menu bar --!>
<!--
<script type="text/javascript" src="script/jquery.hoverpulse.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#leftcolumn a img').hoverpulse({
            size: 10,
            speed: 400
        });
    });
</script>
 --!>
