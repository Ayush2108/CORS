<?php header('X-XSS-Protection: 0'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Referer based XSS testing</title>
</head>
<meta name="referrer" content="unsafe-url">
<body>
<script>window.location.replace('<?php echo $_GET['go']; ?>');</script>
</body>
</html>
