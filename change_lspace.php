<?php 
	$article_title = "Baguhin ang Line Spacing";
	include('layouts/pages_header.php'); 
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Magpormat ng teksto</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Mga Pagsasanay" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="nav_add">
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a> | 
		<a href="format_text.php" title="Magpormat ng teksto" draggable="false">Magpormat ng teksto</a> | 
		<a href="change_lspace.php" title="Artikulo: Magbago ng Line Spacing" draggable="false">Baguhin ang line spacing</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="add_format.php" title=" Artikulo: Magdagdag at magpormat ng teksto" draggable="false">
				<div>Magdagdag at magpormat ng teksto<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="bulleted_numbered.php" title="Artikulo: Gumawa ng Bulleted o Numbered List" draggable="false">
				<div>Gumawa ng listahang naka-bullet o nakanumero<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="change_lspace.php" title="Artikulo: Baguhin ang Line Spacing" draggable="false">
				<div class="active_tab">Baguhin ang line spacing<br>
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
			<a href="apply_themes.php" title="Maglapat ng Themes" draggable="false">
				<div>Maglapat ng Themes<br>
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
				<div class="page_title">Baguhin ang Line Spacing</div>
			</div>

			<br>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Piliin ang <b>Design > Paragraph Spacing</b>.</li>
						<li>Itapat ang <i>cursor</i> sa mga pagpipilian upang makita ang prebiyu nito, pagkatapos ay pumili sa pagpipilian ng gusto mo. </li>
					</ol>
					<p>Para sa single spacing, piliin ang <b>No Paragraph Space</b>.</p>
				</div>
				<div class="img">
					<center><img src="<?= $IMG_DIR ?>change_lspace_1.png" style="width: 50%" draggable="false"></center>
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Baguhin ang Line Spacing sa bahagi ng 'yong dokumento</b></p>
					<ol type="1">
						<li>Piliin ang mga talata na nais mong baguhin.</li>
						<li>Piliin ang <b>Home > Line and Paragraph Spacing</b> at piliin ang spacing na gusto mo.</li>
					</ol>
				</div>
				<div class="img">
					<center><img src="<?= $IMG_DIR ?>change_lspace_2.png" style="width: 75%" draggable="false"></center>
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="apply_styles.php" title="Gumawa ng Bulleted o Numbered List" draggable="false">Maglapat ng styles &rarr;</a></text>
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
