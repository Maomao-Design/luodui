<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<section class="product-solist-banner">
    <section class="index-search-wrap">
        <div class="index-search m-auto">
            <form name="search" action="index.php" type="get">
                <input type="hidden" name="c" value="so"/>
                <input type="hidden" name="module" value="<?php echo $dirname; ?>"/>
                <input type="text" class="search-key" id="keyword" name="keyword" value="<?php echo $keyword; ?>"  placeholder="输入产品类型名称">
                <button type="submit" class="index-btn">
                    <i class="icon icon-search"></i>
                </button>
                
            </form>
        </div>
    </section>
    <!--search end-->
    <section class="so-list-wrap">
       <div class="so-list-box m9 m-auto">
           <div class="so-list-nav">
                <?php if (is_array($module)) { $count=count($module);foreach ($module as $dir=>$t) { ?>
                    
                        <a href="<?php if (intval($t['search']['sototal']) > 0) {  echo dir_so_url($params, 'module', $dir, $urlrule);  } ?>" <?php if ($dir==$dirname) { ?>class="on"<?php } ?>><?php echo $t['name']; ?>（<?php echo intval($t['search']['sototal']); ?>）</a>
                   
                        
                <?php } } ?>
   
           </div>
           
           <!--list-->
           <div class="so-list-main">
               <ul>
                   <!--<li>
                       <a href="">
                           产品名称产品名称产品名称产品名称
                           <span>详情</span>
                       </a>
                   </li>-->
                   <?php if ($contentid) {  $return = $this->list_tag("action=module module=$dirname IN_id=$contentid"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                    <li>
                        <a href="<?php echo $t['url']; ?>">       
                            <?php echo dr_keyword_highlight($t['title'], $keyword); ?>
                            <span>详情</span>
                        </a>
                    </li>
                    <?php } }  } ?>
                    
               </ul>
           </div>
           <!--list end-->
           <div class="paging-wrap"> 
              <!--<a class="next-btn" href="" data-ci-pagination-page="2"></a>
              <span class="paging-num">1/6</span>-->
            
          </div>
       </div>
   </section>
   
</section>
<!--banner end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>

<!--<form name="search" action="index.php" type="get">
    <input type="hidden" name="c" value="so"/>
    <input type="hidden" name="module" value="<?php echo $module; ?>"/>
    <div class="sr_frm">
        <div class="sr_frm_box">
            <div class="sr_frmipt"><input type="text" id="keyword" name="keyword" class="ipt"><input type="submit" class="ss_btn" value="搜 索"></div>
        </div>
    </div>
</form>
<script language="JavaScript">
    <!--
    $(document).ready(function(){
        $("#keyword").focus();
    });
</script>
    //-->
<script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>