<?php

abstract class PDORepository
{
	const USERNAME = "1sGhNU1F";
	const PASSWORD = "XiwLHBFF";
	const DB = "1sGhNU1F";
	const HOST = "localhost";

	private function getConnection(){
		$u = self::USERNAME;
		$p = self::PASSWORD;
		$db = self::DB;
		$host = self::HOST;
		return new PDO("mysql:dbname=$db;host=$host", $u, $p);
	}

	protected function query($q, $p, $m){
		$connection = $this->getConnection();
		$stmt = $connection->prepare($q);
		$stmt->execute($p);
		$list = [];
		while ($item = $stmt->fetch()) {
			$list[] = $m($item);
		}
		return $list;
	}

}
?>
