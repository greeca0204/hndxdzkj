<?php /* Smarty version 2.6.18, created on 2013-06-16 14:46:58
         compiled from jjfa.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="daohang">
<a href="index.php">首页</a>&gt;
<a href="index.php?action=jjfa&id=20">解决方案</a>&gt;
<?php $_from = $this->_tpl_vars['type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['type'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['type']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['type']):
        $this->_foreach['type']['iteration']++;
?>
<?php if ($this->_tpl_vars['typeId'] == $this->_tpl_vars['type']['id']): ?>
<?php echo $this->_tpl_vars['type']['classname']; ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</div>
<hr />
<div class="newleft">
	<div class="newlink">
		<a href="index.php?action=link"><img src="images/yx_26.jpg" alt="蝶讯电子" /></a>
	</div>
	<div class="newtypetitle">
		<p><img src="images/yx_25.jpg" alt="蝶讯电子" />&nbsp;&nbsp;解决方案</p>
	</div>
	<div class="newtype">
		<?php $_from = $this->_tpl_vars['type2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['type2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['type2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['type2']):
        $this->_foreach['type2']['iteration']++;
?>
		<?php if ($this->_tpl_vars['typeId'] == $this->_tpl_vars['type2']['id']): ?>
        <p class="noselect"><img src="images/logo_<?php echo ($this->_foreach['type2']['iteration']-1)+1; ?>
.png" alt="蝶讯电子" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['type2']['classname']; ?>
</p>
        <?php else: ?>
        <p><a href="index.php?action=jjfa&id=<?php echo $this->_tpl_vars['type2']['id']; ?>
"><img src="images/logo_<?php echo ($this->_foreach['type2']['iteration']-1)+1; ?>
.png" alt="蝶讯电子" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['type2']['classname']; ?>
</a></p>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
	</div>
</div>
<div class="newright">
	<div class="title">
    	<div class="left"></div>
        <div class="mid">
            <p>
				<?php $_from = $this->_tpl_vars['type3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['type3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['type3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['type3']):
        $this->_foreach['type3']['iteration']++;
?>
				<?php if ($this->_tpl_vars['typeId'] == $this->_tpl_vars['type3']['id']): ?>
				<?php echo $this->_tpl_vars['type3']['classname']; ?>

				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
            </p>
        </div>
        <div class="right"></div>
        <div class="cl"></div>    	
    </div>
	<div class="content_news" style="height:700px;">
		<table border="0px" cellpadding="0" cellspacing="0" style="margin:0px auto; height:650px;">
			<tr>
				
				<td class="news_content_tb1">&nbsp;</td>
				<td class="news_content_tb2" valign="top">
					<?php if ($this->_tpl_vars['jjfa'] != ""): ?>
					<?php $_from = $this->_tpl_vars['jjfa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['jjfa'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['jjfa']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['jjfa']):
        $this->_foreach['jjfa']['iteration']++;
?>
					<p><?php echo ($this->_foreach['jjfa']['iteration']-1)+1; ?>
、<a href="index.php?action=jjfacontent&id=<?php echo $this->_tpl_vars['typeId']; ?>
&nid=<?php echo $this->_tpl_vars['jjfa']['nid']; ?>
"><?php echo $this->_tpl_vars['jjfa']['title']; ?>
</a></p>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php else: ?>
                    <p>暂无信息</p>
                    <?php endif; ?>
				</td>
			</tr>
		</table>
		<div class="showpropage"><p><?php echo $this->_tpl_vars['paggingbar']; ?>
</p></div>
	</div>
</div>
<div class="cl"></div>
<div class="cl"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>