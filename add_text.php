<?php 
	$article_title = "Maglagay at mag-edit ng teksto";
	include('layouts/pages_header.php'); 
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Magsulat at mag-edit</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Mga Pagsasanay" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="nav_add">
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a>
		<span>&rarr;</span>
		<a href="write_edit.php" title="Magsulat at mag-edit" draggable="false">Magsulat at mag-edit</a>
		<span>&rarr;</span>
		<a href="add_text.php" title="Artikulo: Maglagay at mag-edit ng teksto" draggable="false">Maglagay at mag-edit ng teksto</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="add_text.php" title="Artikulo: Maglagay at mag-edit ng teksto" draggable="false">
				<div class="active_tab">Maglagay at mag-edit ng teksto<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="find_text.php" title="Artikulo: Maghanap at magpalit ng teksto" draggable="false">
				<div>Maghanap at magpalit ng teksto<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="check_sgc.php" title="Artikulo: Suriin ang spelling, gramatika, at kalinawan" draggable="false">
				<div>Suriin ang spelling, gramatika, at kalinawan<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="word_count.php" title="Artikulo: Ipakita ang bilang ng mga salita" draggable="false">
				<div>Ipakita ang bilang ng mga salita<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_hlink.php" title="Artikulo: Maglagay ng mga hyperlink" draggable="false">
				<div>Maglagay ng mga hyperlink<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="remove_hlink.php" title="Artikulo: Magtanggal ng mga hyperlink" draggable="false">
				<div>Magtanggal ng mga hyperlink<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="add_format.php">Magpormat ng teksto &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">Maglagay at mag-edit ng teksto</div>
			</div>
			<div class="info">
				<p style="font-size: 25px; font-family: Segoe UI Light; color: grey;">Subukan na!</p>
				<p>Sundan and mga paraang ito upang makapaglagay, palitan, at mag-pormat ng teksto sa Word.</p>
			</div>
			
			<hr>

			<div class="col_info">
				<div class="cont">
					<p><b>Maglagay ng teksto</b></p>
					<ol type="1">
						<li>Ilagay ang <i>cursor</i> sa kung saan nais maglagay ng teksto.</li>
						<li>Magsimulang mag-type.</li>
					</ol>
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Palitan ang Teksto</b></p>
					<ol type="1">
						<li>Palitan ang Teksto
							<ul>
								<li>Upang piliin ang isang salita, I-double-click ito.</li>
								<li>Upang piliin ang linya, pindutin hanggang sa kanang bahagi ng linya.</li>
							</ul>
						</li>
						<li>Magsimulang mag-type.</li>
					</ol>
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Magpormat ng teksto</b></p>
					<ol type="1">
						<li>Piliin ang tekstong nais mong ipormat.</li>
						<li>Piliin ang opsyon upang palitan ang <i>font, font size, font color,</i> o gawing <i>bold, italic,</i> o naka salungguhit.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>add_text_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>

			<div class="col_info">
				<div class="cont">
					<p><b>Kumopya ng pormat</b></p>
					<ol type="1">
						<li>Piliin ang tekstong nais mong kopyahin ang pormat.</li>
						<li>Pindutin and <b>Format painter</b> <img src="<?= $IMG_DIR ?>add_format_2.png" draggable="false">, tapos piliin ang tekstong nais mong pagkopyahan ng pormat.</li>
					</ol>
					<div class="tip">
						<text><b>Payo:</b> I-double-click ang <b>Format painter</b> <img src="<?= $IMG_DIR ?>add_format_2.png" draggable="false"> kung nais mong kopyahin ang pormat sa mas higit pa sa isang lugar.</text>
					</div>
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="find_text.php" title="Maghanap at magpalit ng teksto" draggable="false">Maghanap at magpalit ng teksto &rarr;</a></text>
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