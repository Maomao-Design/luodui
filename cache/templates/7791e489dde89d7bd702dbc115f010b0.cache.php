<div class="news-main-r fr">
    <div class="new-s-tabs">
        <a href="javascript:void(0);" class="on">最新要闻</a>
        <a href="javascript:void(0);">热门要闻</a>
    </div>
    <div class="new-s-tab-main">
        <div class="new-s-tab-content show">
            <ul>
                <?php $return = $this->list_tag("action=module flag=1  order=displayorder,updatetime num=10"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($fn_include = $this->_include("flag.html")) include($fn_include);  } } ?>
            </ul>
        </div>
        <div class="new-s-tab-content">
            <ul>
                <?php $return = $this->list_tag("action=module flag=2  order=displayorder,updatetime num=10"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($fn_include = $this->_include("flag.html")) include($fn_include);  } } ?>
            </ul>
        </div>
    </div>
</div>