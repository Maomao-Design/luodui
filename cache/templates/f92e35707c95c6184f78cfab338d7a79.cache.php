<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<section class="product-banner">
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