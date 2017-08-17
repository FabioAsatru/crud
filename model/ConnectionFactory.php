<?php


	Class ConnectionFactory{

		private $dbHost;
		private $dbUser;
		private $dbName;
		private $dbPass;


		public function getConnection(){

			$dbHost = "localhost";
			$dbUser = "root";
			$dbName = "bd_02";
			$dbPass = "";

			$connection = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
			$charset = mysqli_query($connection,"SET NAMES 'utf8' ");

			return $connection;

		}


	}


?>
