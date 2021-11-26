<?php 
	$article_title = "Maglapat ng Themes";
	include('layouts/pages_header.php'); 
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Magformat ng teksto</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Mga Pagsasanay" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="nav_add">
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a> | 
		<a href="format_text.php" title="Magsimula agad" draggable="false">Magformat ng text</a> | 
		<a href="apply_styles.php" title="Artikulo: Maglapat ng Styles" draggable="false">Maglapat ng Themes</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="add_format.php" title="Artikulo: Magdagdag at Magformat ng teksto" draggable="false">
				<div>Magdagdag at Magformat ng teksto<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="bulleted_numbered.php" title="Artikulo: Gumawa ng listahang naka-bullet o nakanumero" draggable="false">
				<div>Gumawa ng listahang naka-bullet o nakanumero<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="change_lspace.php" title="Artikulo: Baguhin ang Line Spacing" draggable="false">
				<div>Baguhin ang Line Spacing<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="apply_styles.php" title="Maglapat ng Styles" draggable="false">
				<div>Maglapat ng Styles<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="apply_themes.php" title="Paggamit ng Themes" draggable="false">
				<div class="active_tab">Maglapat ng Themes<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="change_margins.php">Mag-layout &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">Maglapat ng tema o Themes</div>
			</div>

			<br>

			<div class="info">
				<p>Maglapat ng tema o <i>theme</i> upang magbigyan ng propesyonal at modernong itsura ang inyong dokumento.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Piliin ang <b>Design > Themes</b>.</li>
						<li>Itapat ang cursor sa isang tema upang masilayan ang itsura ito sa iyong dokumento.</li>
						<li>Pumili ng tema.</li>
					</ol>

					<hr>

					<p><b>Baguhin ang kulay ng tema</b></p>
					<ol type="1">
						<li>Piliin ang <b>Design > Colors</b>.</li>
						<li>Itapat ang cursor sa kulay upang masilayan ang itsura ito sa iyong dokumento.</li>
						<li>Pumili ng kulay.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>apply_themes_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Baguhin ang font ng tema</b></p>
					<ol type="1">
						<li>Piliin ang <b>Design > Fonts</b>.</li>
						<li>Itapat ang cursor sa font upang masilayan ang itsura ito sa iyong dokumento.</li>
						<li>Pumili ng font.</li>
					</ol>
				</div>
			</div>

			<hr>

			<div class="next_article">
				<text>Susunod na paksa:<br><a href="change_margins.php" title="Mag-layout" draggable="false">Mag-layout &rarr;</a></text>
			</div>

			<hr>
			
		</div>
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>