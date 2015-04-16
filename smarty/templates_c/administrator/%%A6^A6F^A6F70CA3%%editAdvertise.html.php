<?php /* Smarty version 2.6.18, created on 2015-04-09 13:44:47
         compiled from editAdvertise.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form name="fmEdit" id="fmEdit" method="post" action="advertise.php?action=save" enctype="multipart/form-data">
	<input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['advertise']['id']; ?>
" />
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
		<tr>
			<td width="10%">广告名称：</td>
			<td>
				<input name="title" id="title" value="<?php echo $this->_tpl_vars['advertise']['title']; ?>
"  class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="10%">广告图片：</td>
			<td class="sel">
				<input type="file" name="imgurl" id="imgurl" value="<?php echo $this->_tpl_vars['advertise']['imgurl']; ?>
" />
                <?php if ($this->_tpl_vars['advertise']['imgurl'] != ''): ?>
    			<img src="../<?php echo $this->_tpl_vars['advertise']['imgurl']; ?>
" width="50px" height="50px" alt="蝶讯电子" />
     			<?php endif; ?>             
			</td>
		</tr>
		<tr>
			<td width="10%">广告链接：</td>
			<td>
				<input name="contenturl" id="contenturl" value="<?php echo $this->_tpl_vars['advertise']['contenturl']; ?>
" class="frminput"/>
			</td>
		</tr>
		<tr>
			<td width="10%">是否显示：</td>
			<td class="sel">
				<select name="checked" id="checked">             
      				<option value="0"  <?php if ($this->_tpl_vars['advertise']['checked'] == 0): ?>selected<?php endif; ?>>隐藏</option>
                    <option value="1"  <?php if ($this->_tpl_vars['advertise']['checked'] == 1): ?>selected<?php endif; ?>>显示</option>
				</select>
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