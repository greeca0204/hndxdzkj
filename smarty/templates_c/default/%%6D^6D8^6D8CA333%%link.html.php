<?php /* Smarty version 2.6.18, created on 2013-06-16 13:53:53
         compiled from link.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="daohang"><a href="index.php">首页</a>&gt;<a href="index.php?action=gywm&nid=1">关于我们</a>&gt;<a href="index.php?action=link">联系我们</a>&gt;公司信息</div>
<hr />
<div class="linkus">
	<div class="linkustitle"><?php echo $this->_tpl_vars['link']['comname']; ?>
</div>
	<p style="font-size:33px; padding-top:12px; padding-bottom:30px; padding-left:33px; color:#040000;">公司信息</p>
    <p>电子邮箱：<?php echo $this->_tpl_vars['link']['email']; ?>
</p>
    <p>地址：<?php echo $this->_tpl_vars['link']['address']; ?>
</p>
    <p>邮编：<?php echo $this->_tpl_vars['link']['postcode']; ?>
</p>
    <p>传真：<?php echo $this->_tpl_vars['link']['fax']; ?>
</p>
    <p>电话：<?php echo $this->_tpl_vars['link']['tel']; ?>
</p>
    <p style="padding-left:125px; color:#040000;"><?php echo $this->_tpl_vars['link']['tel2']; ?>
</p>
    <p style="padding-left:125px; color:#040000;"><?php echo $this->_tpl_vars['link']['tel3']; ?>
</p>
    <?php if ($this->_tpl_vars['link']['tel4'] != ""): ?><p style="padding-left:125px; color:#040000;"><?php echo $this->_tpl_vars['link']['tel4']; ?>
</p><?php endif; ?>
</div>
<div class="linknav">
	<div class="title">联系方式</div>
	<div class="blueban"></div>
	<div class="link"><a href="index.php?action=showMessage">直接留言</a></div>
	<div class="link" style="background:#F90;">公司信息</div>
</div>
<div class="cl"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>