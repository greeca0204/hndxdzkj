<?php

/**
 * MSSQL 通用查询类
 * @author 曾新干
 * @version 1.0
 */

require_once('DataSource.php');
require_once('DataConnection.php');

class MSSQLConnection implements DataConnection {

	/**
	 * 持久性的数据库连接
	 *
	 * @var php resource
	 */
	var $db;

	/**
	 * 构造器
	 *
	 * @param DataSource $datasource
	 * @return MSSQLConnection
	 */
	function MSSQLConnection($datasource = NULL){

		if ($datasource == NULL) $datasource = new DefaultDataSource();

		$this->db = mssql_pconnect($datasource->host,$datasource->user,$datasource->password);
		if ($this->db == false){
			echo "Can not link to database:" + mssql_get_last_message();
		}else{
			mssql_select_db(@$datasource->dbName,@$this->db);
		}
	}

	/**
	 * 执行查询
	 *
	 * @param string $sql
	 * @return array or null
	 */
	function executeQuery($sql){

		$resultSet = "";
		$resultCount = 0;

		$result = mssql_query($sql,$this->db) or die('Query failed: '.$query);


		if($result == false){
			echo "Can not execute Query:$sql,Cause:" + mssql_get_last_message();
		}else{
			while($row = mssql_fetch_array($result)){
				
				foreach($row as $key=>$value)
				{
					$row[$key]=@iconv("gb2312","utf-8",$value);
				}
				
				$resultSet[$resultCount] = $row;
				$resultCount++;
			}
			mssql_free_result($result);
		}
		return $resultCount == 0 ? null : $resultSet;

	}

	/**
	 * 分页查询
	 *
	 * @param string $sql
	 * @param int $pageNum
	 * @param int $pageSize
	 * @return array or null
	 */
	function pagedQuery($sql,$pageNum,$pageSize){

		if ($pageNum<1) $pageNum = 1;
		$pos = ($pageNum-1) * $pageSize;

		$resultSet = "";
		$resultCount = 0;

		$result = mssql_query($sql,$this->db);
		if($result == false){
			echo "Can not execute Query:$sql,Cause:" + mssql_get_last_message();
		}else{
			$numRows = mssql_num_rows($result);
			if ($numRows>0) {
				mssql_data_seek($result,$pos);
				while($row = mssql_fetch_array($result)){
					if ($resultCount>=$pageSize) break;
				foreach($row as $key=>$value)
				{
					$row[$key]=@iconv("gb2312","utf-8",$value);
				}
			
					$resultSet[$resultCount] = $row;
					$resultCount++;
				}
			}
			mssql_free_result($result);
		}

		return $resultCount == 0 ? null : $resultSet;

	}

	/**
	 * 获取结果集中的第一行
	 *
	 * @param string $sql
	 * @return array or null
	 */
	function getOne($sql){
		$result = $this->executeQuery($sql);
		return ($result!=null && count($result)>=1) ? $result[0] : null;
	}

	/**
	 * 执行SQL语句
	 *
	 * @param string $sql
	 * @return true or false
	 */
	function executeUpdate($sql){
		return mssql_query($sql,$this->db);
	}

	/**
	 * 执行插入的SQL语句
	 *
	 * @param string $sql
	 * @return int 自增的ID
	 */
	function executeInsert($sql){
		$gid = 0;
		$sql.=";SELECT @@IDENTITY AS ID;";
		$result = $this->executeQuery($sql);
		if ($result != null){
			$gid = $result[0]["ID"];
		}
		return $gid;
	}

	/**
	 * 执行删除的SQL语句
	 *
	 * @param string $sql
	 * @return int 自增的ID
	 */
	function executeDelete($sql){
		return mssql_query($sql,$this->db);
	}
}
?>