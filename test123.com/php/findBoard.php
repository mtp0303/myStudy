<?php

include 'makeBoardList.php';
$board = new Board();
$board_data = $board->getBoardDataAll();
$board_len = count($board_data);
$last_board_idx = (int) $board_data[$board_len - 1]['idx'];
$idx = (int) $_GET['idx'];
$move = $_GET['move'];
$board_detail;

function findNextBoard($idx) {

	global $board_data;
	global $board_len;
	global $last_board_idx;
	global $board_detail;
	if ($idx > $last_board_idx) {
		;
	} else {
		for ($i = 0; $i < $board_len; $i++) {
			if ((int) $board_data[$i]['idx'] === (int) $idx) {
				$board_detail = $board_data[$i];
				break;
			}
		}
		if (empty($GLOBALS['board_detail']))
			findNextBoard($idx + 1);
	}
}

function findBackBoard($idx) {
	global $board_data;
	global $board_len;
	global $last_board_idx;
	global $board_detail;

	if ($idx < 0) {
		;
	} else {
		for ($i = 0; $i < $board_len; $i++) {
			if ((int) $board_data[$i]['idx'] === (int) $idx) {
				$board_detail = $board_data[$i];
				break;
			}
		}
		if (empty($GLOBALS['board_detail']))
			findBackBoard($idx - 1);
	}
}

$move === 'next' ? findNextBoard($idx) : findBackBoard($idx);
echo empty($board_detail) ? null : json_encode($board_detail);

