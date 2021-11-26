<?php include('config/config.php'); ?>

<!-- This webpage is created by: Jetsun Prince Torres -->
<!DOCTYPE html>
<html>
<head>
	<title>Panimula</title>
	<link rel="stylesheet" href="<?= $CSS_DIR ?>get_started.css" />
	<link rel="icon" href="<?= $IMG_DIR ?>icon.png" />
</head>
<body>
	<?php include('templates/header.php'); ?>
	<div class="navbar" id="navbar">
		<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	</div>
	<div class="body">
		<div class="page_title"><text class="body_title">Simulan na ang pagsasanay sa paggamit ng Word!</text></div>
		<div class="flex row">
			<div class="flex c4">
				<div>
					<a class="no-ul" href="create_document.php" title="Magsimula Agad!" draggable="false">
						<img src="<?= $IMG_DIR ?>quick_start.png" width="50%" draggable="false" />
					</a><br>
					<a href="create_document.php" title="Magsimula Agad!" draggable="false">Magsimula agad!</a>
				</div>
				<div>
					<a class="no-ul" href="what_word.php" title="Introduksyon sa Word" draggable="false">
						<img src="<?= $IMG_DIR ?>welcome_word.png" width="50%" draggable="false" />
					</a><br>
					<a href="what_word.php" title="Introduksyon sa Word" draggable="false">Introduksyon sa Word</a>
				</div>
				<div>
					<a class="no-ul" href="add_text.php" title="Magsulat at mag-edit" draggable="false">
						<img src="<?= $IMG_DIR ?>write_edit.png" width="50%" draggable="false" />
					</a><br>
					<a href="add_text.php" title="Magsulat at mag-edit">Magsulat at mag-edit</a>
				</div>
				<div>
					<a class="no-ul" href="add_format.php" title="Magformat ng text" draggable="false">
						<img src="<?= $IMG_DIR ?>format_text.png" width="50%" draggable="false" />
					</a><br>
					<a href="add_format.php" title="Magformat ng text" draggable="false">Magpormat ng text</a>
				</div>
			</div>
			<div class="flex c4">
				<div>
					<a class="no-ul" href="change_margins.php" title="Mag-layout" draggable="false">
						<img src="<?= $IMG_DIR ?>layout_pages.png" width="50%" draggable="false" />
					</a><br>
					<a href="change_margins.php" title="Mag-layout" draggable="false">Mag-layout</a>
				</div>
				<div>
					<a class="no-ul" href="insert_tables.php" title="Maglagay ng talahanayan, larawan at watermarks" draggable="false">
						<img src="<?= $IMG_DIR ?>insert_tables.png" width="50%" draggable="false" />
					</a><br>
					<a href="insert_tables.php" title="Maglagay ng talahanayan, larawan at watermarks" draggable="false">Maglagay ng talahanayan, larawan at watermarks</a>
				</div>
				<div>
					<a class="no-ul" href="save_document.php" title="Mag-save at mag-print" draggable="false">
						<img src="<?= $IMG_DIR ?>save_print.png" width="50%" draggable="false" />
					</a><br>
					<a href="save_document.php" title="Mag-save at mag-print" draggable="false">Mag-save at mag-print</a>
				</div>
				<div>
					<a class="no-ul" href="share_document.php" title="Magbahagi at co-author" draggable="false">
						<img src="<?= $IMG_DIR ?>share_coauthor.png" width="50%" draggable="false" /></a><br>
					<a href="share_document.php" title="Magbahagi at co-author" draggable="false">Magbahagi at co-author</a>
				</div>
			</div>
		</div>
	</div>
	<?php include('templates/footer.php'); ?>
	<script src="<?= $JS_DIR ?>js.js"></script>
</body>
</html>