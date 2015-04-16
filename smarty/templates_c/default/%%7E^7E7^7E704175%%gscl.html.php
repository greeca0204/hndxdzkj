<?php /* Smarty version 2.6.18, created on 2013-06-10 03:28:28
         compiled from gscl.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="daohang">
<a href="index.php">首页</a>&gt;
<a href="index.php?action=gywm&nid=1">关于我们</a>&gt;
<a href="index.php?action=gscl&nid=13">公司材料</a>&gt;
<?php $_from = $this->_tpl_vars['type3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['type3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['type3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['type3']):
        $this->_foreach['type3']['iteration']++;
?>
<?php if ($this->_tpl_vars['typeId'] == $this->_tpl_vars['type3']['nid']): ?>
<?php echo $this->_tpl_vars['type3']['classname']; ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</div>
<hr />
<div class="newleft">
	<div class="newlink">
		<a href="index.php?action=link"><img src="images/yx_26.jpg" alt="蝶讯电子" /></a>
	</div>
	<div class="newtypetitle">
		<p><img src="images/yx_25.jpg" alt="蝶讯电子" />&nbsp;&nbsp;关于我们</p>
	</div>
	<div class="newtype">
		<?php $_from = $this->_tpl_vars['type4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['type4'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['type4']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['type4']):
        $this->_foreach['type4']['iteration']++;
?>
        <p><a href="index.php?action=gywm&nid=<?php echo $this->_tpl_vars['type4']['nid']; ?>
"><img src="images/logo_<?php echo ($this->_foreach['type4']['iteration']-1)+1; ?>
.jpg" alt="蝶讯电子" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['type4']['classname']; ?>
</a></p>	
        <?php endforeach; endif; unset($_from); ?>
        <p class="noselect"><img src="images/logo_3.jpg" alt="蝶讯电子" />&nbsp;&nbsp;公司材料</p>
	</div>
</div>
<div class="newright_gscl">
	<?php $_from = $this->_tpl_vars['type5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['type5'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['type5']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['type5']):
        $this->_foreach['type5']['iteration']++;
?>
	<div class="gscl_a"><a href="index.php?action=gywm&nid=<?php echo $this->_tpl_vars['type5']['nid']; ?>
"><img src="images/nav_<?php echo ($this->_foreach['type5']['iteration']-1)+1; ?>
.jpg" alt="蝶讯电子" /></a></div>
    <?php endforeach; endif; unset($_from); ?>
    <div class="cl"></div>
	<hr color="#CFD0D1" />
	<div class="gscl_content">
    	<?php echo $this->_tpl_vars['gywm']['content']; ?>

    </div>
</div>
<div class="cl"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>