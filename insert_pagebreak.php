<?php 
	$article_title = "Magsingit ng page break";
	include('layouts/pages_header.php'); 
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Mag-layout</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Mga Pagsasanay" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="nav_add">
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a>
		<span>&rarr;</span>
		<a href="layout_pages.php" title="Mag-layout" draggable="false">Mag-layout</a> 
		<span>&rarr;</span>
		<a href="insert_pagebreak.php" title="Artikulo: Magsingit ng mga mumero ng pahina" draggable="false">Magsingit ng page break</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga atikulo sa kursong ito:</text>
			<a href="change_margins.php" title="Artikulo: Baguhin ang Margin" draggable="false">
				<div>Baguhin ang Margin<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="create_newsletter.php" title="Artikulo: Gumawa ng newsletter columns" draggable="false">
				<div>Gumawa ng newsletter columns<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="change_orientation.php" title="Baguhin ang page orientation sa landscape o portrait" draggable="false">
				<div>Baguhin ang page orientation sa landscape o portrait<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="add_border.php" title="Magdagdag ng border sa pahina" draggable="false">
				<div>Magdagdag ng border sa pahina<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_header.php" title="Magsingit ng header o footer" draggable="false">
				<div>Magsingit ng header o footer<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_pagenumber.php" title="Magsingit ng mga numero ng pahina" draggable="false">
				<div>Magsingit ng mga numero ng pahina<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_pagebreak.php" title="Magsingit ng page break" draggable="false">
				<div class="active_tab">Magsingit ng page break<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_tablecontent.php" title="Magsingit ng talaan ng mga nilalaman" draggable="false">
				<div>Magsingit ng talaan ng mga nilalaman<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="insert_table.php">Maglagay ng mga talahanayan, larawan at watermarks &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">Magsingit ng page break</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Ilagay ang iyong cursor kung saan mo nais matapos ang isang pahina at kung saang pahina ang susunod na magsisimula</li>
						<li>Pumunta sa <b>Insert > Page Break</b>.
						</li>
					</ol>
					<div class="tip">
						<text><b>Tandaan:</b> Kung naglagay ang MS Word ng bagong pahina ng di mo inaasahan sa iyong dokumento, maaaring ito ay dahil sa page break. Upang makita mo ang page break at para pwede mong piliin at i-delete ang mga ito, pumunta sa <b>Home > Show/Hide</b> 
						<img src="<?= $IMG_DIR ?>insert_pagebreak_2.png" draggable="false">.</text>
						<br><br>
						<center><img src="<?= $IMG_DIR ?>insert_pagebreak_3.png" style="width: 80%"draggable="false"></center>
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>insert_pagebreak_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>

			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="insert_pagebreak.php" title="Magsingit ng page break" draggable="false">Magsingit ng page break &rarr;</a></text>
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
