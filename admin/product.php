<?php
	/*
	 * 页面名称：product.php
	 * 页面功能：产品信息管理
	 * 页面类别：业务层
	 * 编写日期：2013.04.07
	 */

	session_start();
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
	
	if($_SESSION['username'] == null)
	{
		echo "<script>alert('请先登录！');location.href='index.php';</script>";
	}

	include("../global.inc.php");
	r_require_once("/classes/MultiActions.php");	

	//默认情况时
	function _default()
	{
		r_require_once("/smarty/MySmarty.php");
		r_include_once("/objects/public/paggingbar.php");
		r_require_once("/objects/Product.php");
		
		$tpl = new MySmarty("admin");		
		$product = new Product();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司后台管理系统");
		
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $product->getTotalbyPro();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('product', $product->getbyPro($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('product.php',$pageNum,$totalPages));
		$tpl->display("showPro.html");
	}
	
	//添加、修改产品页面
	function _new() {
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/objects/Product.php");

		$id = getRequestIntParam('id', 0);
		$proName = getRequestStringParam('proName', '');
		$proImg = getRequestStringParam('proImg', '');
		$proIntro = getRequestStringParam('content1', '');
		$proType = getRequestIntParam('proType',0);
		
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$proIntro = stripslashes($_POST['content1']);
			} else {
				$proIntro = $_POST['content1'];
			}
		}		
		
		$tpl = new MySmarty("admin");
		$product = new Product();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司后台管理系统");		
		$tpl->assign("product",$product->getOnePro($id));
		$tpl->display("editPro.html");
	}
	
	//添加、修改产品操作
	function _save() {
		r_require_once("/objects/Product.php");
		
		$id = getRequestIntParam('id', 0);
		$proName = getRequestStringParam('proName', '');
		$proImg = getRequestStringParam('proImg', '');
		$proIntro = getRequestStringParam('content1', '');
		$proType = getRequestIntParam('proType',0);	
		
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$proIntro = stripslashes($_POST['content1']);
			} else {
				$proIntro = $_POST['content1'];
			}
		}
				
		$product = new Product();
		
		if ($id == 0) {
			$cc = $product->insertPro($proName,substr(uploadFile('proImg'),1),$proIntro,$proType);
		} else {
			$cc = $product->updatePro($id,$proName,substr(uploadFile('proImg'),1),$proIntro,$proType);
		} 
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='product.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='product.php';</script>";
	}
	
	//删除产品操作
	function _delete() {
		r_include_once("/objects/Product.php");
		$product = new Product();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $product->deletePro($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='product.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='product.php';</script>";
	}
?>