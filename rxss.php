<?php header('X-XSS-Protection: 0'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Referer based XSS testing</title>
</head>
<body>
	 <meta name="referrer" content="unsafe-url"> 
<script>window.location.replace('<?php echo $_GET['target']; ?>');</script>
</body>
</html>
