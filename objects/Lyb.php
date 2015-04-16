<?php
	/*
	 * 页面名称：Lyb.php
	 * 页面功能：留言信息管理数据操作
	 * 页面类别：数据层
	 * 编写日期：2013.05.07
	 */
	
	r_require_once("/classes/GenericDao.php");
	class Lyb extends GenericDao {
	       
	    //获取所有留言信息
	    function getAllMessage() {
	    	$sql="SELECT * FROM tb_lyb";
	        return $this->executeQuery($sql);
	    }
	    
	    //分页显示留言信息
	    function getbyMessage($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM tb_lyb ORDER BY id";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		//查询记录总行数
	    function getTotalbyMessage() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tb_lyb";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
		
		//获取单条留言信息
	    function getMessagebyId($id) {
	    	$sql="SELECT * FROM tb_lyb where id=$id";
	    	return $this->getOne($sql);
	    }
		
		//添加留言
	    function insertMessage($username,$tel,$email,$topic,$content) {
			/*
			$username = iconv("utf-8","gb2312",$username);
			$topic = iconv("utf-8","gb2312",$topic);
			$content =  iconv("utf-8","gb2312",$content);
			*/
	    	$sql="insert into tb_lyb(username,tel,email,topic,content,addtime,checked,reply) values('$username','$tel','$email','$topic','$content',".time().",0,'')";
	    	return $this->executeInsert($sql);
	    }
		
		//添加回复
		function updateMessage($id,$checked,$reply)
		{
			//$reply = iconv("utf-8","gb2312",$reply);
			$sql="update tb_lyb set checked=$checked,reply='$reply' where id=$id";
	    	return $this->executeUpdate($sql);
		}

	    //删除留言
	    function deleteMessage($id)
	    {
	    	$sql="delete from tb_lyb where id=$id";
	    	return $this->executeDelete($sql);
	    }
	}

?>