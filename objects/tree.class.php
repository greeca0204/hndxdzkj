<?php
	/*
	 * ҳ�����ƣ�tree.class.php
	 * ҳ�湦�ܣ�������
	 * ҳ��������ݲ�
	 * ��д���ڣ�2013.04.07
	 */
	 
	class Tree
	{
		public $data=array();
		public $cateArray=array();
		function setNode ($id, $parent, $value)
		{
			$parent = $parent?$parent:0;
			$this->data[$id] = $value;
			$this->cateArray[$id] = $parent;
		}
		
		function getChilds($id=0)
		{
			$childArray=array();
			$childs=$this->getChild($id);
			foreach ($childs as $child)
			{
				$childArray[]=$child;
				$childArray=array_merge($childArray,$this->getChilds($child));
			}
			return $childArray;
		}
		
		function getChild($id)
		{
			$childs=array();	
			foreach ($this->cateArray as $child=>$parent)
			{
				if ($parent==$id)
				{		
					$childs[$child]=$child;
				}
			}
			return $childs;
		}
		
		//���߻�ȡ���ڵ�
		function getNodeLever($id)
		{
			$parents=array();
			if (array_key_exists($this->cateArray[$id],$this->cateArray))
			{
				$parents[]=$this->cateArray[$id];
				$parents=array_merge($parents,$this->getNodeLever($this->cateArray[$id]));
			}
			return $parents;
		}
		
		function getLayer($id,$preStr='-')
		{
			return str_repeat($preStr,count($this->getNodeLever($id)));
		}
		
		function getValue ($id)
		{
			return $this->data[$id];
		} // end func
	}
?>
