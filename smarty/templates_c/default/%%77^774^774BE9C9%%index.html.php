<?php /* Smarty version 2.6.18, created on 2013-06-26 09:09:25
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index.html', 40, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
		<div class="qh">
			<div id="ad">	
				<ul>
                    <?php $_from = $this->_tpl_vars['advertise']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ad']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ad']):
        $this->_foreach['ad']['iteration']++;
?>
                    <?php if (($this->_foreach['ad']['iteration']-1) == 0): ?>
					   <li class="on"><?php echo ($this->_foreach['ad']['iteration']-1)+1; ?>
</li>
                    <?php else: ?>
                        <li><?php echo ($this->_foreach['ad']['iteration']-1)+1; ?>
</li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
				<div id="ad_list">
                    <?php $_from = $this->_tpl_vars['advertise']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['advertise'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['advertise']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['advertise']):
        $this->_foreach['advertise']['iteration']++;
?>
					<a href="<?php echo $this->_tpl_vars['advertise']['contenturl']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['advertise']['imgurl']; ?>
" alt="蝶讯电子" /></a>
                    <?php endforeach; endif; unset($_from); ?>
				</div>
			</div>
		</div>   
        <div class="advertise">
        	<div class="left"></div>
            <div class="mid">
            	<p>
            	<span class="title">最新动态</span>
                <span class="line">|</span>
                <span class="content"><a href="index.php?action=newcontent&id=<?php echo $this->_tpl_vars['lastnews']['type']; ?>
&nid=<?php echo $this->_tpl_vars['lastnews']['nid']; ?>
"><?php echo $this->_tpl_vars['lastnews']['title']; ?>
</a></span>
                <span class="more2"><a href="index.php?action=news&id=2">more</a></span>
                </p>
            </div>
            <div class="right"></div>
        	<div class="cl"></div>
        </div>        
        <div class="topmain">
            <div class="kuang">
                <div class="top"></div>
                <div class="mid">
                	<div class="midfloat1"></div>
                    <ul>
                        <?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['news']):
        $this->_foreach['news']['iteration']++;
?>
                        <li><a href="index.php?action=newcontent&id=<?php echo $this->_tpl_vars['news']['type']; ?>
&nid=<?php echo $this->_tpl_vars['news']['nid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['news']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 54, "...") : smarty_modifier_truncate($_tmp, 54, "...")); ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
					<div class="more"><a href="index.php?action=news&id=2">more</a></div>
                </div>
                <div class="btm"></div>
            </div>
            <div class="kuang">
                <div class="top"></div>
                <div class="mid">
                	<div class="midfloat2"></div>
                    <ul>
                        <?php $_from = $this->_tpl_vars['jjfa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['jjfa'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['jjfa']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['jjfa']):
        $this->_foreach['jjfa']['iteration']++;
?>
                        <li><a href="index.php?action=jjfacontent&id=<?php echo $this->_tpl_vars['jjfa']['type']; ?>
&nid=<?php echo $this->_tpl_vars['jjfa']['nid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['jjfa']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 54, "...") : smarty_modifier_truncate($_tmp, 54, "...")); ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
					<div class="more"><a href="index.php?action=jjfa&id=20">more</a></div>
                </div>
                <div class="btm"></div>
            </div>
            <div class="kuang">
                <div class="top"></div>
                <div class="mid">
                	<div class="midfloat3"></div>
                    <ul>
                        <?php $_from = $this->_tpl_vars['cgal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cgal'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cgal']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cgal']):
        $this->_foreach['cgal']['iteration']++;
?>
                        <li style="text-align:center; padding-left:32px;"><a href="index.php?action=cgal&nid=<?php echo $this->_tpl_vars['cgal']['nid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cgal']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 54, "...") : smarty_modifier_truncate($_tmp, 54, "...")); ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
					<div class="more"><a href="index.php?action=cgal&nid=10">more</a></div>
                </div>
                <div class="btm"></div>
            </div>
            <div class="cl"></div>
		</div>
        <div class="showtitle">
        	<div class="showleft"></div>
            <div class="showmid">产品展示</div>
            <div class="showright"></div>
            <div class="cl"></div>
        </div>
        <div class="cl"></div>
        <div class="showproduct">
        	<div class="showleft1"></div>
            <div class="showmid1">
                <div id="show">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td id="demo1" valign=top>
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <?php $_from = $this->_tpl_vars['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['product'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['product']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['product']['iteration']++;
?>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td width="177" height="65">
                                                            <a href="index.php?action=proIntro&id=<?php echo $this->_tpl_vars['product']['id']; ?>
&proType=<?php echo $this->_tpl_vars['product']['proType']; ?>
"><img src="<?php echo $this->_tpl_vars['product']['proImg']; ?>
" alt="蝶讯电子" /></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="177" height="30" align="center" valign="top">
                                                            <a href="index.php?action=proIntro&id=<?php echo $this->_tpl_vars['product']['id']; ?>
&proType=<?php echo $this->_tpl_vars['product']['proType']; ?>
"><?php echo $this->_tpl_vars['product']['proName']; ?>
</a>
                                                        </td>
                                                    </tr>
                                                </table>        
                                                
                                            </td>
                                            <td width="1px">&nbsp;</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                </table>
                            </td>
                            <td id="demo2" valign=top>&nbsp;</td>
                        </tr>
                    </table>
                </div>
                <script src="js/maquee.js"></script>
            </div>
        	<div class="showright1"></div>
        	<div class="cl"></div>
        </div>
        <div class="slidline"><hr/></div>
        <div class="nav2">      	
            <ul>
            	<li class="selli">
                	<select>
                    	<option value="0">-------请选择单位-------</option>
                    	<?php $_from = $this->_tpl_vars['friend']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['friend'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['friend']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['friend']):
        $this->_foreach['friend']['iteration']++;
?>
        				<option value="<?php echo $this->_tpl_vars['friend']['id']; ?>
" onclick="javascript:location.href='<?php echo $this->_tpl_vars['friend']['url']; ?>
'"><?php echo $this->_tpl_vars['friend']['friends']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
            		</select>
                </li> 
            	<li><a href="index.php?action=link">联系我们</a></li>
                <li>|</li>
            	<li><a href=# onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.gztranstar.com');">设为首页</a></li>
                <li>|</li>
            	<li><a href="javascript:window.external.addFavorite('http://www.gztranstar.com','湖南蝶讯电子科技有限公司');">加入收藏</a></li>
            </ul>
            <div class="cl"></div>
        </div>
        <div class="footer">
        	<p><?php echo $this->_tpl_vars['link']['copyright']; ?>
</p>
            <p style="padding-top:0px;">联系电话：<?php echo $this->_tpl_vars['link']['tel']; ?>
，<?php echo $this->_tpl_vars['link']['tel2']; ?>
，<?php echo $this->_tpl_vars['link']['tel3']; ?>
，传真：<?php echo $this->_tpl_vars['link']['fax']; ?>
</p>
        </div>
    </div>
</body>
</html>
