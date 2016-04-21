<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<script type="text/javascript">
function dr_to_cache() {
	dr_tips("<?php echo lang('html-476'); ?>", 999999, 2);
	location.href = "<?php echo dr_url('linkage/cache'); ?>";
}
</script>
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $menu; ?><a href="javascript:;" onclick="dr_to_cache()"><em><?php echo lang('001'); ?></em></a><span>|</span><a href="http://www.mantob.com/help/list-341.html" target="_blank"><em><?php echo lang('help'); ?></em></a><span>|</span>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
        <font color="gray"><?php echo lang('html-417'); ?></font>
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
			<th width="100" align="left"><?php echo lang('html-418'); ?></th>
			<th width="80" align="left"><?php echo lang('html-419'); ?></th>
			<th align="left" class="dr_option"><?php echo lang('option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr>
			<td align="right"><input name="ids[]" type="checkbox" class="dr_select" value="<?php echo $t['id']; ?>" />&nbsp;</td>
			<td align="left"><?php echo $t['id']; ?></td>
			<td align="left"><?php echo $t['name']; ?></td>
			<td align="left"><?php echo $t['code']; ?></td>
			<td align="left"><?php if ($t['type']) {  echo lang('html-421');  } else {  echo lang('html-420');  } ?></td>
			<td align="left" class="dr_option">
			<?php if ($this->ci->is_auth('admin/linkage/edit')) { ?><a href="<?php echo dr_dialog_url(dr_url('linkage/edit',array('id'=>$t['id'])), 'edit'); ?>"><?php echo lang('edit'); ?></a><?php }  if ($this->ci->is_auth('admin/linkage/data')) { ?><a href="<?php echo dr_url('linkage/data',array('key'=>$t['id'])); ?>"><?php echo lang('html-748'); ?></a><?php }  if ($this->ci->is_auth('admin/linkage/edit') && $t['id']==1) { ?><a href="javascript:;" onClick="return dr_confirm_url('<?php echo lang('html-581'); ?>','<?php echo dr_url('linkage/import'); ?>');"><?php echo lang('html-580'); ?></a><?php } ?>
			</td>
		</tr>
		<?php } } ?>
		<tr>
			<th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<td colspan="6" align="left" style="border:none"> 
			<?php if ($this->ci->is_auth('admin/linkage/del')) { ?><input type="button" class="button" value="<?php echo lang('del'); ?>" name="option" onClick="dr_confirm_del_all()" /><?php } ?>
			</td>
		</tr>
		</tbody>
		</table>
		</form>
	</div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>