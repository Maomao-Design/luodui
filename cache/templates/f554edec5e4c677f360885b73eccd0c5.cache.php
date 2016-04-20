<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<?php if ($fn_include = $this->_include("banner.html")) include($fn_include); ?>
<!--banner end-->
<!--search-->
<section class="index-search-wrap">
    <div class="index-search m-auto">
        <input type="text" class="search-key" placeholder="输入产品类型名称">
        <button type="submit" class="index-btn">
            <i class="icon icon-search"></i>
        </button>
    </div>
</section>
<!--search end-->
<section class="index-product-wrap">
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
<!--about-->
<section class="index-about-wrap">
    <div class="index-about m-auto">
        <div class="index-ab-title">
            <img src="<?php echo HOME_THEME_PATH; ?>build/images/index-about-en.png" alt="">
        </div>
        <div class="index-ab-title2">
            <span class="">盛航企业</span>
        </div>
        <div class="index-ab-content">
            <p>
            盛航企业创立于1996年，由广州盛航、上海盛航、铂锐液压组成。广州盛航和铂锐液压坐落在美丽的广州花都区，属于机场商务区，交通便利。
            因为业务发展需要，满足长三角的客户需求，公司于2002年在上海虹桥商务区成立上海盛航密封件有限公司，以辐射更大的市场份额！
            </p>
            <img src="<?php echo HOME_THEME_PATH; ?>build/images/index-about-pic.png" alt="">
        </div>
        <div class="index-ab-more">
            <a href="" class="hvr-bounce-to-right">了解更多</a>
        </div>
    </div>
</section>
<!--about end -->
<!--contact-->
<section class="index-contact-wrap">
    <div class="index-contact w m-auto">
        <div class="index-ct-box-1">
            <span class="icon-map icon-com"></span>
            <p>
                广州市花都区花东镇花北路9号花都 （国际） 
                工程机械配件交易基地A2栋23-26号 
            </p>
            <p class="p2">
                上海市江桥镇金园三路218号一号楼
            </p>
        </div>
        <div class="index-ct-box-2">
            <span class="icon-mail icon-com icon"></span>
            <span>
                <a href="mailto:shenghangseal@126.com">shenghangseal@126.com</a>
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