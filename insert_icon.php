<?php 
	$article_title = "Maglagay ng icon";
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
		<a class="nohov">Maglagay ng icon</a>
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
			<a>
				<div class="active_tab">Maglagay ng icon<br>
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
				<div class="page_title">Maglagay ng icon</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<p>Pumili mula sa library ng mga icon na maaari mong palitan ng laki, mailipat, at mai-pormat – katulad ng ibang <i>ready-made shapes</i> sa MS Word.</p>
					<ol style="1">
						<li>Piliin ang <b>Insert > Icons</b>.</li>
						<li>Piliin ang mga icon hanggang sa gusto mo at pagkatapos ay piliin ang <b>Insert</b> sa ibabang kanang bahagi.</li>
						<li>Paikutin, kulayan, at palitan ng laki ang iyong icon gamit ang mga opsyon sa <b>Graphic Tools > Format tab</b>, na lumalabas kapag pinindut mo ang icon.</li>
					</ol>
					<div class="tip">
						<text><b>Tandaan:</b> Kung mayroon ka nang teksto na pinaghiwalay ng mga tab, maaari mo na kagad itong i-convert sa table: Piliin ang <b>Insert > Table > Draw Table</b>.
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>insert_icon_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="insert_wordart.php" title="Maglagay ng WordArt" draggable="false">Maglagay ng WordArt &rarr;</a></text>
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