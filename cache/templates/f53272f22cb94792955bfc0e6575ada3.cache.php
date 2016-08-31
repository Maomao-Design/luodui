<section class="banner-wrap wb100">
	<!-- REVOLUTION SLIDER -->
	<div class="slider fullwidthbanner-container roundedcorners">
				<div class="fullwidthbanner" data-height="600" data-shadow="0" data-navigationStyle="preview2">
					<ul class="hide">
						<?php $return = $this->list_tag("action=navigator order=displayorder type=1 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['css']==1) { ?>
                        <!-- SLIDE 1 -->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="<?php echo $t['title']; ?>">

							<img src="<?php echo HOME_THEME_PATH; ?>assets/images/1x1.png" data-lazyload="<?php if ($t['imgbg']) {  echo dr_thumb($t['imgbg']);  } else {  echo HOME_THEME_PATH; ?>build/images/banner.png<?php } ?>" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

							<div class="overlay dark-1"></div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="255"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<span class="weight-300">
									<?php if ($t['thumb']) { ?><img src="<?php echo dr_thumb($t['thumb']); ?>" alt=""><?php } ?>
                                </span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="483"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<?php if ($t['url']=="#") {  } else { ?>
								<a href="<?php echo $t['url']; ?>" class="url-btn" <?php if ($t['target']) { ?>target="_blank"<?php } ?>>
									<span><?php echo $t['name']; ?></span>
								</a>
								<?php } ?>
							</div>

						</li>
						<?php }  if ($t['css']==2) { ?>
						<!-- SLIDE  2-->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="<?php echo $t['title']; ?>">

							<img src="<?php echo HOME_THEME_PATH; ?>assets/images/1x1.png" data-lazyload="<?php if ($t['imgbg']) {  echo dr_thumb($t['imgbg']);  } ?>" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

							<div class="overlay dark-1"></div>

							

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<?php echo $t['words']; ?>
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato"
								data-x="center"
								data-y="295"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
								<?php echo $t['description']; ?>
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="383"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<?php if ($t['url']=="#") {  } else { ?>
								<a href="<?php echo $t['url']; ?>" class="url-btn" <?php if ($t['target']) { ?>target="_blank"<?php } ?>>
									<span><?php echo $t['name']; ?></span>
								</a>
								<?php } ?>
							</div>

						</li>
						<?php }  if ($t['css']==3) { ?>
						<!-- SLIDE 3 -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="<?php echo $t['title']; ?>">

							<img src="<?php echo HOME_THEME_PATH; ?>assets/images/1x1.png" data-lazyload="<?php if ($t['imgbg']) {  echo dr_thumb($t['imgbg']);  } else {  echo HOME_THEME_PATH; ?>assets/images/demo/video/back.jpg<?php } ?>" alt="video" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

							<div class="tp-caption tp-fade fadeout fullscreenvideo"
								data-x="0"
								data-y="50"
								data-speed="1000"
								data-start="1100"
								data-easing="Power4.easeOut"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1500"
								data-endeasing="Power4.easeIn"
								data-autoplay="true"
								data-autoplayonlyfirsttime="false"
								data-nextslideatend="true"
								data-volume="mute"
								data-forceCover="1"
								data-aspectratio="16:9"
								data-forcerewind="on" style="z-index: 2;">

								<div class="tp-dottedoverlay twoxtwo"></div>

								<video class="" preload="none" style="widt:100%;height:100%" poster="<?php if ($t['imgbg']) {  echo dr_thumb($t['imgbg']);  } else {  echo HOME_THEME_PATH; ?>assets/images/demo/video/back.jpg<?php } ?>">
									<source src="<?php echo dr_get_file($t['webm']); ?>" type="video/webm" />
									<source src="<?php echo dr_get_file($t['mp4']); ?>" type="video/mp4" />
									<source src='<?php echo dr_get_file($t['ogv']); ?>' type='video/ogg' />
								</video>

							</div>

							
							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
								<?php echo $t['words']; ?>
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato"
								data-x="center"
								data-y="295"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
								<?php echo $t['description']; ?>
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="363"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
								<?php if ($t['url']=="#") {  } else { ?>
								<a href="<?php echo $t['url']; ?>" class="url-btn" <?php if ($t['target']) { ?>target="_blank"<?php } ?>>
									<span><?php echo $t['name']; ?></span>
								</a>
								<?php } ?>
							</div>

						</li>
						<?php }  } } ?>
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
			<!-- /REVOLUTION SLIDER -->
</section>
<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>build/js/D.themepunch._tools.min.js"></script>
<script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>build/js/D.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>build/js/revolution_slider.js"></script>