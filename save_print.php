<?php 
	$tutorial_title = "Mag-save at mag-print";
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
		<text>Mag-save at mag-print</text>
	</div>
	<div class="subtitle">
		<text>Alamin kung paano mag-save o mag-print ng dokumento.</text>
	</div>
	<div class="tutorials">
		<div>
			<a href="save_document.php" draggable="false" title="Artikulo: Mag-save ng dokumento">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Mag-save ng dokumento</div>
			</a>
		</div>
		<div>
			<a href="convert_pdf.php" draggable="false" title="Artikulo: Palitan o i-save upang gawing PDF file">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Palitan o i-save upang gawing PDF file</div>
			</a>
		</div>
		<div>
			<a href="edit_pdf.php" draggable="false" title="Artikulo: I-edit ang PDF file">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">I-edit ang PDF file</div>
			</a>
		</div>
		<div>
			<a href="print_document.php" draggable="false" title="Artikulo: I-print ang iyong dokumento">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">I-print ang iyong dokumento</div>
			</a>
		</div>
		<div>
			<a href="print_envelope.php" draggable="false" title="Artikulo: Mag-print ng envelope">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Mag-print ng envelope</div>
			</a>
		</div>
		<div>
			<a href="print_address.php" draggable="false" title="Artikulo: Mag-print ng Return Address Labels">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Mag-print ng Return Address Labels</div>
			</a>
		</div>
		<div>
			<a href="print_mailing.php" draggable="false" title="Artikulo: Mag-print ng Mailing Labels">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Mag-print ng Mailing Labels</div>
			</a>
		</div>
	</div>
</div>

<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>
