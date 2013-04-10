<?php $ptype = array("", "Type", "Description", "Size", "Material", "Features", "Sell Unit", "Inner Carton", "Master Carton"); ?>
<div id="maincolumn_products">
    <div id="vmMainPage">
        <h3></h3>
        <div id="product_list" style="">
            <table width="450px" cellspacing="0" cellpadding="0" border="0" style="float:center;">
                <tr>
                    <td valign="center" align="center" height="140px" style="padding:10px;">
                        <style> @import url("css/jqGalScroll.css"); </style>
                        <script type="text/javascript" src="script/jqgalscroll.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#product_slide").jqGalScroll();
                            });
                        </script>

                        <ul id="product_slide">
                            <li><img src="images/product_menu/<?=$title?>-0.jpg" border="0" /></li>
                            <li><img src="images/product_menu/<?=$title?>-1.jpg" border="0" /></li>
                            <li><img src="images/product_menu/<?=$title?>-2.jpg" border="0" /></li>
                            <li><img src="images/product_menu/<?=$title?>-3.jpg" border="0" /></li>
                        </ul>

                    </td>
                </tr>
                <tr>
                    <td valign="bottom" style="text-align:center;height:50px;">
                        <table style="margin-top:20px;margin-left:50px" cellpadding="2" cellspacing="0" border="1" width="650px">
                            <tbody>
                                <?php foreach($product_info as $ptype=>$pinfo) { ?>
                                    <?php if($ptype == 'type_') {continue;} ?>
                                    <tr>
                                        <td class="flypage_key_label"><?=strtoupper($ptype);?></td>
                                        <td style="text-align:left;padding:5px;"><?=$pinfo;?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr> <td valign="bottom"> </td> </tr>
                <tr><td>&nbsp;</td></tr>
            </table>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
