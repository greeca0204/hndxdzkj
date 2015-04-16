<?php
	/*
	 * 页面名称：friend.php
	 * 页面功能：友情链接信息管理
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
		r_require_once("/objects/Lyb.php");
		
		$tpl = new MySmarty("admin");		
		$lyb = new Lyb();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司后台管理系统");
		
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $lyb->getTotalbyMessage();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('lyb', $lyb->getbyMessage($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('lyb.php',$pageNum,$totalPages));
		$tpl->display("showMessage.html");
	}
	
	//留言回复页面
	function _new() {
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/objects/Lyb.php");

		$id = getRequestIntParam('id', 0);
		$username = getRequestStringParam('username', '');
		$tel = getRequestStringParam('tel', '');
		$email = getRequestStringParam('email', '');
		$topic = getRequestStringParam('topic', '');
		$content =  getRequestStringParam('topic', '');
		$addtime = getRequestStringParam('addtime','');
		$checked = getRequestIntParam('checked', 0);
		$reply = getRequestStringParam('content1',0);
		
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$reply = stripslashes($_POST['content1']);
			} else {
				$reply = $_POST['content1'];
			}
		}
		
		$tpl = new MySmarty("admin");
		$lyb = new Lyb();
		
		$tpl->assign("siteTitle","湖南蝶讯电子科技有限公司后台管理系统");		
		$tpl->assign("lyb",$lyb->getMessagebyId($id));
		$tpl->display("editMessage.html");
	}
	
	//留言回复操作
	function _save() {
		r_require_once("/objects/Lyb.php");
		
		$id = getRequestIntParam('id', 0);
		$checked = getRequestIntParam('checked', 0);
		$reply = getRequestStringParam('content1',0);
		
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$reply = stripslashes($_POST['content1']);
			} else {
				$reply = $_POST['content1'];
			}
		}
				
		$lyb = new Lyb();
		$cc = $lyb->updateMessage($id,$checked,$reply);
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='lyb.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='lyb.php';</script>";
	}
	
	//删除留言操作
	function _delete() {
		r_include_once("/objects/Lyb.php");
		$lyb = new Lyb();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $lyb->deleteMessage($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='lyb.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='lyb.php';</script>";
	}
?>