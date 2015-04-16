<?php
	/*
	 * 页面名称：index.php
	 * 页面功能：网站前台
	 * 页面类别：业务层
	 * 编写日期：2013.05.07
	 */
	
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	include("global.inc.php");
	r_require_once("/classes/MultiActions.php");
	

	//主页
	function _default()
	{
		r_include_once("/smarty/MySmarty.php");	
		r_include_once("/objects/Classes.php");
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/Friend.php");
		r_include_once("/objects/Product.php");
		r_include_once("/objects/Advertise.php");
		r_include_once("/objects/News.php");
		
		$tpl = new MySmarty();
		$classes = new Classes();				
		$link= new WebInfo();
		$friend = new Friend();
		$advertise = new Advertise();
		$product = new Product();
		$news = new News();		
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
		
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("friend",$friend->getAllFriend());
		$tpl->assign("product",$product->getAllPro());
		$tpl->assign("advertise",$advertise->getDisAdvertise());
		
		$tpl->assign("lastnews",$news->getLastNews('新闻动态')); //最新动态		
		$tpl->assign("news",$news->getLimNews('新闻动态',4)); //公司新闻	
		$tpl->assign("jjfa",$news->getLimNews('解决方案',4)); //解决方案
		$tpl->assign("cgal",$news->getLimNews('成功案例',4)); //成功案例
		
		$tpl->assign("gsjj",$news->getOneNewsbyName('公司简介')); //公司简介
		
		$tpl->display("index.html");
	}
	
	//关于我们
	function _gywm()
	{
		$nid = getRequestIntParam("nid",0);
		
		r_include_once("/smarty/MySmarty.php");	
		r_include_once("/objects/Classes.php");
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/News.php");
		
		$tpl = new MySmarty();
		$classes = new Classes();		
		$link= new WebInfo();
		$news = new News();		

		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
			
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));

		$tpl->assign("typeId",$nid);
		$tpl->assign("type",$classes->getDelByClassName('关于我们'));//面包屑导航取类别
		$tpl->assign("type2",$classes->getDelByClassName('关于我们'));//左侧导航取类别
		$tpl->assign("type3",$classes->getDelByClassName('公司材料'));//面包屑导航取类别
		$tpl->assign("type4",$classes->getDelByClassName('关于我们'));//左侧导航取类别
		$tpl->assign("type5",$classes->getDelByClassName('公司材料'));//右侧导航取类别
		
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("gywm",$news->getOneNews($nid));
		
		$tpl->display("gywm.html");
	}
	
	//联系我们
	function _link()
	{
		r_include_once("/smarty/MySmarty.php");	
		r_include_once("/objects/Classes.php");
		r_include_once("/objects/WebInfo.php");	
		
		$tpl = new MySmarty();
		$classes = new Classes();		
		$link= new WebInfo();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
			
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
				
		$tpl->assign("link",$link->getWeb());
		$tpl->display("link.html");
	}
	
	//直接留言
	function _showMessage()
	{
		r_include_once("/smarty/MySmarty.php");
		r_include_once("/objects/Classes.php");
		r_include_once("/objects/WebInfo.php");	
		
		$tpl = new MySmarty();
		$classes = new Classes();	
		$link= new WebInfo();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司 ");
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
		
		$tpl->assign("link",$link->getWeb());
		$tpl->display("lyb.html");
	}
	
	//添加留言
	function _addMessage()
	{		
		$id = getRequestIntParam('id', 0);
		$username = getRequestStringParam('username','');
		$tel = getRequestStringParam('tel','');
		$email = getRequestStringParam('email','');
		$topic = getRequestStringParam('topic','');
		$checked = getRequestIntParam('checked',0);
			
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$content = stripslashes($_POST['content1']);				
			} else {
				$content = $_POST['content1'];
			}
		}
		
		r_include_once("/objects/Lyb.php");
		$lyb = new Lyb();				
		$cc = $lyb->insertMessage($username,$tel,$email,$topic,$content);		
			
		if ($cc)
	        echo "<script>alert('留言成功！');window.location.href='index.php?action=showMessage';</script>";
	    else
	        echo "<script>alert('留言失败！');window.location.href='index.php?action=showMessage';</script>";		
	}
	
	//新闻动态
	function _news()
	{
		$id = getRequestIntParam("id",0);
		
		r_include_once("/smarty/MySmarty.php");
		r_include_once("/objects/public/paggingbar.php");
		r_include_once("/objects/Classes.php");	
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/News.php");
		
		$tpl = new MySmarty();
		$classes = new Classes();
		$link= new WebInfo();
		$news = new News();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
		
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
		
		$tpl->assign("type",$classes->getClassByName('新闻动态'));//面包屑导航取类别
		$tpl->assign("type2",$classes->getClassByName('新闻动态'));//左侧导航取类别
		$tpl->assign("type3",$classes->getClassByName('新闻动态'));//右侧导航取类别
				
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $news->getTotalbyTNews($id);
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('new', $news->getbyTNews($id,$pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('index.php?action=news&id='.$id,$pageNum,$totalPages));
		
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("typeId",$id);
		$tpl->display("new.html");
	}
	
	//新闻内容
	function _newcontent()
	{		
		$id = getRequestIntParam("id",0);
		$nid = getRequestIntParam('nid', 0);
		
		r_include_once("/smarty/MySmarty.php");
		r_include_once("/objects/Classes.php");	
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/News.php");
		
		$tpl = new MySmarty();
		$classes = new Classes();	
		$link= new WebInfo();
		$news = new News();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
		$tpl->assign("typeId",$id);
		
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
		
		$tpl->assign("type",$classes->getClassByName('新闻动态')); //面包屑导航取类别
		$tpl->assign("type2",$classes->getClassByName('新闻动态')); //左侧导航取类别
		
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("new",$news->getOneNews($nid));
				
		$tpl->display("newcontent.html");
	}
	
	//解决方案
	function _jjfa()
	{
		$id = getRequestIntParam("id",0);
		
		r_include_once("/smarty/MySmarty.php");
		r_include_once("/objects/public/paggingbar.php");
		r_include_once("/objects/Classes.php");
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/News.php");
		
		$tpl = new MySmarty();
		$classes = new Classes();
		$link= new WebInfo();
		$news = new News();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
		
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
		
		$tpl->assign("type",$classes->getClassByName('解决方案'));//面包屑导航取类别
		$tpl->assign("type2",$classes->getClassByName('解决方案'));//左侧导航取类别
		$tpl->assign("type3",$classes->getClassByName('解决方案'));//右侧导航取类别
		
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $news->getTotalbyTNews($id);
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('jjfa', $news->getbyTNews($id,$pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('index.php?action=jjfa&id='.$id,$pageNum,$totalPages));
		
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("typeId",$id);
		$tpl->display("jjfa.html");
	}
	
	//解决方案内容
	function _jjfacontent()
	{
		$id = getRequestIntParam("id",0);
		$nid = getRequestIntParam('nid', 0);
		
		r_include_once("/smarty/MySmarty.php");
		r_include_once("/objects/Classes.php");
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/News.php");
		
		$tpl = new MySmarty();
		$classes = new Classes();
		$link= new WebInfo();
		$news = new News();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
		$tpl->assign("typeId",$id);
		
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
		
		$tpl->assign("type",$classes->getClassByName('解决方案')); //面包屑导航取类别
		$tpl->assign("type2",$classes->getClassByName('解决方案')); //左侧导航取类别
		
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("jjfa",$news->getOneNews($nid));
		
		$tpl->display("jjfacontent.html");
	}
	
	//产品展示
	function _showProList()
	{
		$proType = getRequestIntParam('proType', 0);
		$_SESSION['proType'] = $proType;
		r_include_once("/smarty/MySmarty.php");
		r_include_once("/objects/public/paggingbar.php");
		r_include_once("/objects/Classes.php");
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/Product.php");
	
		$tpl = new MySmarty();
		$classes = new Classes();
		$link= new WebInfo();
		$product = new Product();
	
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
	
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
	
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 6;
		$totalRecords = $product->getTotalbyTPro($proType);
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('product', $product->getbyTPro($proType,$pageNum,$pageSize,0));
	
		$tpl->assign('paggingbar', genPaggingbar('index.php?action=showProList&proType='.$_SESSION['proType'],$pageNum,$totalPages));
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("proType",$proType);
		$tpl->display("proList.html");
	}
	
	//产品内容
	function _proIntro()
	{
		$id = getRequestIntParam('id', 0);
	
		r_include_once("/smarty/MySmarty.php");
		r_include_once("/objects/Classes.php");
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/Product.php");
	
		$tpl = new MySmarty();
		$classes = new Classes();
		$link= new WebInfo();
		$product = new Product();
	
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
	
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
	
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("product",$product->getOnePro($id));
		$tpl->display("product.html");
	}
	
	//成功案例
	function _cgal()
	{
		$nid = getRequestIntParam('nid', 0);
		
		r_include_once("/smarty/MySmarty.php");	
		r_include_once("/objects/Classes.php");	
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/News.php");
		
		$tpl = new MySmarty();
		$classes = new Classes();		
		$link= new WebInfo();
		$news = new News();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
		
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
		
		$tpl->assign("typeId",$nid); //将获取到的文章nid值传入模板中
		$tpl->assign("type",$classes->getDelByClassName('成功案例')); //面包屑导航取类别
		$tpl->assign("type2",$classes->getDelByClassName('成功案例')); //左侧导航取类别
		$tpl->assign("type3",$classes->getDelByClassName('成功案例')); //右侧内容取类别
		
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("cgal",$news->getOneNews($nid));
		
		$tpl->display("cgal.html");
	}
		
	//诚聘英才
	function _cpyc()
	{
		r_include_once("/smarty/MySmarty.php");	
		r_include_once("/objects/Classes.php");	
		r_include_once("/objects/WebInfo.php");
		r_include_once("/objects/News.php");
		
		$tpl = new MySmarty();
		$classes = new Classes();
		$link= new WebInfo();
		$news = new News();	
			
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司");
		
		$tpl->assign("cgywm",$classes->getDelByClassName('关于我们'));
		$tpl->assign("cgscl",$classes->getDelByClassName('公司材料'));
		$tpl->assign("cnews",$classes->getClassByName('新闻动态'));
		$tpl->assign("cjjfa",$classes->getClassByName('解决方案'));
		$tpl->assign("ccgal",$classes->getDelByClassName('成功案例'));
			
		$tpl->assign("link",$link->getWeb());
		$tpl->assign("cpyc",$news->getAllTypeNews('诚聘英才'));
		$tpl->display("cpyc.html");
	}
	
?>