<?php header('X-XSS-Protection: 0'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="referrer" content="no-referrer-when-downgrade"> 
	<meta refrrerpolicy=>
<title>Referer based XSS testing</title>
</head>
<body>
<script>

	window.location.replace('<?php echo $_GET['target']; ?>');
	referrer: ""


</script>
</body>
</html>
