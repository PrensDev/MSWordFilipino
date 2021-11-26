<?php 
	$article_title = "Maglapat ng Styles";
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
		<a href="apply_styles.php" title="Artikulo: Maglapat ng Styles" draggable="false">Maglapat ng Styles</a>
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
				<div class="active_tab">Maglapat ng Styles<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="apply_themes.php" title="Paggamit ng Themes" draggable="false">
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
				<div class="page_title">Maglapat ng mga istilo o Styles</div>
			</div>

			<br>

			<div class="info">
				<p>Ang istilo o <i>styles</i> ay nagbibigay ng propesyonal at maayos na itsura sa iyong dokumento.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Piliin ang teksto na nais mong baguhin.
							<div class="tip">
								<text><b>Payo:</b> Kapag nilagay mo ang cursor sa isang talata, ang istilo ay mailalapat sa buong talata. Kapag pinili mo ng isang ispesipikong teksto, ang napiling teksto lamang ang malalapatan ng istilo.</text>
							</div>
						</li>
						<li>Sa <b>Home</b> tab, itapat ang cursor sa style upang makita kung ano itsura ito.
							<div class="tip">
								<text><b>Payo:</b> Kung walang mapiling nais na istilo, pindutin ang button na ito <img src="<?= $IMG_DIR ?>apply_styles_2.gif"> para mapalawak ang mapagpipilian.</text>
							</div>
						</li>
						<li>Pumili ng istilo.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>apply_styles_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="apply_themes.php" title="Maglapat ng Themes" draggable="false">Maglapat ng Themes &rarr;</a></text>
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