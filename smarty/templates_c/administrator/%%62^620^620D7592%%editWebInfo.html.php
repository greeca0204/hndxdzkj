<?php /* Smarty version 2.6.18, created on 2015-04-09 13:44:56
         compiled from editWebInfo.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form name="fmEdit" id="fmEdit" method="post" action="webInfo.php?action=save" enctype="multipart/form-data">
	<input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['webInfo']['id']; ?>
" />
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
		<tr>
			<td width="10%">网站名称：</td>
			<td>
				<input name="website" id="website" value="<?php echo $this->_tpl_vars['webInfo']['website']; ?>
"  class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="10%">公司名称：</td>
			<td>
				<input name="comname" id="comname" value="<?php echo $this->_tpl_vars['webInfo']['comname']; ?>
" class="frminput"/>
			</td>
		</tr>
		<tr>
			<td width="10%">网站关键字：</td>
			<td>
				<input name="keyword" id="keyword" value="<?php echo $this->_tpl_vars['webInfo']['keyword']; ?>
" class="frminput"/>
			</td>
		</tr>
        <tr>
			<td width="10%">网站描述：</td>
			<td>
				<input name="description" id="description" value="<?php echo $this->_tpl_vars['webInfo']['description']; ?>
" class="frminput"/>
			</td>
		</tr>
        <tr>
			<td width="10%">联系人：</td>
			<td>
				<input name="negotiator" id="negotiator" value="<?php echo $this->_tpl_vars['webInfo']['negotiator']; ?>
" class="frminput"/>
			</td>
		</tr>
        <tr>
			<td width="10%">地址：</td>
			<td>
				<input name="address" id="address" value="<?php echo $this->_tpl_vars['webInfo']['address']; ?>
" class="frminput"/>
			</td>
		</tr>
        <tr>
			<td width="10%">邮政编码：</td>
			<td>
				<input name="postcode" id="postcode" value="<?php echo $this->_tpl_vars['webInfo']['postcode']; ?>
" class="frminput"/>
			</td>
		</tr>
        <tr>
			<td width="10%">电话1：</td>
			<td>
				<input name="tel" id="tel" value="<?php echo $this->_tpl_vars['webInfo']['tel']; ?>
" class="frminput"/>
			</td>
		</tr>
        <tr>
			<td width="10%">电话2：</td>
			<td>
				<input name="tel2" id="tel2" value="<?php echo $this->_tpl_vars['webInfo']['tel2']; ?>
" class="frminput"/>
			</td>
		</tr>
        <tr>
			<td width="10%">电话3：</td>
			<td>
				<input name="tel3" id="tel3" value="<?php echo $this->_tpl_vars['webInfo']['tel3']; ?>
" class="frminput"/>
			</td>
		</tr>
         <tr>
			<td width="10%">电话4：</td>
			<td>
				<input name="tel4" id="tel4" value="<?php echo $this->_tpl_vars['webInfo']['tel4']; ?>
" class="frminput"/>
			</td>
		</tr>
        <tr>
			<td width="10%">传真：</td>
			<td>
				<input name="fax" id="fax" value="<?php echo $this->_tpl_vars['webInfo']['fax']; ?>
" class="frminput"/>
			</td>
		</tr>        
        <tr>
			<td width="10%"> email：</td>
			<td>
				<input name="email" id="email" value="<?php echo $this->_tpl_vars['webInfo']['email']; ?>
" class="frminput"/>
			</td>
		</tr>
        <tr>
			<td width="10%"> 版权信息：</td>
			<td>
				<input name="copyright" id="copyright" value="<?php echo $this->_tpl_vars['webInfo']['copyright']; ?>
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