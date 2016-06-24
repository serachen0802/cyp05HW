<?php
	$score = 95;
	if ($score >=60 && $score < 70) {
		echo 'D';
	} elseif ($score>=70 && $score<80) {
		echo 'C';
	} elseif ($score>=80 && $score<90) {
		echo 'B';		
	} elseif ($score>=90 && $score<=100) {
		echo 'A';		
	} else {
		echo 'Fail';
	}

//用if及elseif判斷使其變成許多區間
//在條件符合的區間中執行echo
?>