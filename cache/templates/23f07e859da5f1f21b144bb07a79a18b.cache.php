<header class="header">
    <div class="w m-auto pstRe">
        <div class="logo">
            <a href="/">
                <img src="<?php echo HOME_THEME_PATH; ?>build/images/logo.png" alt="">
            </a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="/">首页</a></li>
                <?php $return = $this->list_tag("action=navigator type=0 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <li>
                    <a href="<?php echo $t['url']; ?>" <?php if ($t['target']) { ?>target="_blank"<?php } ?>><?php echo $t['name']; ?></a>
                    <?php if ($t['child']) { ?>
                    <div class="nav-children">
                        <?php $return_t2 = $this->list_tag("action=navigator type=0 pid=$t[id]  return=t2"); if ($return_t2) extract($return_t2); $count_t2=count($return_t2); if (is_array($return_t2)) { foreach ($return_t2 as $key_t2=>$t2) { ?>
                        <a href="<?php echo $t2['url']; ?>" <?php if ($t2['target']) { ?>target="_blank"<?php } ?>><?php echo $t2['name']; ?></a>
                        <?php } } ?>
                    </div>
                    <?php } ?>
                </li>
                <?php } } ?>
            </ul>
        </nav>
    </div>
</header>