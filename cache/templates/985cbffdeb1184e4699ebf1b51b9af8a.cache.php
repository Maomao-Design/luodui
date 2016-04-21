<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $menu; ?><span>|</span><a href="http://www.mantob.com/help/list-341.html" target="_blank"><em><?php echo lang('help'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
		<font color="gray"><?php echo lang('html-065'); ?></font>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform" id="myform">
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<th width="40" align="left">Id</th>
			<th width="200" align="left"><?php echo lang('html-056'); ?></th>
			<th align="left" class="dr_option"><?php echo lang('option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr id="dr_row_<?php echo $t['id']; ?>">
			<td align="right"><input name="ids[]" type="checkbox" class="dr_select" value="<?php echo $t['id']; ?>" <?php if ($t['id']==1) { ?>disabled<?php } ?> />&nbsp;</td>
			<td align="left"><?php echo $t['id']; ?></td>
			<td align="left"><?php echo $t['name']; ?></td>
			<td align="left" class="dr_option">
			<?php if ($this->ci->is_auth('admin/role/auth')) { ?><a <?php if ($t['id']==1) { ?>href="javascript:;" style="color:#999"<?php } else { ?>href="<?php echo dr_url('role/auth',array('id' => $t['id'])); ?>"<?php } ?>><?php echo lang('html-066'); ?></a><?php }  if ($this->ci->is_auth('admin/root/index')) { ?><a href="<?php echo dr_url('root/index',array('roleid' => $t['id'])); ?>"><?php echo lang('html-067'); ?></a><?php }  if ($this->ci->is_auth('admin/role/edit')) { ?><a href="<?php echo dr_dialog_url(dr_url('role/edit',array('id' => $t['id'])), 'edit'); ?>"><?php echo lang('edit'); ?></a><?php }  if ($this->ci->is_auth('admin/role/del')) { ?><a href="javascript:;" <?php if ($t['id']==1) { ?> style="color:#999"<?php } else { ?>onClick="return dr_dialog_del('<?php echo lang('015'); ?>','<?php echo dr_url('role/del',array('id' => $t['id'])); ?>');"<?php } ?>><?php echo lang('del'); ?></a><?php } ?>
			</td>
		</tr>
		<?php } } ?>
		<tr>
        	<th align="right"><input name="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<td colspan="4" align="left" style="border:none"> 
			<?php if ($this->ci->is_auth('admin/role/del')) { ?><input type="button" class="button" value="<?php echo lang('del'); ?>" name="option" onClick="dr_confirm_del_all()" />&nbsp;<div class="onShow"><font color="#FF0000"><?php echo lang('html-068'); ?></font></div><?php } ?>
			</td>
		</tr>
		</tbody>
		</table>
		</form>
	</div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>