<?php 
	$article_title = "Gumawa ng Newsletter Columns";
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
		<a href="create_newsletter.php" title="Artikulo: Pagbago sa Margin" draggable="false">Gumawa ng newstletter column</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga artikulo sa kursong ito:</text>
			<a href="change_margins.php" title="Artikulo: Baguhin ang Margin" draggable="false">
				<div>Baguhin ang Margin<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="create_newsletter.php" title="Artikulo: Gumawa ng newsletter columns" draggable="false">
				<div class="active_tab">Gumawa ng newsletter columns<br>
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
				<div class="page_title">Gumawa ng newstletter column</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Upang i-layout ang buong dokumento sa column, piliin ang <b>Layout > Columns</b>.</li>
						<li>Piliin ang opsyun na gusto mo, o pumili sa <b>More Columns</b> para itakda ang iyong pormat sa paggawa ng column.</li>
					</ol>

					<hr>

					<p><b>Gawing column ang bahagi ng iyong dokumento</b></p>
					<ol type="1">
						<li>Piliin ang talata na gusto mong i-layout sa column.</li>
						<li>Piliin ang <b>Layout > Columns</b>, at pumili ng opsyun na gusto mo.</li>
					</ol>
				</div>
				<div class="img">
					<center><img src="<?= $IMG_DIR ?>create_newsletter_1.png" style="width: 75%" draggable="false"></center>
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="change_orientation.php" title="" draggable="false">Baguhin ang page orientation sa landscape at portrait &rarr;</a></text>
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
