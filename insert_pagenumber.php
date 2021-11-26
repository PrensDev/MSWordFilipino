<?php 
	$article_title = "Magsingit ng mga mumero ng pahina";
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
		<a href="insert_pagenumber.php" title="Artikulo: Magsingit ng mga mumero ng pahina" draggable="false">Magsingit ng mga mumero ng pahina</a>
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
				<div class="active_tab">Magsingit ng mga numero ng pahina<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_pagebreak.php" title="Magsingit ng page break" draggable="false">
				<div>Magsingit ng page break<br>
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
				<div class="page_title">Magsingit ng mga mumero ng pahina</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Piliin ang <b>Insert > Page Number</b>, at tsaka pumili ng lokasyon at style na nais mo.<br><br>
							<center><img src="<?= $IMG_DIR ?>insert_pagenumber_1.png" style="width: 80%" draggable="false"></center>
						</li>
						<li>Kung ayaw mo sa unang pahina lumabas ang numero ng pahina, piliin ang <b>Different First Page</b>.<br><br>
							<center><img src="<?= $IMG_DIR ?>insert_pagenumber_2.png" style="width: 80%" draggable="false"></center>
						</li>
						<li>Kung gusto mo magsimula sa ikalawang pahina ang pag-nunumbering ng 1, pumunta sa <b>Page Number > Format Page Numbers</b>, at itakda ang <b>Start</b> at sa <b>0</b>.<br><br>
							<center><img src="<?= $IMG_DIR ?>insert_pagenumber_3.png" style="width: 80%" draggable="false"></center>
						</li>
						<li>Kapag tapos ka na, pindutin ang <b>Close Header</b> and <b>Footer</b>.<br><br>
							<center><img src="<?= $IMG_DIR ?>insert_pagenumber_4.png" style="width: 80%" draggable="false"></center>
						</li>
					</ol>
					<div class="tip">
						<text><b>Tandaan:</b> Upang makabalik sa header o footer para gumawa ng iba pang mga pagbabago, i-double click lang sa header o footer area.</text>
					</div>
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