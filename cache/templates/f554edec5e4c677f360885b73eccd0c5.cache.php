<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<?php if ($fn_include = $this->_include("banner.html")) include($fn_include); ?>
<!--banner end-->
<!--search-->
<section class="index-search-wrap wb100 wow fadeInUp bg-red animated">
    <div class="index-search m-auto">
        <?php if ($fn_include = $this->_include("soform.html")) include($fn_include); ?>
    </div>
</section>
<!--search end-->

<?php $return = $this->list_tag("action=navigator type=4 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id'] == 34) { ?>
<section class="index-product-wrap wb100" style="background-image: url('<?php echo dr_thumb($t['thumb']); ?>')" />
<?php }  } }  if ($fn_include = $this->_include("navimg.html")) include($fn_include); ?>
</section>
<!--about-->
<section class="index-about-wrap wb100 wow fadeInUp bg-red animated">
    <div class="index-about m-auto">
        <div class="index-ab-title">
            <div class="title">公司介绍</div>
            <div class="title-en">Company Introduction</div>
			<div class="about-up"></div>
        </div>
        <div class="index-ab-title2">
            <span class="">盛航企业</span>
        </div>
        <div class="index-ab-content">
            <p>
            盛航企业创立于1996年，由广州盛航、上海盛航、铂锐液压组成。广州盛航和铂锐液压坐落在美丽的广州花都区，属于机场商务区，交通便利。
            因为业务发展需要，满足长三角的客户需求，公司于2002年在上海虹桥商务区成立上海盛航密封件有限公司，以辐射更大的市场份额！
            </p>
            <?php $return = $this->list_tag("action=navigator type=4 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id'] == 33) { ?>
                <img src="<?php echo dr_thumb($t['thumb']); ?>" alt="<?php echo $t['title']; ?>">
            </a>
            <?php }  } } ?>
        </div>
        <div class="index-ab-more">
            <a href="<?php echo $ci->get_cache('page-1', 'data', 'index', 1, 'url'); ?>" class="hvr-bounce-to-right">了解更多</a>
        </div>
    </div>
</section>
<!--about end -->
<!--contact-->
<?php $return = $this->list_tag("action=navigator type=4 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id'] == 35) { ?>
<section class="index-contact-wrap wb100 wow fadeInUp bg-red animated" style="background-image: url('<?php echo dr_thumb($t['thumb']); ?>')" />
<?php }  } } ?>
    <div class="index-contact w m-auto">
        <div class="index-ct-box-1">
            <i class="fa fa-map-marker"></i>
            <p>
                <?php echo om_block(1); ?>
            </p>
            <p class="p2">
                <?php echo om_block(2); ?>
            </p>
        </div>
        <div class="index-ct-box-2">
            <i class="fa fa-envelope-o fa-fw"></i>
            <span>
                <a href="mailto:<?php echo om_block(3); ?>"><?php echo om_block(3); ?></a>
            </span>
           
        </div>
    </div>
</section>
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>
<!--contact end-->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>