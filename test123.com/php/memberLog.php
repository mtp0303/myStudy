<?php

class MemberLog {

	protected $PDO;
	protected $member_stmt;
	protected $login_stmt;
	protected $logout_stmt;
	protected $show_data_val = 5;

	function __construct() {
		include 'connDb.php';
		$this->PDO = new DbConnect();
		$this->member_stmt = new DbControl($this->PDO, 'member');
		$this->login_stmt = new DbControl($this->PDO, 'member_login');
		$this->logout_stmt = new DbControl($this->PDO, 'member_logout');
	}

	function getMemberList() {
		return $result = $this->member_stmt->findAll();
	}

	function getMemberLogin() {
		return $result = $this->login_stmt->findAll();
	}

	function getMemberLogout() {
		return $result = $this->logout_stmt->findAll();
	}

	function makeMemberList($member_data, $page = 1) {
		$data = "";
		$start_num;

		if ($page < 1) {
			$start_num = count($member_data) - 1;
		} else {
			$start_num = count($member_data) - (($page - 1) * $this->show_data_val) - 1;
		}

		for ($i = 0; $i < $this->show_data_val; $i++, $start_num--) {
			if ($start_num < 0) {
				break;
			} else {
				$date = empty($member_data[$start_num]['date_modify']) ? $member_data[$start_num]['date_insert'] : $member_data[$start_num]['date_modify'];

				$data .= "<tr>"
						. "<th scope=\"row\">" . $member_data[$start_num]['idx'] . "</th>"
						. "<td>" . $member_data[$start_num]['id'] . "</td>"
						. "<td>" . $member_data[$start_num]['name'] . "</td>"
						. "<td>" . $member_data[$start_num]['email'] . "</td>"
						. "<td>" . $member_data[$start_num]['ip'] . "</td>"
						. "<td class=\"small\">" . $member_data[$start_num]['date_insert'] . "</td>"
						. "</tr>";
			}
		}
		return $data;
	}

	function makeloginList($log_data, $page = 1) {
		$data = "";
		$start_num;

		if ($page < 1) {
			$start_num = count($log_data) - 1;
		} else {
			$start_num = count($log_data) - (($page - 1) * $this->show_data_val) - 1;
		}

		for ($i = 0; $i < $this->show_data_val; $i++, $start_num--) {
			if ($start_num < 0) {
				break;
			} else {
				$date = empty($log_data[$start_num]['date_modify']) ? $log_data[$start_num]['date_insert'] : $log_data[$start_num]['date_modify'];

				$data .= "<tr>"
						. "<th scope=\"row\">" . $log_data[$start_num]['idx'] . "</th>"
						. "<td>" . $log_data[$start_num]['member_idx'] . "</td>"
						. "<td>" . $log_data[$start_num]['session'] . "</td>"
						. "<td>" . $log_data[$start_num]['ip'] . "</td>"
						. "<td class=\"small\">" . $log_data[$start_num]['date_insert'] . "</td>"
						. "</tr>";
			}
		}
		return $data;
	}

	function makeLogoutList($log_data, $page = 1) {
		$data = "";
		$start_num;

		if ($page < 1) {
			$start_num = count($log_data) - 1;
		} else {
			$start_num = count($log_data) - (($page - 1) * $this->show_data_val) - 1;
		}

		for ($i = 0; $i < $this->show_data_val; $i++, $start_num--) {
			if ($start_num < 0) {
				break;
			} else {
				$date = empty($log_data[$start_num]['date_modify']) ? $log_data[$start_num]['date_insert'] : $log_data[$start_num]['date_modify'];

				$data .= "<tr>"
						. "<th scope=\"row\">" . $log_data[$start_num]['idx'] . "</th>"
						. "<td>" . $log_data[$start_num]['member_login_idx'] . "</td>"
						. "<td>" . $log_data[$start_num]['member_idx'] . "</td>"
						. "<td>" . $log_data[$start_num]['session'] . "</td>"
						. "<td class=\"small\">" . $log_data[$start_num]['date_insert'] . "</td>"
						. "</tr>";
			}
		}
		return $data;
	}

	function pagenation($log_data, $page) {
		$page_no = "";
		$log_data_len = count($log_data);

		for ($i = 0; ceil($log_data_len / $this->show_data_val) > $i; $i++) {
			$page_no .= "<li class=\"page-item\"><a class=\"page-link\" href=\"/memberLog/" . $page . ".php?page=" . ($i + 1) . "\">" . ($i + 1) . "</a></li>";
		}

		return $page_no;
	}

}
