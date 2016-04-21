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