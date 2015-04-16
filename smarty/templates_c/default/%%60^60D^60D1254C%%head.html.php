<?php /* Smarty version 2.6.18, created on 2013-06-27 06:55:09
         compiled from head.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_tpl_vars['link']['keyword']; ?>
" />
<meta name="Description" content="<?php echo $this->_tpl_vars['link']['description']; ?>
" />
<title><?php echo $this->_tpl_vars['siteTitle']; ?>
</title>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="kindeditor/plugins/code/prettify.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script charset="utf-8" src="js/editor.js"></script>
<script charset="utf-8" src="js/hidediv.js"></script>
<script charset="utf-8" src="js/checkform.js"></script>
<script charset="utf-8" src="js/nav.js"></script>

</head>

<body>
	<div id="warp">
    	<div class="banner"></div>
        <div id="nav">			
        	<ul>
            	<li class="title"><img src="images/yx_02.jpg" alt="蝶讯电子" /></li>
        		<li><a href="index.php"><img src="images/nav1.jpg" alt="蝶讯电子" /></a></li>
        		<li>
                	<a href="#"><img src="images/nav2.jpg" alt="蝶讯电子" /></a>
                    <ul>
                        <?php $_from = $this->_tpl_vars['cgywm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cgywm'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cgywm']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cgywm']):
        $this->_foreach['cgywm']['iteration']++;
?>
                        <li><a href="index.php?action=gywm&nid=<?php echo $this->_tpl_vars['cgywm']['nid']; ?>
"><?php echo $this->_tpl_vars['cgywm']['classname']; ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>
                        <li><a href="index.php?action=link">联系我们</a></li>
                    </ul>
                </li>
        		<li>
                	<a href="#"><img src="images/nav3.jpg" alt="蝶讯电子" /></a>
                    <ul>
                        <?php $_from = $this->_tpl_vars['cnews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnews'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnews']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cnews']):
        $this->_foreach['cnews']['iteration']++;
?>
                        <li><a href="index.php?action=news&id=<?php echo $this->_tpl_vars['cnews']['id']; ?>
"><?php echo $this->_tpl_vars['cnews']['classname']; ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </li>
        		<li>
                	<a href="#"><img src="images/nav4.jpg" alt="蝶讯电子" /></a>
                    <ul>
                        <?php $_from = $this->_tpl_vars['cjjfa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cjjfa'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cjjfa']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cjjfa']):
        $this->_foreach['cjjfa']['iteration']++;
?>
                        <li><a href="index.php?action=jjfa&id=<?php echo $this->_tpl_vars['cjjfa']['id']; ?>
"><?php echo $this->_tpl_vars['cjjfa']['classname']; ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </li>
        		<li>
                	<a href="#"><img src="images/nav5.jpg" alt="蝶讯电子" /></a>
                     <ul>
                    	<li><a href="index.php?action=showProList&proType=1">软件产品</a></li>
                        <li><a href="index.php?action=showProList&proType=2">硬件产品</a></li>
                    </ul>
                </li>
        		<li>
                	<a href="#"><img src="images/nav6.jpg" alt="蝶讯电子" /></a>
                    <ul>
                        <?php $_from = $this->_tpl_vars['ccgal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ccgal'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ccgal']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ccgal']):
        $this->_foreach['ccgal']['iteration']++;
?>
                        <li><a href="index.php?action=cgal&nid=<?php echo $this->_tpl_vars['ccgal']['nid']; ?>
"><?php echo $this->_tpl_vars['ccgal']['classname']; ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>                       
                    </ul>
                </li>
        		<li><a href="index.php?action=cpyc"><img src="images/nav7.jpg" alt="蝶讯电子" /></a></li>
        	</ul>
            <div class="cl"></div>
        </div>        
        <div class="line"></div>