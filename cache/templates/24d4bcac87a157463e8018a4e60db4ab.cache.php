<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--product dingzhi-->
<section class="product-wrap">
  <div class="product-box w m-auto">
        <!--aside-->
        <div class="aside-abs-bg"></div>
        <aside class="product-aside fl">
            <hggroup class="columns-title">
                最新资讯
                <span class="bot"></span>
            </hggroup>
            <div class="aside-bar-wrap">
                <ul>
                    <?php $return = $this->list_tag("action=category pid=$cat[pid]"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                    <li <?php if ($t['id']==$catid) { ?> class="on" <?php } ?>>
                        <a href="<?php echo $t['url']; ?>"><h6 class="aside-top"><?php echo $t['name']; ?><i></i></h6> </a>
                        
                    </li>
                   
                   <?php } } ?>
                </ul>
            </div>
        </aside>
        <!--aside end-->
        <section class="product-content fr">
           <div class="news-lsit-top">
               <div class="title"><?php echo $ci->get_cache('module-1-news', 'category', $catid, 'name'); ?></div>
            </div>
            <div class="news-lsit-wrap">
                <div class="paging-wrap">
                    <a href="" class="next-btn" ></a>
                    <span class="paging-num">
                        1/9
                    </span>
                </div>
                <div class="news-list-main">
                    <ul>
                        <?php $return = $this->list_tag("action=module catid=$catid order=displayorder,updatetime page=1"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                        <li>
                            <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?> <span class="fr">更多</span></a>
                        </li>
                        
                        <?php } } ?>
                    </ul>
                   
                </div>
            </div>
        </section>
        <div class="clear"></div>
  </div>  
</section>
<!--product dingzhi end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>

<script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>