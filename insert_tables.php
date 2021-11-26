<?php 
	$article_title = "Maglagay ng talahanayan";
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
		<a class="nohov">Maglagay ng talahanayan</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga artikulo sa kursong ito:</text>
			<a>
				<div class="active_tab">Maglagay ng talahanayan<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
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
				<div class="page_title">Maglagay ng talahanayan</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<p>Para sa isang pangunahing table, i-click ang <b>Insert > Table</b> at ilipat ang cursor sa grid hanggang sa ma-highlight ang bilang ng columns at rows na nais mo.</p>
					<center><img src="<?= $IMG_DIR ?>insert_tables_1.png"></center>
					<p>Para sa isang mas malaking table, o upang i-customize ang table, piliin ang <b>Insert > Table > Insert Table</b>.</p>
					<center><img src="<?= $IMG_DIR ?>insert_tables_2.png"></center>
					<div class="tip">
						<text><b>Payo:</b> Kung mayroon ka nang teksto na pinaghiwalay ng mga tab, maaari mo na kagad itong i-convert sa table: Piliin ang <b>Insert > Table > Draw Table</b>.
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="insert_pictures.php" title="Maglagay ng larawan" draggable="false">Maglagay ng larawan &rarr;</a></text>
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