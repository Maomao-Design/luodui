<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<?php $return = $this->list_tag("action=navigator type=4 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id'] == 39) { ?>
<section class="caigou-banner-wrap wb100" style="background-image: url('<?php echo dr_thumb($t['thumb']); ?>')" />
<?php }  } } ?>
    <div class="caigou-banner m-auto wow fadeInUp bg-red animated">
       <div class="title">采购流程指导</div>
       <div class="title-en">
           <span>Guide</span>
        </div>
       
       <p class="p1">关于密封件订货注意事项</p>
       <p class="p2">1、 请在订货单上注明型号和尺寸。</p>
       <p class="p3">2、 尺寸表中如果没有你要的密封件，或者由于工作条件特殊，选择密封件有困难时，请与我司联系。</p>
   </div>

</section>
<!--banner end -->
<!--caigou-->
<section class="caigou-zhinan-wrap wb100" id="caigou-zhinan-wrap">
    <div class="caigou-xuanxing">
        <div class="title">选型指导</div>
        <div class="title-en">model selection</div>
    </div>
    <!--tab-->
    <div class="caigou-top-tab-wrap wb100">
        <div class="caigou-top-tab m9 m-auto">
            <div class="caigou-tab-sanjiao" id="caigou-tab-sanjiao"></div>
            <?php $return = $this->list_tag("action=category pid=$cat[pid]"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
            <div class="caigou-top-tab-nav <?php if ($t['id']==$catid) { ?> on caigou-tab-nav-on<?php } ?> fl" data-w="<?php if ($key==0) { ?>1<?php } else { ?>3<?php } ?>">
                <table class="tb">
                    <tr>
                        <td style="padding: 0 100px;">
                            <a href="<?php echo $t['url']; ?>#caigou-zhinan-wrap">
                            <?php echo $t['name']; ?></a>
                        </td>
                    </tr>
                </table>
            </div>
            <?php } } ?>
            <div class="sline"></div>
            <div class="clear"></div>
        </div>
    </div>
    <!--tab end-->
</section>
<!--title-nav-->
<section class="caigou-title-nav-wrap wb100">
    <div class="caigou-title-nav">
        <?php $return = $this->list_tag("action=module catid=$catid order=displayorder,updatetime page=1"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
        <a href="javascript:void(0);" class="title-nav-a" data-catid="<?php echo $catid; ?>" data-id="<?php echo $t['id']; ?>" ><?php echo $t['title']; ?></a>
        <?php } } ?>
    </div>
</section>
<!--title-nav end-->
<!--show main-->
<section class="caigou-show-body-wrap" id="shou-main">
    <div class="caigou-show-body m9 m-auto" style="padding-bottom:40px;">
        
        <div class="loader">
            <div class="loader-inner ball-clip-rotate-multiple">
            <div></div>
            <div></div>
            </div>
        </div>
        
    </div>
</section>
<script>
    var md = '<?php echo md5(SYS_KEY); ?>';
    D(function(){
        var tabNav = D(".caigou-title-nav"),
            fistA = D(".caigou-title-nav a").first(),
            id = fistA.attr("data-id");
            fistA.addClass("on");
            getSdata(id);
            
            tabNav.on("mouseover","a",function(){
                tabNav.find("a").removeClass("on");
                var t = D(this),
                    id = t.attr("data-id");       
                loaderHtml(D(".caigou-show-body"));
                getSdata(id);
            });
            

         
    });
    
    function getSdata(id){
        getIdDate(md,'caigouzhinan',id,function(data){
            
            if(data){
                if(data[0]['contents']){
                    D(".caigou-show-body").html(data[0]['contents']);
                }else{
                    D(".caigou-show-body").html("小编正在努力编辑呢! (*^__^*) 嘻嘻……");
                }
                
            }
            
        })
    }
    
    
    
</script>
<!--show main end-->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>