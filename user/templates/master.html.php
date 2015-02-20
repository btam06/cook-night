<?php namespace Inkwell\HTML; ?>

<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $this('title') ?: 'Welcome to inKWell' ?></title>
		<link rel="stylesheet" type="text/css" href="sup/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="sup/css/foundation.min.css">
		<script type="text/javascript" src="sup/js/foundation.min.js"></script>
	</head>
	<body>
		<?php $this->insert('content') ?>
	</body>
</html>
