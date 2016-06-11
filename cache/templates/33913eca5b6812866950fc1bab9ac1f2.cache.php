<li class="<?php if ($key<3) { ?> fist <?php } ?>">
    <a href="<?php echo $t['url']; ?>">
        <span class="num"><?php echo $key+1; ?></span>
                                    <span class="txt">
                                        <?php echo dr_strcut($t['title'], 20); ?>
                                    </span>
                                    <span class="time">
                                       <?php echo dr_date($t['_updatetime'], 'm/d'); ?>
                                    </span>
    </a>
</li>