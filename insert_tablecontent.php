<?php 
	$article_title = "Magsingit ng talaan ng mga nilalaman";
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
		<a href="insert_pagebreak.php" title="Artikulo: Magsingit ng mga mumero ng pahina" draggable="false">Magsingit ng talaan ng mga nilalaman</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga atikulo sa kursong ito:</text>
			<a href="change_margins.php" title="Artikulo: Baguhin ang Margin" draggable="false">
				<div>Baguhin ang Margin<br><img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="create_newsletter.php" title="Artikulo: Gumawa ng newsletter columns" draggable="false">
				<div>Gumawa ng newsletter columns<br>
					<img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="change_orientation.php" title="Baguhin ang page orientation sa landscape o portrait" draggable="false">
				<div>Baguhin ang page orientation sa landscape o portrait<br>
					<img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="add_border.php" title="Magdagdag ng border sa pahina" draggable="false">
				<div>Magdagdag ng border sa pahina<br>
					<img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_header.php" title="Magsingit ng header o footer" draggable="false">
				<div>Magsingit ng header o footer<br>
					<img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_pagenumber.php" title="Magsingit ng mga numero ng pahina" draggable="false">
				<div>Magsingit ng mga numero ng pahina<br>
					<img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_pagebreak.php" title="Magsingit ng page break" draggable="false">
				<div>Magsingit ng page break<br>
					<img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_tablecontent.php" title="Magsingit ng talaan ng mga nilalaman" draggable="false">
				<div class="active_tab">Magsingit ng talaan ng mga nilalaman<br>
					<img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="insert_table.php">Maglagay ng mga talahanayan, larawan at watermarks &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">Magsingit ng talaan ng mga nilalaman</div>
			</div>

			<div class="info">
				<p>Ang talaan ng nilalaman o <i>Table of Contents</i> sa MS Word ay nakadepende sa headings ng iyong dokumento.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<p><b>Magdagdag ng heading styles</b></p>
					<p>Para sa bawat heading na nais mong nasa talaan ng nilalaman, piliin ang teksto sa heading, pumunta sa <b>Home > Styles</b>, at pagkatapos ay pumili sa <b>Heading 1</b>, <b>2</b> o <b>3</b>.</p>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>insert_tablecontent_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>

			<div class="col_info">
				<div class="cont">
					<p><b>Gumawa ng talaan ng mga nilalaman</b></p>
					<ol type="1">
						<li>Ilagay ang iyong cursor kung saan mo nais idagdag ang talaan ng mga nilalaman.</li>
						<li>Pumunta sa <b>References > Table of Contents</b> at pumili sa <b>Automatic Table 1</b> o <b>Automatic Table 2</b>, o kaya naman ay piliin ang <b>Custom Table of Contents</b> upang lumikha iyong sariling estilo</li>
						<li>Kung gumawa ka ng mga pagbabago sa iyong dokumento na nakaapekto sa talaan ng mga nilalaman, i-update ang talaan ng mga nilalaman sa pamamagitan ng pag-right click rito at piliin ang <b>Update Field</b>.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?><?= $IMG_DIR ?>insert_tablecontent_2.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>

			<div class="info" style="margin: 0 50px 30px 50px">
				<p class="highlight">Kumuha ng gabay sa pagsasanay</p>
				<p>Para sa hands-on guide na sumusubaybay sa iyo sa proseso ng paglikha ng talaan ng mga nilalaman, sa desktop MS Word, pumunta sa <b>File > New</b>, at i-search ang table of contents.<p>
			</div>

			<hr>

			<div class="next_article">
				<text>Susunod na paksa:<br><a href="insert_tables.php" title="Maglagay ng mga talahanayan, larawan at watermarksk" draggable="false">Maglagay ng mga talahanayan, larawan at watermarks &rarr;</a></text>
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