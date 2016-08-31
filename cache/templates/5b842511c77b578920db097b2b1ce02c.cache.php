<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

<!--product dingzhi-->
<section class="product-wrap wb100">
  <div class="product-box w m-auto">
        <!--aside-->
        <?php if ($fn_include = $this->_include("sider.html")) include($fn_include); ?>
        <!--aside end-->
        <section class="product-content fr">
            <?php if ($fn_include = $this->_include("name.html")) include($fn_include); ?>
            <div class="nok-list-wrap">
                <!--paging-->
                <!--list box-->
                <div class="nok-list-main">
                    <table class="tb">
                        <tr class="tr0">
                            <th class="th1">NOK零件号</th>
                            <th class="th2">型号</th>
                            <th class="th2">轴径（d）</th>
                            <th class="th2">外径（D）</th>
                            <th class="th2">宽（b）（h）</th>
                        </tr>

                        <?php $return = $this->list_tag("action=module catid=$catid order=displayorder_asc,updatetime page=1"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                            <tr>
                                <td class="td1"><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></td>
                                <td class="td2">
                                    <?php echo $t['xinghao']; ?>
                                </td>
                                <td class="td2">
                                   <?php echo $t['zhoujing']; ?>
                                </td>
                                <td class="td2">
                                   <?php echo $t['waijing']; ?>
                                </td>
                                <td class="td2">
                                    <?php echo $t['kuan']; ?>
                                </td>
                            </tr>
                        <?php } } ?>
                    </table>
                </div>
                <!--list box end-->
                <div class="paging-box" style="padding-top: 20px;">
                    <ul>
                        <?php echo $pages; ?>
                    </ul>
                </div>
            </div>
        </section>
        <div class="clear"></div>
  </div>
</section>
<!--product dingzhi end -->

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>