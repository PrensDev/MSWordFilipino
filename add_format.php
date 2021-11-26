<?php 
	$article_title = "Magdagdag at Magpormat ng teksto";
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
		<a href="add_format.php" title="Artikulo: Magdagdag at Magpormat ng teksto" draggable="false">Magdagdag at magpormat ng teksto</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="add_format.php" title=" Artikulo: Magdagdag at magpormat ng teksto" draggable="false">
				<div class="active_tab">Magdagdag at magpormat ng teksto<br>
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
				<div class="page_title">Magdagdag at magpormat ng teksto</div>
			</div>

			<br>

			<div class="info">
				<p>Upang magkapaglagay ng teksto, itutok ang <i>cursor</i> kung saan mo nais at simulan ang pag-type.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<p><b>Pagpormat ng teksto</b></p>
					<ol type="1">
						<li>Piliin ang teksto na gustong baguhin ang pormat.
							<p>Upang mapili ang isang salita i-double-click ito. Upang mapili ang isang linya ng isang teksto, pindutin, i-hold at i-drag pakaliwa ang teksto.</p>
						</li>
						<li>Pumili ng <i>font</i>, <i>font size</i>, <i>font color</i> o gawin ang teksto na maging <i>bold</i>, <i>italic</i>, o <i>underline</i> upang mabago ito.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>add_format_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Pagkopya sa pormat</b></p>
					<ol type="1">
						<li>Piliin ang teksto na may format na gusto mong kopyahin.</li>
						<li>Pindutin ang <b>Format Painter</b> <img src="<?= $IMG_DIR ?>add_format_2.png" draggable="false">, pagkatapos ay piliin ang teksto upang mailagay ang nakopyang pormat</li>
					</ol>
					<div class="tip">
						<text><b>Payo:</b> I-double click ang <b>Format Painter</b> kung nais mong gamitin kahit saan ang nakopyang pormat nang ilang beses.</text>
					</div>
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="bulleted_numbered.php" title="Gumawa ng Bulleted o Numbered List" draggable="false">Gumawa ng Bullet o Numbered List &rarr;</a></text>
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