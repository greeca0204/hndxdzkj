<?php /* Smarty version 2.6.18, created on 2015-04-09 13:49:36
         compiled from editFriend.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form name="fmEdit" id="fmEdit" method="post" action="friend.php?action=save" enctype="multipart/form-data">
	<input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['friend']['id']; ?>
" />
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
		<tr>
			<td width="10%">链接名称：</td>
			<td>
				<input name="friends" id="friends" value="<?php echo $this->_tpl_vars['friend']['friends']; ?>
"  class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="10%">链接地址：</td>
			<td>
				<input name="url" id="url" value="<?php echo $this->_tpl_vars['friend']['url']; ?>
" class="frminput"/>
			</td>
		</tr>
		<tr>
			<td width="10%">链接logo：</td>
			<td>
				<input name="logo" id="logo" value="<?php echo $this->_tpl_vars['friend']['logo']; ?>
" class="frminput"/>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="提交">
				<input type="reset" value="重置">
			</td>
		</tr>
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>