<?php 
	$article_title = "Ikutin ang larawam o hugis";
	include('layouts/pages_header.php'); 
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Talahanayan, larawan at watermark</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Mga Pagsasanay" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="nav_add">
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a>
		<span>&rarr;</span>
		<a href="insert_tpw.php" title="Mag-layout" draggable="false">Maglagay ng talahanayan, larawan at watermark</a>
		<span>&rarr;</span>
		<a href="rotate_picshape.php" title="Artikulo: Iikot ang larawan o hugis" draggable="false">Iikot ang larawan o hugis</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga artikulo sa kursong ito:</text>
			<a href="insert_tables.php" title="Artikulo: Maglagay ng talahanayan" draggable="false">
				<div>Maglagay ng talahanayan<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_pictures.php" title="Artikulo: Maglagay ng larawan" draggable="false">
				<div>Maglagay ng larawan<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_icon.php" title="Maglagay ng icon" draggable="false">
				<div>Maglagay ng icon<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_wordart.php" title="Maglagay ng WordArt" draggable="false">
				<div>Maglagay ng WordArt<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_watermark.php" title="Maglagay ng watermark" draggable="false">
				<div>Maglagay ng watermark<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="show_ruler.php" title="Maglabas o magtago ng ruler" draggable="false">
				<div>Maglabas o magtago ng ruler<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="rotate_picshape.php" title="Mag-ikot ng larawan o hugis" draggable="false">
				<div class="active_tab">Ikutin ang larawan o hugis<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="wrap_text.php" title="Ipalibot ang teksto sa larawan" draggable="false">
				<div>Ipalibot ang teksto sa larawan<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="save_document.php">Mag-save at mag-print &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">Ikutin ang larawan o hugis</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol style="1">
						<li>Pumili ng larawan o hugis.</b>
						</li>
						<li>Sa ilalim ng <b>Drawing Tools</b> (o <b>Picture Tools</b> kung ang papaikutin ay larawan), sa <b>Format</b> tab, i-click ang <b>Rotate</b>, pagkatapos, i-click ang <b>More Rotation Options</b>.</li>
						<li>Ilagay ang sukat na nais sa <b>Rotation</b> box.</li>
					</ol>
				</div>
				<div class="img">
					<center><img src="<?= $IMG_DIR ?>rotate_picshape_1.png" style="width: 75%" draggable="false"></center>
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="wrap_text.php" title="Ipalibot ang teksto sa larawan" draggable="false">Ipalibot ang teksto sa larawan &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>
