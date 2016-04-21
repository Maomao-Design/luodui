<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--product dingzhi-->
<section class="product-wrap">
  <div class="product-box w m-auto">
        <?php if ($fn_include = $this->_include("side.html")) include($fn_include); ?>
        <!--aside end-->
        <section class="product-content fr">
           
              <div class="new-show-wrap">
                <div class="show-title">
                    <?php echo $title; ?>
                </div>
                <div class="show-body">
                    <?php echo $content; ?>
                </div>
            </div>
        </section>
        <div class="clear"></div>
  </div>  
</section>
<!--product dingzhi end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>

<script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>