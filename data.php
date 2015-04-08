<?php
	
	//	作为单项数据的结构
	class DataTeamInfo
	{
		function __construct($aName, $aLeader)
		{
			$this->name = $aName;
			$this->leader = $aLeader;
		}

		public $name;
		public $leader;
		// TODO 加上所有的必要数据字段
	}

	// 作为数据源的接口
	interface DataSourceInterface
	{
		// 返回一个DataTeamInfo的数组
		public function getTeamListInfo();
	}

	// xml格式的储存方式
	class XmlDataSource implements DataSourceInterface
	{
		// 单件模式
		private static $_instance;

		public static function getInstance()
		{
			if(!$_instance)
			{
				var_dump("getInstance")
				$_instance	=	new XmlDataSource()
			}
			return $_instance;
		}		

		// 返回一个数据数组
		public function getTeamListInfo()
		{
			var $tmpRetArr	=	[];
			$xml = simplexml_load_file('./assets/research.xml');
			foreach($xml -> team as $team)
			{
				var $tmpItem	=	new DataTeamInfo($team->name, $team->leader);
				var_dump($tmpItem);
				$tmpRetArr.push($tmpItem);
			}

			return $tmpRetArr;
		}

		private function __construct()
		{

		}
	}

	// MySql的储存方式
	class MySqlDataSource implements DataSourceInterface
	{

	}
?>