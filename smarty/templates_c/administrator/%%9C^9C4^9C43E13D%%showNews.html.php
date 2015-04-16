<?php /* Smarty version 2.6.18, created on 2013-06-26 08:41:59
         compiled from showNews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'showNews.html', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form name="fmEdit" id="fmEdit" action="news.php?action=delete" method="post">
	<table border="0" cellpadding="0" cellspacing="0" align="center" id="tb" width="100%">
		<tr>
			<td align="center" valign="middle" width="25%">文章名称</td>
			<td align="center" valign="middle" width="25%">发布时间</td>
			<td align="center" valign="middle" width="20%">文章类型</td>
			<td align="center" valign="middle" width="10%">管理</td>
			<td align="center" valign="middle" width="20%">删除</td>
		</tr>
		<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['news']):
        $this->_foreach['news']['iteration']++;
?>
		<tr>
			<td align="center" width="25%"><?php echo $this->_tpl_vars['news']['title']; ?>
</td>
			<td align="center" width="25%"><?php echo ((is_array($_tmp=$this->_tpl_vars['news']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
			<td align="center" valign="middle" width="20%"><?php echo $this->_tpl_vars['news']['classname']; ?>
</td>
   			<td align="center" valign="middle" width="10%">
            	<a href='news.php?action=new&nid=<?php echo $this->_tpl_vars['news']['nid']; ?>
'>修改</a>
			</td>
			<td align="center" valign="middle" class="checkbox" width="20%">
				<?php if ($this->_tpl_vars['news']['nid'] == 1): ?>&nbsp;              
                <?php elseif ($this->_tpl_vars['news']['nid'] == 2): ?>&nbsp;                
                <?php else: ?>
                <input type="checkbox" name="chk1[]" id="chk1" value="<?php echo $this->_tpl_vars['news']['nid']; ?>
" />
                <?php endif; ?>
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td align="center" valign="middle" colspan="4">
				<input type="submit" name="Submit" value="删除" />
			</td>
			<td align="center" valign="middle" class="checkbox" width="20%">
				全选/全不选<input type="checkbox" name="chk2" id="chk2" />
			</td>
		</tr>
		<tr>
			<td valign="middle" colspan="5"><?php echo $this->_tpl_vars['paggingbar']; ?>
</td>
		</tr>  
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>