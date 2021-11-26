
<?php 
	$tutorial_title = "Mag-layout";
	include("layouts/tutorial_header.php"); 	
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Mag-save at mag-print</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Home" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="title">
		<text>Mag-layout</text>
	</div>
	<div class="subtitle">
		<text>Alamin kung paano mag-layout ng inyong dokumento.</text>
	</div>
	<div class="tutorials">
		<div>
			<a href="change_margins.php" draggable="false" title="Artikulo: Baguhin ang margin">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Baguhin ang margin</div>
			</a>
		</div>
		<div>
			<a href="create_newsletter.php" draggable="false" title="Artikulo: Palitan o i-save upang gawing PDF file">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Gumawa ng newsletter columns</div>
			</a>
		</div>
		<div>
			<a href="change_orientation.php" draggable="false" title="Artikulo: Baguhin ang page orientation sa landscape o portrait">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Baguhin ang page orientation sa landscape o portrait</div>
			</a>
		</div>
		<div>
			<a href="add_border.php" draggable="false" title="Artikulo: Magdagdag ng border sa pahina">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Magdagdag ng border sa pahina</div>
			</a>
		</div>
		<div>
			<a href="insert_header.php" draggable="false" title="Artikulo: Magsingit ng header o footer">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Magsingit ng header o footer</div>
			</a>
		</div>
		<div>
			<a href="insert_pagenumber.php" draggable="false" title="Artikulo: Magsingit ng mga numero ng pahina">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Magsingit ng mga numero ng pahina</div>
			</a>
		</div>
		<div>
			<a href="insert_pagebreak.php" draggable="false" title="Artikulo: Magsingit ng Page Break">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Magsingit ng Page Break</div>
			</a>
		</div>
		<div>
			<a href="insert_tablecontent.php" draggable="false" title="Artikulo: Magsingit ng Talaan ng mga Nilalaman">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Magsingit ng Talaan ng mga Nilalaman</div>
			</a>
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>
