<?php

class PrivacyModify {

	protected $PDO;
	protected $privacy_modify_stmt;
	protected $idx;

	function __construct($idx) {
		include 'connDb.php';
		$this->PDO = new DbConnect();
		$this->privacy_modify_stmt = new DbControl($this->PDO, 'member');
		$this->idx = $idx;
	}

	function getMemberData() {
		return $this->privacy_modify_stmt->findOnce('idx', $this->idx);
	}

	function memberDataModify($data) {
		$this->privacy_modify_stmt->modifiy($data);
	}

	function passwordCheck($check_pw) {
		$file = '../ini/hashSettings.ini';
		$settings = parse_ini_file($file, true);

		$check_pw = hash_hmac($settings['hash']['alg'], $check_pw, $settings['hash']['key']);
		$member_pw = $this->getMemberData()['password'];

		return hash_equals($member_pw, $check_pw);
	}

}
