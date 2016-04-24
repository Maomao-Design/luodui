<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--page-->
<section class="product-wrap wb100">
  <div class="product-box w m-auto">
        <!--aside-->
        <div class="page-abs-bg"></div>
        <aside class="page-aside fl">
            <hggroup class="columns-title">
                盛航企业 <i> ®️</i>  <?php echo $parent['name']; ?>
                <span class="bot"></span>
            </hggroup>
            <div class="aside-bar-wrap">
                <ul>
                    <?php if (is_array($related)) { $count=count($related);foreach ($related as $t) { ?>
                    <li <?php if ($id==$t['id']) { ?> class="on" <?php } ?>>
                        <a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a>
                    </li>
                    <?php } } ?>
                </ul>
            </div>
        </aside>
        <!--aside end-->
        <section class="product-content fr" style="width:890px;">
            <div class="simrit-top">
                 <div class="title"><?php echo $name; ?></div>
            </div>    
            <!--page show box-->
            <div class="simrit-show-wrap">
                <div class="simrit-show-box">
                    <?php echo $content; ?>
                </div> 
            </div>
            <!--page show end-->
        </section>
        <div class="clear"></div>
  </div>  
</section>
<!--page end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>