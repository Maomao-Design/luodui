<?php if ($fn_include = $this->_include("header.html")) include($fn_include);  if ($fn_include = $this->_include("mian.html")) include($fn_include); ?>
            <!--left-->
            <div class="news-main-l">
                <div class="news-list-wrap">
                    <ul>
                        <?php $return = $this->list_tag("action=module catid=$catid order=displayorder,updatetime page=1"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                        <li>
                            <div class="title">
                                <a href="<?php echo $t['url']; ?>">
                                    <span><?php echo $t['title']; ?></span>
                                </a>
                            </div>
                            <time class="time"><?php echo dr_date($t['_updatetime'], 'Y-m-d'); ?></time>
                            <div class="thumb">
                                <a href="<?php echo $t['url']; ?>">
                                    <img src="<?php echo dr_thumb($t['thumb']); ?>" alt="<?php echo $t['title']; ?>">
                                </a>
                            </div>
                            <div class="contents">
                                <p>
                                    <?php echo $t['description']; ?>.....
                                </p>
                            </div>
                        </li>
                        <?php } } ?>

                    </ul>
                </div>
                <div class="paging-box">
                    <ul>
                    <?php echo $pages; ?>
                    </ul>
                </div>
            </div>
            <!--left end-->
            <!--right-->
            <?php if ($fn_include = $this->_include("right.html")) include($fn_include); ?>
            <!--right end-->
            <div class="clear"></div>

        </div>
    </div>
</section>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>

<script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>