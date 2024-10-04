<?php
	session_start();
?>
<html>
<head>
<title>understanding php sessions..page2</title>
</head>
<body>
<div>
	<h2>understanding php sessions..page2</h2>
	<p>Random number generated
		<span style="font-weight:bold;">
		<?php echo $_SESSION['random_number'];?>
		</span>
	</p>
	<p>PHP session id
		<span style="text-decoration:underline;">
		<?php echo session_id();?>
		</span>
		</p>
	</div>
</body>
</html>