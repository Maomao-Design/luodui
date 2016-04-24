<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<section class="content-banner-wrap">  
    <!--content-->
    <div class="content-banner m9 m-auto">
        <div class="title">
            <span class="sp1">
                联系方式
            </span><br/>
            <span class="sp2">
                CONTACT
            </span>
        </div>   
        <!--mail-->
        <div class="mail-wrap">
            <a href="mailto:<?php echo om_block(3); ?>">
                <i class="icon-mail icon-com"></i>
                <p><?php echo om_block(3); ?></p>
            </a>
        </div>
        <!--mail end -->
        <!--address-->
        <div class="address-wrap">
            <?php echo $content; ?>
            <!--<table>
                <tr>
                    <th>广州公司办事处</th>
                    <th>上海公司办事处</th>
                </tr>
                <tr>
                    <td>
                        <div class="test">
                            <span class="icon-com icon-address"></span>
                            <span class="fr">广州市花都区花东镇花北路9号花都(国际)工程机械配件交易基地A2栋23-26号</span>
                        </div>
                    </td>
                    <td>
                        <div class="test">
                            <span class="icon-com icon-address"></span>
                            <span class="fr">上海市江桥镇金园三路218号一号楼</span>
                        </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="test">
                            <span class="icon-com icon-phone"></span>
                            <span class="fr">(020)37706818</span>
                        </div>
                    </td>
                    <td>
                        <div class="test">
                            <span class="icon-com icon-phone"></span>
                            <span class="fr">(021)69139027  69139209</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="test">
                            <span class="icon-com icon-fax"></span>
                            <span class="fr">(020)37706819</span>
                        </div>
                    </td>
                    <td>
                        <div class="test">
                            <span class="icon-com icon-fax"></span>
                            <span class="fr">(021)69139210</span>
                        </div>
                    </td>
                </tr>
            </table>-->
        </div>
        <!--address end-->
    </div>
    <!--content end -->
   
</section>
<!--banner end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>