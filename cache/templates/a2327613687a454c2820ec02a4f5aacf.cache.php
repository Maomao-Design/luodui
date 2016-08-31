<footer class="footer wb100">
    <div class="footer-main m-auto">
        <ul class="footer-u">
            <?php $return = $this->list_tag("action=navigator type=2 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
            <li>
                <h6 class="title"><a href="<?php echo $t['url']; ?>" <?php if ($t['target']) { ?>target="_blank"<?php } ?>><?php echo $t['name']; ?></a></h6>
                <?php if ($t['child']) { ?>
                <div class="childen">
                    <?php $return_t2 = $this->list_tag("action=navigator type=2 pid=$t[id]  return=t2"); if ($return_t2) extract($return_t2); $count_t2=count($return_t2); if (is_array($return_t2)) { foreach ($return_t2 as $key_t2=>$t2) { ?>
                    <a href="<?php echo $t2['url']; ?>" <?php if ($t2['target']) { ?>target="_blank"<?php } ?>><?php echo $t2['name']; ?></a>
                    <?php } } ?>
                </div>
                 <?php } ?>
            </li>
            <?php } } ?>
        </ul>
    </div>
    <div class="footer-cp">
        <?php echo om_block(4); ?>
    </div>
</footer>

<!--[if lt IE 8]>
<style>html,body{overflow:hidden;height:100%}</style>
<div class="tb-ie-updater-layer"></div>
<div class="tb-ie-updater-box" data-spm="20161112">
  <a href="https://www.google.cn/intl/zh-CN/chrome/browser/desktop/" class="tb-ie-updater-google" target="_blank" data-spm-click="gostr=/tbieupdate;locaid=d1;name=google">谷歌 Chrome</a>
  <a href="http://www.uc.cn/ucbrowser/download/" class="tb-ie-updater-uc" target="_blank" data-spm-click="gostr=/tbieupdate20161112;locaid=d2;name=uc">UC 浏览器</a>"
</div>
<![endif]-->
</body>
</html>