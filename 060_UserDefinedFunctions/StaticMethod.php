<?php

echo MathTool::calcTotal(1, 2, 3, 4, 5);//呼叫 MathTool下的calcTotal

class MathTool {
	static function calcTotal () { //會讓函式保留上次運算的結果 靜態設定
		$args = func_get_args();
		// var_dump($args);
		$total = 0;
		foreach ($args as $value) {
			$total += $value;
		}
		return $total;
	}
}

?>
