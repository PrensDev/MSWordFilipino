<?php 
	$tutorial_title = "Magsulat at mag-edit";
	include("layouts/tutorial_header.php"); 	
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Magsulat at mag-edit</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Home" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="title">
		<text>Magsulat at mag-edit</text>
	</div>
	<div class="subtitle">
		<text>Alamin kung paano magsulat at mag-edit ng inyong dokumento.</text>
	</div>
	<div class="tutorials">
		<div>
			<a href="add_text.php" draggable="false" title="Artikulo: Maglagay ar=t mag-edit ng teksto">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglagay at mag-edit ng teksto</div>
			</a>
		</div>
		<div>
			<a href="find_text.php" draggable="false" title="Artikulo: Maghanap at magpalit ng teksto">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maghanap at magpalit ng teksto</div>
			</a>
		</div>
		<div>
			<a href="check_sgc.php" draggable="false" title="Artikulo: Suriin ang spelling, gramatika, at kalinawan">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Suriin ang spelling, gramatika, at kalinawan</div>
			</a>
		</div>
		<div>
			<a href="word_count.php" draggable="false" title="Artikulo: Ipakita ang bilang ng mga salita">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Ipakita ang bilang ng mga salita</div>
			</a>
		</div>
		<div>
			<a href="insert_hlink.php" draggable="false" title="Artikulo: Maglagay ng hyperlink">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglagay ng hyperlink</div>
			</a>
		</div>
		<div>
			<a href="remove_hlink.php" draggable="false" title="Artikulo: Magtanggal ng hyperlink">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Magtanggal ng hyperlink</div>
			</a>
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>