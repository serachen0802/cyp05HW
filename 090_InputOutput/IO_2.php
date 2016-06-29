<?php

$fileDir = dirname ( __FILE__ );//目前位置 資料夾名稱
$fileResource = opendir ( $fileDir );

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : ?>
	<!--返回文件名-->
		<li><?php echo $item;?></li>
	<?php endwhile; 
	//{}可用: endwhile代替
	?>
	</ul>

<?php closedir($fileResource); ?>
</body>
</html>
