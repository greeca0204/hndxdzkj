<?php
	/*
	* 页面名称：Product.php
	* 页面功能：产品信息管理数据操作
	* 页面类别：数据层
	* 编写日期：2013.05.07
	*/
	
	r_require_once("/classes/GenericDao.php");
	class Product extends GenericDao {
	    
		//获取所有产品信息
		function getAllPro()
		{
			$sql = "SELECT * FROM tb_product ORDER BY id DESC";
			return $this->executeQuery($sql);
		}
		
		//获取所有某类型产品信息
		function getAllTypePro($proType) {
	    	$sql = "SELECT * FROM tb_product where proType=$proType ORDER BY id DESC";
	    	return $this->executeQuery($sql);
	    }
		
		//获取最新N条某类型产品信息
	    function getLimPro($proType,$size) {		
			$sql = "SELECT * FROM tb_product where proType=$proType ORDER BY id DESC limit 0,$size";
	        return $this->executeQuery($sql);
	    }
		
		//获取一款产品信息
		function getOnePro($id)
		{
			$sql = "SELECT * FROM tb_product WHERE id = $id";
			return $this->getOne($sql);			
		}
		
		//分页显示所有产品信息
	    function getbyPro($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM tb_product ORDER BY id desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		//分页显示某种类别的产品信息
	    function getbyTPro($proType,$pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM tb_product where proType=$proType ORDER BY id desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		//查询产品信息的记录总行数
	    function getTotalbyPro() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tb_product";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
		
		//查询一类产品的记录总行数
	    function getTotalbyTPro($proType) {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tb_product where proType=$proType";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
		
		
		 //添加产品
	    function insertPro($proName,$proImg,$proIntro,$proType) {
			/*
	    	$proName = iconv("utf-8","gb2312",$proName);
			$proIntro = iconv("utf-8","gb2312",$proIntro);
			*/
			$sql="insert into tb_product(proName,proImg,proIntro,proType) values('$proName','$proImg','$proIntro',$proType)";
	    	return $this->executeInsert($sql);
	    }
	    
	    //修改产品
	    function updatePro($id,$proName,$proImg,$proIntro,$proType) {
			/*
			$proName = iconv("utf-8","gb2312",$proName);
			$proIntro = iconv("utf-8","gb2312",$proIntro);
			*/
			$sql="update tb_product set proName='$proName',proImg='$proImg',proIntro='$proIntro',proType=$proType where id=$id";
	    	return $this->executeUpdate($sql);
	    }
	    
	    //删除产品
	    function deletePro($id)
	    {
	    	$sql="delete from tb_product where id=$id";
	    	return $this->executeDelete($sql);
	    }
		
	}
?>