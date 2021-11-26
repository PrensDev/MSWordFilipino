<?php 
	$article_title = "Maglabas o magtago ng ruler";
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
		<a class="nohov"> Maglabas o magtago ng ruler </a>
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
			<a>
				<div class="active_tab">Maglabas o magtago ng ruler<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="rotate_picshape.php" title="Mag-ikot ng larawan o hugis" draggable="false">
				<div>Mag-ikot ng larawan o hugis<br>
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
				<div class="page_title">Maglabas o magtago ng ruler </div>
			</div>

			<div class="info">
				<p>Ang patayo at pahigang panukat ay nakakatulong sa pagpantay ng teksto, <i>graphics</i>, talahanayan, at ibat-ibang elemento na nakalagay sa iyong dokumento.<p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol style="1">
						<li>Upang mahanap ang ruler, pumunta sa <b>View</b> at i-tsek ang <i>check box</i> ng <b>Ruler</b>.
							<br><br>
							<center><img src="<?= $IMG_DIR ?>show_ruler_2.png" style="width: 75%" draggable="false"></center>
						</li>
						<li>Kung ayaw ilabas ang ruler na patayo, pumunta sa <b>File tab</b>, piliin ang <b>Options > Advanced</b> sa ilalim ng <b>Display</b>, at i-tsek ang <i>check box</i> na <b>Show Vertical Ruler in Print Layout View</b>.
							<div class="tip">
								<text><b>Payo:</b> Dito ay pwede rin palitan ang pulgada, sentimetro o sa ibang yunit man ng pagsukat.</b>.
							</div>
						</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>show_ruler_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="rotate_picshape.php" title="Mag-ikot ng larawan o hugis" draggable="false">Mag-ikot ng larawan o hugis &rarr;</a></text>
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

