<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<section class="product-banner">
    <section class="index-search-wrap">
        <div class="index-search m-auto">
            <form name="search" action="index.php" type="get">
                <input type="hidden" name="c" value="so"/>
                <input type="hidden" name="module" value="nok"/>
                <input type="text" class="search-key" id="keyword" name="keyword"  placeholder="输入产品类型名称">
                <button type="submit" class="index-btn">
                    <i class="icon icon-search"></i>
                </button>
            </form>
        </div>
    </section>
    <!--search end-->
    
        <div class="index-product m-auto">
            <ul class="index-product-u">
                <li>
                    <a href="">
                        <img src="<?php echo HOME_THEME_PATH; ?>build/images/index-pro1.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo HOME_THEME_PATH; ?>build/images/index-pro2.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo HOME_THEME_PATH; ?>build/images/index-pro3.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
   
</section>
<!--banner end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>

<!--<form name="search" action="index.php" type="get">
    <input type="hidden" name="c" value="so"/>
    <input type="hidden" name="module" value="<?php echo $module; ?>"/>
    <div class="sr_frm">
        <div class="sr_frm_box">
            <div class="sr_frmipt"><input type="text" id="keyword" name="keyword" class="ipt"><input type="submit" class="ss_btn" value="搜 索"></div>
        </div>
    </div>
</form>
<script language="JavaScript">
    <!--
    $(document).ready(function(){
        $("#keyword").focus();
    });
</script>
    //-->
<script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>