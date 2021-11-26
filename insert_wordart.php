<?php 
	$article_title = "Maglagay ng WordArt";
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
		<a class="nohov">Maglagay ng WordArt</a>
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
			<a>
				<div class="active_tab">Maglagay ng WordArt<br>
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
				<div>Ikutin ang larawan o hugis<br>
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
				<div class="page_title">Maglagay ng WordArt</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol style="1">
						<li>Sa <b>Insert</b>, piliin ang <b>WordArt</b>.</li>
						<li>Pumili ng estilo na nais mong ilagay at pagkatapos, ilagay ang iyong teksto.</li>
					</ol>
					<div class="tip">
						<text><b>Payo:</b> Upang mapalitan ang napiling teksto na maging WordArt, piliin ang teksto na gustong mapalitan at pindutin ang <b>Insert > WordArt</b>.</text>
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>insert_wordart_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>

			<div class="col_info">
				<div class="cont">
					<p><b>Pagbago sa kulay</b></p>
					<ol style="1">
						<li>Pumunta sa <b>WordArt</b></li>
						<li>Sa <b>Format</b> tab, piliin ang <b>Text Fill</b> at <b>Text Outline</b>.</li>
						<li>Piliin ang estilo na nais mong ilagay, at pagkatapos ay ilagay ang iyong teksto.</li>
						<li>Sa <b>Format</b> tab, piliin ang <b>Text Effects</b>.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>insert_wordart_2.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Pag-rotate</b></p>
					<ol style="1">
						<li>Pumunta sa WordArt</li>
						<li>Pindutin ang rotation handle at i-drag ito.</li>
					</ol>
				</div>
				<div class="img">
					<center><img src="<?= $IMG_DIR ?>insert_wordart_3.png" style="width: 60%" draggable="false"></center>
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="insert_watermark.php" title="Maglagay ng watermark" draggable="false">Maglagay ng watermark &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>

	<br>

</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>
