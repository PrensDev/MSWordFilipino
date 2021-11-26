<?php 
	$article_title = "Maghanap at magpalit ng teksto";
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
		<a href="find_text.php" title="Artikulo: Maghanap at magpalit ng teksto " draggable="false">Maghanap at magpalit ng teksto </a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="add_text.php" title="Artikulo: Maglagay at mag-edit ng teksto" draggable="false">
				<div>Maglagay at mag-edit ng teksto<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="find_text.php" title="Artikulo: Maghanap at magpalit ng teksto" draggable="false">
				<div class="active_tab">Maghanap at magpalit ng teksto<br>
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
				<div class="page_title">Maghanap at magpalit ng teksto </div>
			</div>
			<div class="info">
				<p>Ang <i>find</i> at <i>replace</i> ay nagbibigay daan upang mahanap ang salita o parirala at mapalitan ito ng bagong teksto.</p>
			</div>
			
			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Sa <b>Home</b>, piliin ang <b>Replace</b><br>O, pindutin ang <b>Ctrl + H</b>.</li>
						<li>Sa <b>Find what</b>, ilagay ang salita o pangungusap na nais mong hanapin.</li>
						<li>Sa <b>Replace with</b>, ilagay ang bagong salita.</li>
						<li>Piliin ang <b>Find Next</b> hanggang dumating ang pagkakataong nais mong mag-update.</li>
						<li>Piliin ang <b>Replace</b>. O, para i-update lahat ng pagkakataon nang walang pag-pipigil sa bawat isa, piliin ang <b>Replace All</b>.</li>
					</ol>
					<div class="tip">
						<text><b>Payo:</b> Upang tukuyin kung malaki o maliit na titik sa iyong paghahanap, piliin ang <b>More > Match case</b>.
							<br><br>
							<center><img src="<?= $IMG_DIR ?>find_text_2.png" style="width: 50%" draggable="false"></center>
						</text>
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>find_text_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>

			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="check_sgc.php" title="Suriin ang spelling, gramatika, at kalinawan" draggable="false">Suriin ang spelling, gramatika, at kalinawan &rarr;</a></text>
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