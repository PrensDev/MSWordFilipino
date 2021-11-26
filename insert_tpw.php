<?php 
	$tutorial_title = "Maglagay ng talahanayan, larawan at watermark";
	include("layouts/tutorial_header.php"); 	
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Talahanayan, larawan at watermark</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Home" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="title">
		<text>Maglagay ng talahanayan, larawan at watermark</text>
	</div>
	<div class="subtitle">
		<text>Alamin kung paano maglagay ng talahanayan, larawan at watermark sa dokumento.</text>
	</div>
	<div class="tutorials">
		<div>
			<a href="insert_tables.php" draggable="false" title="Artikulo: Maglagay ng talahanayan">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglagay ng talahanayan</div>
			</a>
		</div>
		<div>
			<a href="insert_pictures.php" draggable="false" title="Artikulo: Maglagay ng larawan">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglagay ng larawan</div>
			</a>
		</div>
		<div>
			<a href="insert_icon.php" draggable="false" title="Artikulo: Maglagay ng icon">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglagay ng icon</div>
			</a>
		</div>
		<div>
			<a href="insert_wordart.php" draggable="false" title="Artikulo: Maglagay ng WordArt">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglagay ng WordArt</div>
			</a>
		</div>
		<div>
			<a href="insert_watermark.php" draggable="false" title="Artikulo: Maglagay ng watermark">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglagay ng watermark</div>
			</a>
		</div>
		<div>
			<a href="show_ruler.php" draggable="false" title="Artikulo: Maglabas o magtago ng ruler">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglabas o magtago ng ruler</div>
			</a>
		</div>
		<div>
			<a href="rotate_picshape.php" draggable="false" title="Artikulo: Ikutin ang larawan o hugis">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Ikutin ang larawan o hugis</div>
			</a>
		</div>
		<div>
			<a href="wrap_text.php" draggable="false" title="Artikulo: Ipalibot ang teksto sa larawan">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Ipalibot ang teksto sa larawan</div>
			</a>
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>