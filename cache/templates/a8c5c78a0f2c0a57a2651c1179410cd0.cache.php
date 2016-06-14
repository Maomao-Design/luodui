<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

<!--banner-->
<section class="about-banner-wrap wb100">

    <div class="about-banner">
        <div class="about-1">
            <img src="<?php echo HOME_THEME_PATH; ?>build/images/about1.png" alt="">
        </div>
        <div class="about-1-text">
            <div class="title-en">Company Introduction</div>
            <div class="title">公司介绍</div>
            <div class="contents">
                <p>
                    盛航企业创立于1996年，由广州盛航、上海盛航、铂锐液压组成。
                    广州盛航和铂锐液压坐落在美丽的广州花都区，属于机场商务区，交通便利。
                    因为业务发展需要，满足长三角的客户需求，公司于2002年在上海虹桥商务区成立上海盛航密封件有限公司，以辐射更大的市场份额！
                </p>
            </div>
        </div>
    </div>

</section>
<!--banner end -->
<section class="about-main-2 wb100" id="about2">
    <div class="w9 m-auto">
        <!--left-->
        <div class="about-2-text">
            <div class="title-en">The Main Business Of the Company</div>
            <div class="title">公司主营</div>
            <div class="contents">
                <p>
                    恩福集团旗下的日本NOK、德国SIMRIT 。
                </p>
                <p>
                    NOK和SIMRIT分别是日本和德国的油封，同时是世界最大的油封密封件生产厂家之一，
                    NOK密封件的主要型号： 轴封：IDI、ISI、SPNO、IUH 孔封 SPGW SPGO OSI ODI 双用：USI USH UPH V99H V96H 防尘DKI DWI DKB DKH DSI LBI LBH等， 缓冲环：HBY HBTS SPNS,抗磨环：RYT WR 支撑环KZT等。
                    油封SB/SC TB/TC TCV/TCN以及 CFW 的系列产品等。 其他品部的 O-RING 橡胶制品等等。
                </p>
            </div>
        </div>
        <!--left end-->
        <!--rigth-->
        <div class="about-2-banner">
            <div class="swiper-wrapper">
                <?php $return = $this->list_tag("action=navigator order=displayorder type=5 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <div class="swiper-slide" style="background-image:url(<?php echo dr_thumb($t['thumb']); ?>)"></div>
                <?php } } ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
        </div>
        <!--rigth end-->
    </div>
</section>
<section class="about-main-3 wb100" id="about3">
    <div class="w9 m-auto">
        <!--left-->
        <div class="about-3-banner">
            <div class="swiper-wrapper">
                <?php $return = $this->list_tag("action=navigator order=displayorder type=6 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <div class="swiper-slide" style="background-image:url(<?php echo dr_thumb($t['thumb']); ?>)"></div>
                <?php } } ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
        </div>
        <!--left end-->
        <!--rigth-->
        <div class="about-3-text">
            <div class="contents">
                <p class="p1">
                    台湾DING ZING DZ 密封件
                </p>
                <p class="p1">
                    UN D-1 D-2 DH ME 等等系列！
                </p>
                <p>
                    多年来公司努力在中国市场的积极推广和技术服务！橡塑密封件虽小，
                    但它的作用使它成为国防、化工、石油、煤炭、交通运输和机械制造等国民经济主要行业中的基础部件和配件，
                    在国民经济发展中占有相当重要的地位。
                    尤其是在工程机械、冶金，电力和其他产业机械行业深受广大客户的认可，经过多年的不懈努力，
                    公司在长三角和珠三角市场享有较高的产品美誉度和市场影响力。
                    目前主要客户山东重工 江苏恒立高压油缸有限公司 三一重工 江阴长龄机械制造有限公司 等等上市公司！
                    年销售8000多万元人民币！ 公司现有员工49名，高级工程师2名，本科3名，大专26名！平均年龄在30岁！
                    是一个充满朝气、生机勃勃的年轻团队。我们将以专业的解决方案、优秀的客户服务、有能力的员工及团队合作期待成为您首选的供应商和合作伙伴。
                </p>
            </div>
        </div>
        <!--rigth end-->
    </div>
</section>
<!--4-->
<section class="about-main-4 wb100" id="about4">
    <div class="w m-auto">
        <!--left-->
        <div class="about-4-text">
            <div class="title-en">Qualification</div>
            <div class="title">企业资质</div>
            <div class="contents">
                <p>
                    盛航密封件有限公司相关资质证明
                </p>
            </div>
        </div>
        <!--left end-->
        <!--right-->
        <div class="about-4-banner">
            <div class="swiper-wrapper" style="height:442px;">
                <?php $return = $this->list_tag("action=navigator order=displayorder type=7 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <div class="swiper-slide" style="background-image:url(<?php echo dr_thumb($t['thumb']); ?>)"></div>
                <?php } } ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white" style="padding-right:0"></div>
        </div>
        <!--right end-->
    </div>
</section>
<!--4 end-->
<!--5-->
<section class="about-main-5 wb100" id="about5">
    <div class="w m-auto">
        <!--left-->
        <div class="about-5-banner">
            <img src="<?php echo HOME_THEME_PATH; ?>build/images/about5.png" alt="">
        </div>
        <!--left end-->
        <!--right-->
        <div class="about-5-text">
            <div class="title-en">Sales Network</div>
            <div class="title">销售网络</div>
            <div class="contents">
                <p>
                    盛航密封技术有限公司以优质的产品、贴心的服务在全国乃至全球范围内赢得了广泛的客户群，
                    主要外贸出口国家有韩国、日本、俄罗斯、缅甸、新加坡、泰国、印度等国家。
                    在中国区域内，已建立了多渠道的代理合作销售体系，
                    为了进一步拓宽市场，热忱期待有实力的代理商加盟盛航企业，精诚合作，共创双赢！
                </p>
            </div>
        </div>
        <!--right end-->
    </div>
</section>
<!--5 end-->
<!--6-->
<section class="about-main-6 wb100" id="about6">
    <div class="w9 m-auto">
        <ul class="about-6-u">
            <li class="li1 fl">
                <div class="thumb">
                    <img src="<?php echo HOME_THEME_PATH; ?>build/images/about6.1.png" alt="">
                </div>
                <div class="contents">
                    <p>共创多赢</p>
                    <p>一流服务</p>
                </div>
            </li>
            <li class="li2">
                <div class="thumb">
                    <img src="<?php echo HOME_THEME_PATH; ?>build/images/about6.2.png" alt="">
                </div>
                <div class="contents">
                    <p>质量保证</p>
                    <p>诚信为本</p>
                </div>
            </li>
            <li class="li3 fr">
                <div class="thumb">
                    <img src="<?php echo HOME_THEME_PATH; ?>build/images/about6.3.png" alt="">
                </div>
                <div class="contents">
                    <p>创新务实</p>
                    <p>卓越追求</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--6 end-->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
<script>
    D(function () {
        aboutSwiper();
    })

</script><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>