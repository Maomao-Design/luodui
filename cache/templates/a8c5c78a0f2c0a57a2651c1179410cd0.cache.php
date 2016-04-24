<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<section class="about-banner-wrap">
   
   <div class="about-banner">
       <img src="<?php echo dr_thumb($thumb); ?>" alt="2">
   </div>
   
</section>
<!--banner end -->
<section class="about-main-wrap">
    <div class="page-main w m-auto">
        <?php echo $content; ?>
    </div>
</section>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>