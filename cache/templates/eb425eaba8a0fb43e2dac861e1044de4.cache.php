<div class="index-product m-auto">
    <ul class="index-product-u">
        <?php $return = $this->list_tag("action=navigator type=3 pid=0"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
       <li>
        <a href="<?php echo $t['url']; ?>" <?php if ($t['target']) { ?>target="_blank"<?php } ?> >
            <img  src="<?php echo dr_thumb($t['thumb']); ?>" alt="<?php echo $t['name']; ?>">   
        </a>
        </li>
        <?php } } ?>
    </ul>
</div>