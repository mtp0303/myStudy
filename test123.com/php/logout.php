<?php

class Logout {

	private $idx;

	function __construct($idx) {
		$this->idx = $idx;
	}

	function getLastLogin() {
		include_once 'connDb.php';
		$PDO = new DbConnect();
		$conn = new DbControl($PDO, 'member_login');

		$result = $conn->findIdx('member_idx', $this->idx);
		rsort($result);

		return $result;
	}

	function setMemberLogout($member_login_idx) {
		include_once 'connDb.php';
		$data = array(
			'member_login_idx' => $member_login_idx,
			'member_idx' => $this->idx,
			'session' => session_id()
		);

		$PDO = new DbConnect();
		$conn = new DbControl($PDO, 'member_logout');

		$conn->insert($data);
	}

	function sessionDestroy() {
		session_status() > 2 ?: session_destroy();
	}

}
