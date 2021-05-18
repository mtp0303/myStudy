<?php

//database 연결
class DbConnect extends PDO {

	function __construct() {
		if (!$settings = parse_ini_file($file = $_SERVER['DOCUMENT_ROOT'] . '/ini/dbSettings.ini', true))
			throw new Exception('not find this file :' . $file);

		$dns = $settings['database']['driver'] . ':host=' . $settings['database']['host'] . ';dbname=' . $settings['database']['dbname'];

		parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
	}

}

//sql문 컨트롤
class DbControl extends PDOStatement {

	protected $PDO = null;
	protected $table = null;

	function __construct($PDO, $table) {
		$this->PDO = $PDO;
		$this->table = $table;
	}

	function findAll() {
		$sql = "SELECT * FROM $this->table";
		$stmt = $this->PDO->query($sql);
		return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function findOnce($col, $val) {
		$sql = "SELECT * FROM $this->table WHERE $col= :$col";
		$stmt = $this->PDO->prepare($sql);
		$stmt->bindValue(":$col", $val);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	function findIdx($col, $val) {
		$sql = "SELECT idx FROM $this->table WHERE $col= :$col";
		$stmt = $this->PDO->prepare($sql);
		$stmt->bindValue(":$col", $val);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function insert($data) {
		$sql = "";
		$columns = "";
		$values = "";

		foreach (array_keys($data) as $c) {
			$columns .= "$c,";
			$values .= ":$c,";
		}

		$columns = preg_replace('/,$/', '', $columns);
		$values = preg_replace('/,$/', '', $values);

		$sql = "INSERT INTO $this->table($columns) VALUES($values)";
		$stmt = $this->PDO->prepare($sql);

		foreach ($data as $c => $v) {
			$stmt->bindValue($c, $v);
		}
		$stmt->execute();
	}

	function delete($col, $val) {
		$sql = "DELETE FROM $this->table WHERE $col= :$col";

		$stmt = $this->PDO->prepare($sql);
		$stmt->bindValue(":$col", $val);

		$stmt->execute();
	}

	function modifiy($data) {
		$col = "";
		foreach (array_keys($data) as $c) {
			$c === 'idx' ?: $col .= "$c=:$c,";
		}
		$col = preg_replace('/,$/', '', $col);

		$sql = "UPDATE $this->table SET $col WHERE idx=:idx";
		$stmt = $this->PDO->prepare($sql);

		foreach ($data as $col => $val) {
			$stmt->bindValue(":$col", "$val");
		}
		$stmt->execute();
	}

	function search($search) {
		$sql = 'SELECT * FROM ' . $this->table . ' WHERE title LIKE "%' . $search . '%"';
		$stmt = $this->PDO->query($sql);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}
