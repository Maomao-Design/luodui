<div class="aside-abs-bg"></div>
<aside class="product-aside fl">
    <hggroup class="columns-title">
        NOK <i> ®️</i>  密封件 
        <span class="bot"></span>
    </hggroup>
    <div class="aside-bar-wrap">
        <ul>
            <?php $return_t = $this->list_tag("action=category module=nok pid=0  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
            <li $<?php if ($t['id']==$ci->get_cache('module-1-nok', 'category', $catid, 'pid')) { ?> class="on" <?php } ?>>
                <h6 class="aside-top"><?php echo $t['name']; ?>  <i></i></h6>
                <div class="aside-childen">
                    <?php $return_t2 = $this->list_tag("action=category module=nok pid=$t[id]  return=t2"); if ($return_t2) extract($return_t2); $count_t2=count($return_t2); if (is_array($return_t2)) { foreach ($return_t2 as $key_t2=>$t2) { ?>
                    <a href="<?php echo $t2['url']; ?>"  $<?php if ($t2['id']==$catid) { ?> class="action" <?php } ?> ><?php echo $t2['name']; ?></a>
                    <?php } } ?>
                </div>
            </li>
            <?php } } ?>
        </ul>
    </div>
</aside>