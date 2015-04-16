<?php /* Smarty version 2.6.18, created on 2013-06-12 11:06:52
         compiled from proList.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="daohang">
<a href="index.php">首页</a>&gt;
<a href="index.php?action=showProList&proType=1">产品展示</a>&gt;
<?php if ($this->_tpl_vars['proType'] == 1): ?>软件产品
<?php elseif ($this->_tpl_vars['proType'] == 2): ?>硬件产品
<?php endif; ?>
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
    	<?php if ($this->_tpl_vars['proType'] == 1): ?>
        <p class="noselect"><img src="images/yx_40.jpg" alt="蝶讯电子" />&nbsp;&nbsp;软件产品</p>
        <?php else: ?>
        <p><a href="index.php?action=showProList&proType=1"><img src="images/yx_40.jpg" alt="蝶讯电子" />&nbsp;&nbsp;软件产品</a></p>
        <?php endif; ?>    	
        <?php if ($this->_tpl_vars['proType'] == 2): ?>
        <p class="noselect"><img src="images/yx_41.jpg" alt="蝶讯电子" />&nbsp;&nbsp;硬件产品</p>
        <?php else: ?>
        <p><a href="index.php?action=showProList&proType=2"><img src="images/yx_41.jpg" alt="蝶讯电子" />&nbsp;&nbsp;硬件产品</a></p>
        <?php endif; ?>        
	</div>
</div>
<div class="newright" style="width:735px;">
	<div class="ban"><img src="images/yx_42.jpg" alt="蝶讯电子" /></div>
    <div class="proshow">
    	<ul>
        	<?php $_from = $this->_tpl_vars['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['product'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['product']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['product']['iteration']++;
?>
        	<li>
            	<p><a href="index.php?action=proIntro&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['product']['proImg']; ?>
" width="292" height="167" alt="蝶讯电子" /></a></p>
                <p><a href="index.php?action=proIntro&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><?php echo $this->_tpl_vars['product']['proName']; ?>
</a></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
            <div class="cl"></div>          
        </ul>
    </div>
    <div class="showpropage" style=" padding-left:37px;"><p><?php echo $this->_tpl_vars['paggingbar']; ?>
</p></div>
</div>
<div class="cl"></div>        
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>