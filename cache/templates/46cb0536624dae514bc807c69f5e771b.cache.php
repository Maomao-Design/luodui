
<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<section class="from-wrap">
    <!--from box-->
   <div class="from-box">
       <div class="from-main m-auto">
           <form action="/index.php?c=form_1_2" method="post" name="myform" id="myform">
           <div class="from-bo">
               <dvi class="from-nav">
                    <a href="/index.php?c=form_1_1">
                        在线订单
                    </a>
                    <a href="/index.php?c=form_1_2" class="on">
                        产品定制 
                    </a>
                    <div class="clear"></div>
               </dvi>
               <div class="from-p">
                        • 如果您在本站没有找到您所需要的产品，有可能是我们产品众多没有一一放到网上，您可以填写以下定单来定制或咨询我们的产品，谢谢！
               </div>
               <div class="from-lab-box">
                   <ul>
                       <li class="li1">
                           <span class="s1">
                               定货单位＊
                           </span>
                           <input type="text" required="required"  name="data[title]">
                       </li>
                       <li class="li2">
                           <span class="s1">
                               产品名称＊
                           </span>
                           <input type="text" required="required" name="data[chanpinmingcheng]">
                       </li>
                       <li class="li1" >
                           <span class="s1">
                               订购人＊
                           </span>
                           <input type="text" required="required" name="data[dinggouren]">
                       </li>
                       <li class="li2">
                           <span class="s1" >
                               联系电话＊
                           </span>
                           <input type="text" required="required" name="data[lianxidianhua]" >
                       </li>
                        <li class="li1">
                           <span class="s1">
                               传&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;真
                           </span>
                           <input type="text" name="data[chuanzhen]" >
                       </li>
                       <li class="li2">
                           <span class="s1">
                               电子邮件
                           </span>
                           <input type="text" name="data[dianziyoujian]" >
                       </li>
                       <li class="li1">
                           <span class="s1">
                               邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编
                           </span>
                           <input type="text" name="data[youbian]" >
                       </li>
                       <li class="li2">
                           <span class="s1">
                               详细地址＊
                           </span>
                           <input type="text" required="required" name="data[xiangxidizhi]" >
                       </li>
                       <li class="li1">
                           <span class="s1" style="width:500px">
                               请将您订购产品详细情况填写在以下文字框中＊
                           </span>
                       </li>
                   </ul>
                   <div class="textarea-box">
                       <textarea name="" id="" class="textarea" required="required" name="data[xiangqing]" ></textarea>
                    </div>
                    
               </div>
               
           </div>
           <div class="from-btn-wrap">
                        <input type="submit" class="submit-btn" value="确认提交">
                        <input type="reset" class="clear-btn" value="重新填写">
            </div>
            </form>
       </div>
   </div>
    <!--from box end -->
</section>
<!--banner end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>