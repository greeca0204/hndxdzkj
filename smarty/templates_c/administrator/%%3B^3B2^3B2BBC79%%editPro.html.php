<?php /* Smarty version 2.6.18, created on 2013-06-26 08:54:24
         compiled from editPro.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form name="fmEdit" id="fmEdit" method="post" action="product.php?action=save" enctype="multipart/form-data">
	<input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
" />
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
		<tr>
			<td width="10%">产品名称：</td>
			<td>
				<input type="text" name="proName" id="proName" value="<?php echo $this->_tpl_vars['product']['proName']; ?>
"  class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="10%">产品图片：</td>
			<td class="sel">
				<input type="file" name="proImg" id="proImg" value="<?php echo $this->_tpl_vars['product']['proImg']; ?>
" />
                <?php if ($this->_tpl_vars['product']['proImg'] != ''): ?>
    			<img src="../<?php echo $this->_tpl_vars['product']['proImg']; ?>
" width="50px" height="50px" alt="蝶讯电子" />
     			<?php endif; ?>           
			</td>
		</tr>
		<tr>
			<td width="10%">产品介绍：</td>
			<td>
				<textarea name="content1"  id="content1" style="width:100%;height:350px;" class="frmarea"><?php echo $this->_tpl_vars['product']['proIntro']; ?>
</textarea>
			</td>
		</tr>
        <tr>
        	<td width="10%">产品类别：</td>
			<td class="sel">
				<select name="proType" id="proType">             
      				<option value="1"  <?php if ($this->_tpl_vars['product']['proType'] == 1): ?>selected<?php endif; ?>>软件产品</option>
                    <option value="2"  <?php if ($this->_tpl_vars['product']['proType'] == 2): ?>selected<?php endif; ?>>硬件产品</option>
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