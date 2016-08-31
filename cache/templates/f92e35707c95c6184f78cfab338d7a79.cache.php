<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<?php $return = $this->list_tag("action=navigator type=4 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id'] == 36) { ?>
<section class="product-banner wb100" style="background-image: url('<?php echo dr_thumb($t['thumb']); ?>')" />
<?php }  } } ?>
    <section class="index-search-wrap">
        <div class="index-search m-auto">
           <?php if ($fn_include = $this->_include("soform.html")) include($fn_include); ?>
        </div>
    </section>
    <!--search end-->
    <?php if ($fn_include = $this->_include("navimg.html")) include($fn_include); ?>
</section>
<!--banner end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>

<script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>