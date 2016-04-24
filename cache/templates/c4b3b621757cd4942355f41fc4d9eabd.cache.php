<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<script type="text/javascript">
$(function() {
	<?php if ($error) { ?>
	art.dialog.tips('<font color=red><?php echo $error['msg']; ?></font>', 3);
	d_tips('<?php echo $error['error']; ?>', 0);
	<?php } ?>
	
});
</script>
<form action="" method="post" name="myform" id="myform">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $menu; ?>
	</div>
	<div class="bk10"></div>
    <div class="table-list col-tab">
        <ul class="tabBut cu-li">
            <li class="on"><?php echo lang('246'); ?></li>
        </ul>
        <div class="contentList pad-10 dr_table">
        <table width="100%" class="table_form">
        <?php echo $myfield; ?>
        <tr>
            <th width="200"><?php echo lang('html-728'); ?>： </th>
            <td style="color:#999"><?php echo dr_lang('html-735', 'addc', $tpl); ?></td>
        </tr>
        <tr>
			<th width="200" style="border:none;">&nbsp;</th>
			<td>
			<input class="button" type="submit" name="submit" value="<?php echo lang('submit'); ?>" />
			</td>
		</tr>
        </table>
        </div>
    </div>
</div>
</form>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>