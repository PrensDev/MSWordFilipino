<?php 
	$tutorial_title = "Makibahagi at co-author";
	include("layouts/tutorial_header.php"); 	
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Makibahagi at co-author</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Home" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="title">
		<text>Makibahagi at co-author</text>
	</div>
	<div class="subtitle">
		<text>Alamin kung sino ang kasama mong gumagawa ng dokumento, gayundin ang mga nagawa nilang pagbabago sa nilalaman nito. Makipag-collaborate o makipagtulungan gamit ang real-time co-authoring.</text>
	</div>
	<div class="tutorials">
		<div>
			<a href="share_document.php" draggable="false" title="Artikulo: >Ibahagi ang dokumento">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Ibahagi ang dokumento</div>
			</a>
		</div>
		<div>
			<a href="collaborate_rtco.php" draggable="false" title="Artikulo: Makipag-collaborate gamit ang real-time co-authoring">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Makipag-collaborate gamit ang real-time co-authoring</div>
			</a>
		</div>
		<div>
			<a href="insert_comment.php" draggable="false" title="Artikulo: Maglagay o mag-alis ng komento">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Maglagay o mag-alis ng komento</div>
			</a>
		</div>
		<div>
			<a href="track_changes.php" draggable="false" title="Artikulo: Subaybayan ang mga pagbabagong nagawa">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Subaybayan ang mga pagbabagong nagawa</div>
			</a>
		</div>
		<div>
			<a href="accept_track.php" draggable="false" title="Artikulo: Tanggapin ang mga nasubaybayang pagbabago">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Tanggapin ang mga nasubaybayang pagbabago</div>
			</a>
		</div>
		<div>
			<a href="use_mobile.php" draggable="false" title="Artikulo: Paggamit ng MS Word sa mobile device">
				<div class="tab"><img src="<?= $IMG_DIR ?>icon.png" height="19px">Paggamit ng MS Word sa mobile device</div>
			</a>
		</div>
	</div>
</div>

<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>
