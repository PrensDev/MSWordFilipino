<?php 
	$article_title = "Gumawa ng listahang naka-bullet o nakanumero";
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
		<a href="bulleted_numbered.php" title="Artikulo: Magdagdag at Magpormat ng teksto" draggable="false">Gumawa ng listahang naka-bullet o nakanumero</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="add_format.php" title="Artikulo: Magdagdag at magpormat ng teksto" draggable="false">
				<div>Magdagdag at magpormat ng teksto<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="bulleted_numbered.php" title="Artikulo: Gumawa ng listahang naka-bullet o nakanumero" draggable="false">
				<div class="active_tab">Gumawa ng listahang naka-bullet o nakanumero<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="change_lspace.php" title="Artikulo: Baguhin ang Line Spacing" draggable="false">
				<div>Baguhin ang line spacing<br>
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
				<div class="page_title">Gumawa ng listahang naka-bullet o nakanumero</div>
			</div>

			<br>

			<div class="info">
				<p>Kapag inilagay mo ang <b>1</b>, <b>tuldok</b>, o <b>space</b>, na may ano mang teksto, pagkapindot sa <b>Enter</b> ay kusang gagawa ng <i>numbered list</i> ang MS Word. Kapag <b>*</b> at <b>space bago ang teksto</b> naman, ang MS Word ay kusang gagawa ng <i>bulleted list</i>.</p>
				<p>Kapag nagawa na ang listahan, pindutin ang <b>Enter</b> hanggang magbuwag ang <i>bullets</i> o <i>numbering</i>.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<p><b>Gumawa ng isang listahan mula sa kasalukuyang Teksto</b></p>
					<ol type="1">
						<li>Pumili ng teksto na nais gawing listahan.</li>
						<li>Piliin ang <b>Home > Bullets</b> o <b>Numbering</b>.</li>
					</ol>
					<div class="tip">
						<text><b>Tandaan:</b> Makikita ka din dito ng iba pang disensyo ng <i>bullet</i> o <i>numbering</i>, at mahahanap ito sa pag-pindot ng arrow katabi ng <b>Bullets</b> o <b>Numbering</b>.</text>
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>bulleted_numbered_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="change_lspace.php" title="Baguhin ang Line Spacing" draggable="false">Baguhin ang Line Spacing &rarr;</a></text>
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
