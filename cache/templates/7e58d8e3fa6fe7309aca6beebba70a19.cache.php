<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $menu; ?>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
        <form method="post" action="" name="searchform" id="searchform">
		<input name="search" id="search" type="hidden" value="1" />
		<?php echo lang('html-562'); ?> ：
		<input type="text" class="input-text" value="<?php echo $param['keyword']; ?>" name="data[keyword]" />&nbsp;
        &nbsp;
		<?php echo lang('html-563'); ?> ：
		<?php echo dr_field_input('start', 'Date', array('option'=>array('format'=>'Y-m-d','width'=>80)), (int)$param['start']); ?>
		-&nbsp;
		<?php echo dr_field_input('end', 'Date', array('option'=>array('format'=>'Y-m-d','width'=>80)), (int)$param['end']); ?>
		&nbsp;
		<input type="submit" value="<?php echo lang('search'); ?>" class="button" name="search" />
		</form>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform" id="myform">
        <input name="action" id="action" type="hidden" value="" />
		<table width="100%">
		<thead>
		<tr>
			<th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</th>
			<th width="30" align="center"><?php echo lang('order'); ?></th>
			<th width="40" align="left">Id</th>
			<th align="left"><?php echo lang('html-375'); ?></th>
			<th width="120" align="left">Ip</th>
			<th width="120" align="left"><?php echo lang('html-563'); ?></th>
			<th align="left" class="dr_option"><?php echo lang('option'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr>
			<td align="right"><input name="ids[]" type="checkbox" class="dr_select" value="<?php echo $t['id']; ?>" />&nbsp;</td>
			<td align="center"><input class="input-text displayorder" type="text" name="data[<?php echo $t['id']; ?>][displayorder]" value="<?php echo $t['displayorder']; ?>" /></td>
			<td align="left"><?php echo $t['id']; ?></td>
			<td align="left"><a href="<?php echo dr_url($form.'/edit',array('id' => $t['id'])); ?>"><?php echo dr_keyword_highlight($t['title'], $param['keyword']); ?></a></td>
			<td align="left"><a href="http://www.baidu.com/baidu?wd=<?php echo $t['inputip']; ?>" target="_blank"><?php echo $t['inputip']; ?></a></td>
			<td align="left"><?php echo dr_date($t['inputtime'], NULL, 'red'); ?></td>
			<td align="left" class="dr_option">
			<a href="<?php echo dr_url($form.'/edit',array('id' => $t['id'])); ?>"><?php echo lang('html-564'); ?></a>
			</td>
		</tr>
		<?php } } ?>
		<tr>
			<td width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="dr_selected()" />&nbsp;</td>
			<td colspan="7" align="left">
			<input type="button" class="button" value="<?php echo lang('del'); ?>" name="option" onClick="$('#action').val('del');dr_confirm_set_all('<?php echo lang('015'); ?>')" />
            <input type="button" class="button" value="<?php echo lang('order'); ?>" name="option" onClick="$('#action').val('order');dr_confirm_set_all('<?php echo lang('015'); ?>')" />
            <div class="onShow"><?php echo lang('html-565'); ?></div>
			</td>
		</tr>
        <tr>
            <td colspan="8" align="left" style="border:none">
                <p><?php echo dr_lang('html-735', 'listc', $tpl); ?></p>
            </td>
        </tr>
		</tbody>
		</table>
		</form>
        <div id="pages"><a><?php echo dr_lang('html-346', $param['total']); ?></a><?php echo $pages; ?></div>
	</div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>