<?php /* Smarty version 2.6.18, created on 2015-04-09 15:05:20
         compiled from showMessage.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form name="fmEdit" id="fmEdit" action="lyb.php?action=delete" method="post">
	<table border="0" cellpadding="0" cellspacing="0" align="center" id="tb" width="100%">
		<tr>
			<td align="center" valign="middle" width="50%">文章名称</td>
            <td align="center" valign="middle" width="15%">审核状态</td>
			<td align="center" valign="middle" width="15%">管理</td>
			<td align="center" valign="middle" width="20%">删除</td>
		</tr>
		<?php $_from = $this->_tpl_vars['lyb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lyb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lyb']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['lyb']):
        $this->_foreach['lyb']['iteration']++;
?>
		<tr>
			<td align="center" valign="middle" width="50%"><?php echo $this->_tpl_vars['lyb']['topic']; ?>
</td>
            <td align="center" valign="middle" width="15%">
            	<?php if ($this->_tpl_vars['lyb']['checked'] == 0): ?>未审核<?php endif; ?>
            	<?php if ($this->_tpl_vars['lyb']['checked'] == 1): ?>已审核<?php endif; ?>
			</td>
   			<td align="center" valign="middle" width="15%">
            	<a href='lyb.php?action=new&id=<?php echo $this->_tpl_vars['lyb']['id']; ?>
'>回复留言</a>
			</td>
			<td align="center" valign="middle" class="checkbox" width="20%">
				<input type="checkbox" name="chk1[]" id="chk1" value="<?php echo $this->_tpl_vars['lyb']['id']; ?>
" />
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td align="center" valign="middle" colspan="3">
				<input type="submit" name="Submit" value="删除" />
			</td>
			<td align="center" valign="middle" class="checkbox" width="20%">
				全选/全不选<input type="checkbox" name="chk2" id="chk2" />
			</td>
		</tr>
		<tr>
			<td valign="middle" colspan="3"><?php echo $this->_tpl_vars['paggingbar']; ?>
</td>
		</tr>  
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>