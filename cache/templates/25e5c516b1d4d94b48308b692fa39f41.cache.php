<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

<!--product dingzhi-->
<section class="product-wrap">
  <div class="product-box w m-auto">
        <!--aside-->
        <?php if ($fn_include = $this->_include("sider.html")) include($fn_include); ?>
        <!--aside end-->
        <section class="product-content fr">
            <?php if ($fn_include = $this->_include("name.html")) include($fn_include); ?>
            <!--nok show box-->
            <div class="nok-show-wrap">
                <!--thumb-->
                <div class="img-show">
                    <img src="<?php echo dr_thumb($thumb); ?>" alt="<?php echo $title; ?>">
                </div>
                <!--thumb end -->
                <!--parameter-->
                <div class="nok-parameter-wrap">
                    <div class="nok-parameter">
                        <div class="title"><?php echo $title; ?></div>
                        <div class="content-box">
                            <table class="tb">
                                <tr>
                                    <td class="td1">
                                        分类
                                    </td>
                                    <td class="td2">
                                        <?php echo dr_catpos($catid, '/',false); ?>               
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        型号
                                    </td>
                                    <td class="td2">
                                        <?php echo $xinghao; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        封装
                                    </td>
                                    <td class="td2">
                                        <?php echo $fengzhuang; ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="td1">
                                        库存量
                                    </td>
                                    <td class="td2">
                                        <?php echo $kucunliang; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        价格
                                    </td>
                                    <td class="td2">
                                        <?php echo $jiage; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        批号
                                    </td>
                                    <td class="td2">
                                        <?php echo $tpihao; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        交货期
                                    </td>
                                    <td class="td2">
                                        <?php echo $jiaohuoqi; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        更新日期
                                    </td>
                                    <td class="td2">
                                        <?php echo $updatetime; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        公称尺寸D
                                    </td>
                                    <td class="td2">
                                        <?php echo $gongchengchicund; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                       公称尺寸d
                                    </td>
                                    <td class="td2">
                                       <?php echo $gongchengchicunds; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        公称尺寸h
                                    </td>
                                    <td class="td2">
                                        <?php echo $gongchengchicunh; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        腔体尺寸D
                                    </td>
                                    <td class="td2">
                                        <?php echo $qiangtichicund; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        腔体尺寸d
                                    </td>
                                    <td class="td2">
                                       <?php echo $qiangtichicunds; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        腔体尺寸D1
                                    </td>
                                    <td class="td2">
                                        <?php echo $qiangtichicund1; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        腔体尺寸HA
                                    </td>
                                    <td class="td2">
                                        <?php echo $qiangtichicunha; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        腔体尺寸C
                                    </td>
                                    <td class="td2">
                                        <?php echo $qiangtichicunc; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        NOK零件号
                                    </td>
                                    <td class="td2">
                                        <?php echo $noklingjianhao; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        产品说明
                                    </td>
                                    <td class="td2">
                                        <?php echo $chanpinshuoming; ?>
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
                <!--parameter end-->
            </div>
            <!--nok show box end-->
        </section>
        <div class="clear"></div>
  </div>  
</section>
<!--product dingzhi end -->

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>