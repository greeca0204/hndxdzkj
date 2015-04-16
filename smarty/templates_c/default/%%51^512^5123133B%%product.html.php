<?php /* Smarty version 2.6.18, created on 2013-06-16 15:07:14
         compiled from product.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="daohang">
<a href="index.php">首页</a>&gt;
<a href="index.php?action=showProList&proType=1">产品展示</a>&gt;
<?php if ($this->_tpl_vars['product']['proType'] == 1): ?><a href="index.php?action=showProList&proType=1">软件产品</a>
<?php elseif ($this->_tpl_vars['product']['proType'] == 2): ?><a href="index.php?action=showProList&proType=2">硬件产品</a>
<?php endif; ?>&gt;
<?php echo $this->_tpl_vars['product']['proName']; ?>

</div>
<hr />
<div class="newleft" style="margin:0px 15px 0px 3px;">
	<div class="newlink">
		<a href="index.php?action=link"><img src="images/yx_26.jpg" alt="蝶讯电子" /></a>
	</div>
	<div class="newtypetitle">
		<p><img src="images/yx_25.jpg" alt="蝶讯电子" />&nbsp;&nbsp;产品展示</p>
	</div>
	<div class="newtype">
    	<?php if ($this->_tpl_vars['product']['proType'] == 1): ?>
        <p class="noselect"><img src="images/yx_40.jpg" alt="蝶讯电子" />&nbsp;&nbsp;软件产品</p>
        <?php else: ?>
        <p><a href="index.php?action=showProList&proType=1"><img src="images/yx_40.jpg" alt="蝶讯电子" />&nbsp;&nbsp;软件产品</a></p>
        <?php endif; ?>    	
        <?php if ($this->_tpl_vars['product']['proType'] == 2): ?>
        <p class="noselect"><img src="images/yx_41.jpg" alt="蝶讯电子" />&nbsp;&nbsp;硬件产品</p>
        <?php else: ?>
        <p><a href="index.php?action=showProList&proType=2"><img src="images/yx_41.jpg" alt="蝶讯电子" />&nbsp;&nbsp;硬件产品</a></p>
        <?php endif; ?>        
	</div>
</div>
<div class="newright">
	<div class="title">
    	<div class="left"></div>
        <div class="mid">
            <p style="text-align:center;padding:25px 0px 0px 0px;"><?php echo $this->_tpl_vars['product']['proName']; ?>
</p>
        </div>
        <div class="right"></div>
        <div class="cl"></div>    	
    </div>
	<div class="content_cgal">
		<?php echo $this->_tpl_vars['product']['proIntro']; ?>

	</div>
</div>
<div class="cl"></div>      
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>