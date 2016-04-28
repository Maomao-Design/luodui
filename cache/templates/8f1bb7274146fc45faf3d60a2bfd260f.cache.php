<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

<!--product dingzhi-->
<section class="product-wrap">
  <div class="product-box w m-auto">
        <!--aside-->
        <div class="aside-abs-bg"></div>
        <aside class="product-aside fl">
            <hggroup class="columns-title">
                SIMRIT <i> ®️</i>  密封件
                <span class="bot"></span>
            </hggroup>
            <div class="aside-bar-wrap">
                <ul>
                   <?php $return = $this->list_tag("action=category pid=$cat[pid]"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                    <li $<?php if ($t['id']==$catid) { ?> class="on" <?php } ?>>
                        <h6 class="aside-top"><?php echo $t['name']; ?><i></i></h6>
                        <div class="aside-childen">
                          <?php $return_t2 = $this->list_tag("action=module catid=$t[id] order=displayorder,updatetime  return=t2"); if ($return_t2) extract($return_t2); $count_t2=count($return_t2); if (is_array($return_t2)) { foreach ($return_t2 as $key_t2=>$t2) { ?>
                            <a href="<?php echo $t2['url']; ?>"  $<?php if ($t2['id']==$id) { ?> class="action" <?php } ?> ><?php echo $t2['title']; ?></a>
                           <?php } } ?>
                        </div>
                    </li>
                    <?php } } ?>
                </ul>
            </div>
        </aside>
        <!--aside end-->
        <section class="product-content fr"> 
            <div class="simrit-top">
                 <div class="title"><?php echo $title; ?></div>
            </div>
           
            <!--simrit show box-->
            <div class="simrit-show-wrap">
                 <div class="simrit-show-box">
                    <div class="simrit-show-title">
                        <p><strong>型号:</strong><?php echo $xinghao; ?></p>
                        <p><strong>材料:</strong><?php echo $cailiao; ?></p>
                    </div>
                    <!--特点-->
                    <div class="simrit-show-lisb">
                        <h6 class="title">特点</h6>
                        <p>
                           <?php echo $tedian; ?>
                        </p>
                    </div>
                    <!--特点 end-->
                    <div class="simrit-show-lisb">
                        <h6 class="title">材料</h6>
                        <p>
                            <?php echo $cailiaoxiangxi; ?>
                        </p>
                    </div>
                    <div class="simrit-show-lisb">
                        <h6 class="title">操作条件</h6>
                        <p>
                           <?php echo $caozuotiaojian; ?>
                        </p>
                    </div>
                    <div class="simrit-show-lisb">
                        <h6 class="title">优点</h6>
                        <p>
                            <?php echo $youdian; ?>
                        </p>
                    </div>
                    <div class="simrit-show-lisb simrit-show-lisb-end">
                        <h6 class="title">推荐应用</h6>
                        <p>
                            <?php echo $tuijianyingyong; ?>
                        </p>
                    </div>
                </div>
                
            </div>
            <!--simrit show box end-->
        </section>
        <div class="clear"></div>
  </div>  
</section>
<!--product dingzhi end -->

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>