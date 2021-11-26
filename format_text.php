<?php 
	$tutorial_title = "Magpormat ng teksto";
	include("layouts/tutorial_header.php"); 	
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Magsimula agad</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Home" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body" style="height: 500px">
	<div class="title">
		<text>Magpormat ng teksto</text>
	</div>
	<div class="subtitle">
		<text>Alamin kung paano magpormat ng teksto</text>
	</div>
	<div class="tutorials">
		<div>
			<a href="add_format.php" draggable="false" title="Artikulo: Magdagdag at magformat ng teksto">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Magdagdag at magpormat ng teksto</div>
			</a>
		</div>
		<div>
			<a href="bulleted_numbered.php" draggable="false" title="Artikulo: Gumawa ng listahang naka-bullet o nakanumero">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Gumawa ng listahang naka-bullet o nakanumero</div>
			</a>
		</div>
		<div>
			<a href="change_lspace.php" draggable="false" title="Artikulo: Baguhin ang Line Spacing">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Baguhin ang Line Spacing</div>
			</a>
		</div>
		<div>
			<a href="apply_styles.php" draggable="false" title="Artikulo: Maglapat ng styles">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglapat ng styles</div>
			</a>
		</div>
		<div>
			<a href="apply_themes.php" draggable="false" title="Artikulo: Gumawa ng dokumento">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglapat ng themes</div>
			</a>
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>