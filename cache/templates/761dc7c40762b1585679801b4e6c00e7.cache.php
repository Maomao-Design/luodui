<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $menu; ?><span>|</span><a href="http://www.mantob.com/help/list-341.html" target="_blank"><em><?php echo lang('help'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
        <form method="get" action="" name="searchform" id="searchform">
        <input name="c" type="hidden" value="<?php echo $this->ci->router->class; ?>" />
        <input name="m" type="hidden" value="<?php echo $this->ci->router->method; ?>" />
        <?php echo lang('html-055'); ?>：
        <input type="text" class="input-text" value="" name="keyword" />
        &nbsp;&nbsp;
        <input type="submit" value="<?php echo lang('search'); ?>" class="button" name="search" />
        </form>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform" id="myform">
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<th width="40" align="center">Id</th>
			<th width="130" align="left"><?php echo lang('html-055'); ?></th>
			<th align="left"><?php echo lang('html-060'); ?></th>
			<th width="130" align="left"><?php echo lang('html-056'); ?></th>
			<th align="left" class="dr_option"><?php echo lang('option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) {  if ($t['adminid']>=$admin_role) { ?>
		<tr id="dr_row_<?php echo $t['uid']; ?>">
			<td align="right"><input name="ids[]" type="checkbox" class="dr_select" value="<?php echo $t['uid']; ?>" />&nbsp;</td>
			<td align="center"><?php echo $t['uid']; ?></td>
			<td align="left"><a href="javascript:;" onclick="dr_dialog_member('<?php echo $t['uid']; ?>')"><?php echo dr_keyword_highlight($t['username'], $param['keyword']); ?></a></td>
            <td align="left"><?php echo $t['realname']; ?></td>
            <td align="left"><a href="<?php echo dr_url('root/index', array('roleid' => $t['adminid'])); ?>"><?php echo $t['name']; ?></a></td>
			<td align="left" class="dr_option">
			<?php if ($this->ci->is_auth('admin/root/log')) { ?><a href="<?php echo dr_url('root/log',array('uid' => $t['uid'])); ?>"><?php echo lang('344'); ?></a><?php }  if ($this->ci->is_auth('admin/root/edit')) { ?><a href="<?php echo dr_dialog_url(dr_url('root/edit',array('id' => $t['uid'])), 'edit'); ?>"><?php echo lang('edit'); ?></a><?php }  if ($this->ci->is_auth('admin/root/del')) { ?><a href="javascript:;" onClick="return dr_dialog_del('<?php echo lang('015'); ?>','<?php echo dr_url('root/del',array('id' => $t['uid'])); ?>');"><?php echo lang('del'); ?></a><?php } ?>
			</td>
		</tr>
		<?php }  } } ?>
		<tr>
			<th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<td colspan="6" align="left" style="border:none"> 
			<?php if ($this->ci->is_auth('admin/root/del')) { ?><input type="button" class="button" value="<?php echo lang('del'); ?>" name="option" onClick="dr_confirm_del_all()" />&nbsp;<div class="onShow"><font color="#FF0000"><?php echo lang('html-057'); ?></font></div><?php } ?>
			</td>
		</tr>
		</tbody>
		</table>
		</form>
	</div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>