<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if($_GET["status"] == 'fail'){
		echo '<h4> Transaction Is Fail </h4>';
	}else{
		echo '<h4> Transaction Is Success </h4>';
	}
?>
</body>
</html>