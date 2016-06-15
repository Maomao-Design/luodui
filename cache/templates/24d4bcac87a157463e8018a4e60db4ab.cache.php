
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



<script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>