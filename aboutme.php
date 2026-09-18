<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Mijn portfolio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php require_once 'header.php'; ?>
	<main>
		<div class="wrapper">
			<?php echo file_get_contents('data/aboutMe.txt'); ?>
			<br><br>
			<?php echo file_get_contents('data/contact.txt'); ?>
		</div>
	</main>
	<?php require_once 'footer.php'; ?>
</body>

</html>