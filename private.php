<?php
	require 'adminPermission.inc';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Private</title>
</head>
<body>
	<h1>ini adalah halaman private / non-publik setelah login dengan username <u><?php echo $_SESSION['isAdmin']; ?></u></h1>
	<h2><a href="logout.php">Logout</a></h2>
</body>
</html>

