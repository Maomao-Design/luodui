<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $menu; ?><span>|</span><a href="http://www.mantob.com/help/list-341.html" target="_blank"><em><?php echo lang('help'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
        <font color="gray"><?php echo lang('html-683'); ?></font>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform" id="myform">
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<th width="200" align="left"><?php echo lang('html-026'); ?></th>
			<th width="60" align="center"><?php echo lang('html-028'); ?></th>
			<th align="left" class="dr_option"><?php echo lang('option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr>
			<td align="right"><input name="ids[]" type="checkbox" class="dr_select" value="<?php echo $t['id']; ?>" />&nbsp;</td>
			<td align="left"><?php if ($this->ci->is_auth('admin/urlrule/edit')) { ?><a href="<?php echo dr_url('urlrule/edit',array('id'=>$t['id'])); ?>"><?php echo $t['name']; ?></a><?php } else {  echo $t['name'];  } ?></td>
			<td align="center"><font color="<?php echo $color[$t['type']]; ?>"><?php echo $type[$t['type']]; ?></font></td>
			<td align="left" class="dr_option">
			<?php if ($this->ci->is_auth('admin/urlrule/edit')) { ?><a href="<?php echo dr_url('urlrule/edit',array('id'=>$t['id'])); ?>"><?php echo lang('edit'); ?></a><?php } ?>
			</td>
		</tr>
		<?php } } ?>
		<tr>
			<th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<td colspan="5" align="left" style="border:none"> 
			<?php if ($this->ci->is_auth('admin/urlrule/del')) { ?><input type="button" class="button" value="<?php echo lang('del'); ?>" name="option" onClick="dr_confirm_set_all('<?php echo lang('html-692'); ?>')" /><?php } ?>
			&nbsp;<div class="onShow"><font color="#FF0000"><?php echo lang('html-693'); ?></font></div>
			</td>
		</tr>
		</tbody>
		</table>
		</form>
	</div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>