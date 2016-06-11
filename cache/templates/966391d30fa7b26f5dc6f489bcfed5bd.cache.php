<section class="news-wrap wb100">
    <?php $return = $this->list_tag("action=navigator type=4 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id'] == 40) { ?>
    <div class="new-banner" style="background-image:url(<?php echo dr_thumb($t['thumb']); ?>)"></div>
    <?php }  } } ?>

    <div class="news-box w m-auto">
        <div class="new-tabs">

            <?php $return = $this->list_tag("action=category pid=$cat[pid]"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
            <a href="<?php echo $t['url']; ?>" class="tab<?php echo $key+1;  if ($t['id']==$catid) { ?> on <?php } ?>"><?php echo $t['name']; ?></a>
            <?php } } ?>

        </div>
        <div class="news-main">
            <div class="mianbao-wrap">
                当前位置：<?php echo MODULE_NAME; ?>－<?php echo dr_catpos($catid, '-', true, '<a href="{url}">{name}</a>'); ?>
            </div>