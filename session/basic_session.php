<?php
	session_start();
	$random_number=rand();
	$_SESSION['random_number']=$random_number;
?>

<html>
<head>
<title>understanding php sessions..page1</title>
</head>
<body>
<div>
	<h2>understanding php sessions..page1</h2>
	<p>Random number generated
		<span style="font-weight:bold;">
		<?php echo $_SESSION['random_number'];?>
		</span>
	</p>
	<a href="basic_session2.php">go to noxt page</a>
</div>
</body>
</html>
