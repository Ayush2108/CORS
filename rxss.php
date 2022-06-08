<?php header('X-XSS-Protection: 0'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="referrer" content="unsafe-url"> 
<title>Referer based XSS testing</title>
</head>
<body>
<script>window.location.replace('<?php echo $_GET['target']; ?>');</script>
</body>
</html>
