<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<script type="text/javascript">
$(function() {
	
}); 
</script>
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $menu; ?><span>|</span><a href="http://www.mantob.com/help/list-341.html" target="_blank"><em><?php echo lang('help'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
        <font color="gray"><?php echo lang('html-078'); ?></font>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform" id="myform">
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<th width="40" align="left">Id</th>
			<th width="100" align="left"><?php echo lang('html-026'); ?></th>
			<th width="80" align="center"><?php echo lang('html-079'); ?></th>
			<th align="left" class="dr_option"><?php echo lang('option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr id="dr_row_<?php echo $t['uid']; ?>">
			<td align="right"><input name="ids[]" type="checkbox" class="dr_select" value="<?php echo $t['id']; ?>" />&nbsp;</td>
			<td align="left"><?php echo $t['id']; ?></td>
			<td align="left"><?php echo $t['name']; ?></td>
			<td align="center"><?php echo $t['num']; ?></td>
			<td align="left" class="dr_option">
            <a href="javascript:;" onclick="dr_dialog_show('<?php echo lang('030'); ?>', '<?php echo dr_url('verify/show', array('num'=>$t['num'])); ?>')"><?php echo lang('030'); ?></a>
			<?php if ($this->ci->is_auth('admin/verify/edit')) { ?><a href="<?php echo dr_dialog_url(dr_url('verify/edit',array('id'=>$t['id'])), 'edit'); ?>"><?php echo lang('edit'); ?></a><?php }  if ($this->ci->is_auth('admin/verify/del')) { ?><a href="javascript:;" onClick="return dr_dialog_del('<?php echo lang('015'); ?>','<?php echo dr_url('verify/del',array('id'=>$t['id'])); ?>');"><?php echo lang('del'); ?></a><?php } ?>
			</td>
		</tr>
		<?php } } ?>
		<tr>
			<th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<td colspan="4" align="left" style="border:none"> 
			<?php if ($this->ci->is_auth('admin/verify/del')) { ?><input type="button" class="button" value="<?php echo lang('del'); ?>" name="option" onClick="dr_confirm_set_all('<?php echo lang('015'); ?>')" /><?php } ?>
			</td>
		</tr>
		</tbody>
		</table>
		</form>
	</div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>