<?php /* Smarty version 2.6.18, created on 2013-06-16 13:53:58
         compiled from lyb.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="daohang"><a href="index.php">首页</a>&gt;<a href="index.php?action=gywm&nid=1">关于我们</a>&gt;<a href="index.php?action=link">联系我们</a>&gt;直接留言</div>
<hr />
<div class="linkus">
	<div class="linkustitle"><?php echo $this->_tpl_vars['link']['comname']; ?>
</div>
	<form action="index.php?action=addMessage" method="post">
		<p>姓名：<input id="username" name="username" type="text" value="" class="lyinput" /></p>
		<p>手机：<input id="tel" name="tel" type="text" value="" class="lyinput" /></p>
		<p>email：<input id="email" name="email" type="text" value="" class="lyinput" /></p>
		<p>
			<img src="images/yx_29.jpg" alt="蝶讯电子" />
            <img src="images/yx_27.jpg" alt="蝶讯电子" />
            <input id="topic" name="topic" type="text" value="" class="lyinput" />
        </p>
        <p><textarea id="content1" name="content1" class="content1"></textarea></p>
        <p><input type="image" src="images/yx_28.jpg" /></p>
    </form>
</div>
<div class="linknav">
	<div class="title">联系方式</div>
	<div class="blueban"></div>
	<div class="link" style="background:#F90;">直接留言</div>
	<div class="link"><a href="index.php?action=link">公司信息</a></div>
</div>
<div class="cl"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>