<?php 
	$article_title = "Maglagay ng larawan";
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
		<a class="nohov">Maglagay ng larawan</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga artikulo sa kursong ito:</text>
			<a href="insert_tables.php" title="Artikulo: Maglagay ng talahanayan" draggable="false">
				<div>Maglagay ng talahanayan<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a>
				<div class="active_tab">Maglagay ng larawan<br>
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
				<div class="page_title">Maglagay ng larawan</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol style="1">
						<li>Gawin ang isa sa mga sumusunod:
							<ul>
								<li>Piliin ang <b>Insert > Pictures</b> para sa larawan sa iyong PC.</li>
								<li>Piliin ang <b>Insert > Online Pictures</b> para sa larawan na nasa <i>web</i>.</li>
							</ul>
							<div class="tip">
								<text><b>Payo:</b> Para sa larawan na galing sa inyong <i>OneDrive</i>, pumunta sa <i>drop-down list</i> sa kaliwa sa itaas, at ilipat mula <b>Bing</b> papunta sa <b>OneDrive</b>.</text>
								<br><br>
								<center><img src="<?= $IMG_DIR ?>insert_pictures_1.png" style="width: 75%" draggable="false"></center>
							</div>
						</li>
						<li>Piliin ang larawan na nais mo, at pagkatapos pindutin naman ang <b>Insert</b>.</li>
					</ol>
				</div>
			</div>
			
			<hr>

			<div class="col_info">
				<div class="cont">
					<div class="info">
						<p><b>Palitan ng laki o ilipat ang larawan</b></p>
						<ul>
							<li>Upang mapalitan ang laki ng larawan, piliin ang larawan at i-drag ang hawakan sa sulok.</li>
							<li>Upang paligiran ng teksto ang larawan, piliin ang larawan, at tsaka pindutin ang <b>Wrapping Option</b>.
								<div class="tip">
									<text><b>Payo:</b> Pumili maliban sa <b>In Line with Text</b>, at maaari mo nang ilipat ang larawan sa anumang paligid ng pahina: Piliin lang ang larawan at i-drag ito.</b>.
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="img">
					<center><img src="<?= $IMG_DIR ?>insert_pictures_2.png" style="width: 75%" draggable="false"></center>
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="insert_icon.php" title="Maglagay ng icon" draggable="false">Maglagay ng icon &rarr;</a></text>
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