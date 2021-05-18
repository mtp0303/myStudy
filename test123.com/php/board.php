<?php

class Board {

	protected $PDO;
	protected $board_stmt;
	protected $view_stmt;
	protected $member_stmt;
	protected $show_data_val = 5;

	function __construct() {
		include 'connDb.php';
		$this->PDO = new DbConnect();
		$this->board_stmt = new DbControl($this->PDO, 'board');
		$this->view_stmt = new DbControl($this->PDO, 'view');
	}

	function getBoardDataAll() {
		return $result = $this->board_stmt->findAll();
	}

	function getSearchBoardData($text) {
		return $result = $this->board_stmt->search($text);
	}

	function makeBoardList($board_data, $page = 1) {
		$data = "";
		$start_num;

		if ($page < 1) {
			$start_num = count($board_data) - 1;
		} else {
			$start_num = count($board_data) - (($page - 1) * $this->show_data_val) - 1;
		}

		for ($i = 0; $i < $this->show_data_val; $i++, $start_num--) {
			if ($start_num < 0) {
				break;
			} else {
				$date = empty($board_data[$start_num]['date_modify']) ? $board_data[$start_num]['date_insert'] : $board_data[$start_num]['date_modify'];

				$data .= "<tr>"
						. "<th scope=\"row\">" . $board_data[$start_num]['idx'] . "</th>"
						. "<td class=\"board_title\"><a href=\"./detail.php?idx=" . $board_data[$start_num]['idx'] . "\" class=\"text-light\">" . $board_data[$start_num]['title'] . "</td>"
						. "<td class=\"board_writer\">" . $board_data[$start_num]['writer'] . "</td>"
						. "<td class=\"board_data small\">" . $date . "</td>"
						. "<td class=\"board_view small\">" . $this->countView($board_data[$start_num]['idx']) . "</td>";
			}
		}
		return $data;
	}

	function getBoardDetail($idx) {
		return $this->board_stmt->findOnce('idx', $idx);
	}

	function countView($idx) {
		$sql = 'SELECT board_idx FROM view INNER JOIN board ON view.board_idx = board.idx WHERE board_idx = :board_idx';
		$stmt = $this->PDO->prepare($sql);
		$stmt->bindValue(':board_idx', $idx);
		$stmt->execute();
		$view_cnt = count($stmt->fetchAll(PDO::FETCH_ASSOC));
		return $view_cnt;
	}

	function insertView($board_idx) {
		$data = array(
			'board_idx' => $board_idx,
			'ip' => ip2long($_SERVER['REMOTE_ADDR'])
		);
		$this->view_stmt->insert($data);
	}

	function pagenation($board_data, $search = null) {
		$page_no = "";
		$board_data_len = count($board_data);
		if (empty($search)) {
			for ($i = 0; ceil($board_data_len / $this->show_data_val) > $i; $i++) {
				$page_no .= "<li class=\"page-item\"><a class=\"page-link\" href=\"/board?page=" . ($i + 1) . "\">" . ($i + 1) . "</a></li>";
			}
		} else {
			for ($i = 0; ceil($board_data_len / $this->show_data_val) > $i; $i++) {
				$page_no .= "<li class=\"page-item\"><a class=\"page-link\" href=\"/board?page=" . ($i + 1) . "&search=" . $search . "\">" . ($i + 1) . "</a></li>";
			}
		}
		return $page_no;
	}

}
