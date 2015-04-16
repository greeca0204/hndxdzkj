<?php /* Smarty version 2.6.18, created on 2015-04-11 09:56:31
         compiled from cpyc.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="daohang">
<a href="index.php">首页</a>&gt;
诚聘英才
</div>
<hr />
<div class="cpyc">
	<div class="lxwm">
		<P>如有意向加入我们公司，请将简历发至邮箱：<a href="mailto:1234567890@foxmail.com">1234567890@foxmail.com</a></P>
	</div>
    <?php $_from = $this->_tpl_vars['cpyc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cpyc'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cpyc']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cpyc']):
        $this->_foreach['cpyc']['iteration']++;
?>
	<div class="jobtitle">
    	<div class="ptitle"><p><?php echo $this->_tpl_vars['cpyc']['title']; ?>
</p></div>
		<img src="images/yx_32.jpg" id="jobimg_<?php echo $this->_tpl_vars['cpyc']['nid']; ?>
" alt="蝶讯电子" onclick="doslide(<?php echo $this->_tpl_vars['cpyc']['nid']; ?>
)" />
    </div>
	<div class="content" id="jobcont_<?php echo $this->_tpl_vars['cpyc']['nid']; ?>
"><?php echo $this->_tpl_vars['cpyc']['content']; ?>
</div>

    <?php endforeach; endif; unset($_from); ?>
    <div class="content2">    
        <p style="margin-left:35px; font-size:16px;"><img src="images/yx_33.jpg" alt="蝶讯电子" />&nbsp;&nbsp;&nbsp;&nbsp;工资待遇</p>
        <p>1.工资待遇面谈。欢迎应聘者对自己的待遇提出要求和期望，更欢迎有能力者大胆地要高待遇；</p>
        <p>2.总待遇属于本地区的中、高等水平，享受较高的社保待遇；</p>
        <p>3.公司为员工除基本收入外，推行期权股份待遇管理；</p>
        <p>4.公司帮助联系解决住房和食堂用膳；</p>
        <p>5.为员工每年提供一个月以上的培训。</p>
        <p>&nbsp;</p>
        <p style="margin-left:35px; font-size:16px;"><img src="images/yx_33.jpg" alt="蝶讯电子" />&nbsp;&nbsp;&nbsp;&nbsp;招聘从优条件</p>
        <p>1.有实践经验和工作经历；</p>
		<p>2.有驾照的；</p>
		<p>3.外语水平好的；</p>
		<p>4.积极乐观性格开朗的；</p>
		<p>5.有特殊一技之长本领的。</p>
    </div>
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>