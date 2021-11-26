<?php 
	$article_title = "Magtanggal ng mga hyperlink";
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
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a> | 
		<a href="write_edit.php" title="Magsulat at mag-edit" draggable="false">Magsulat at mag-edit</a> | 
		<a href="remove_hlink.php" title="Artikulo: Magtanggal ng mga hyperlink" draggable="false">Magtanggal ng mga hyperlink </a>
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
				<div class="active_tab">Magtanggal ng mga hyperlink<br>
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
				<div class="page_title">Magtanggal ng mga hyperlink</div>
			</div>
			<div class="info">
				<p>Ang pagtanggal ng <i>hyperlink</i> ay pinapanatili ang teksto; tinatanggal lamang nito ang <i>link</i></p>
			</div>
			
			<div class="col_info">
				<div class="cont">
					<p>I-right-click ang <i>link</i>, at piliin ang <b>Remove Hyperlink</b>.</p>
					<div class="tip">
						<text><b>Payo:</b> Upang maiwasan sa MS Word ang kusang pagkakabuo ng <i>link</i> kapag nagta-type ng <i>address</i>, magpunta sa <b>File > Options > Proofing</b>, at i-click ang <b>AutoCorrect Options</b>. Sa <b>AutoFormat As You Type</b> na tab, i-clear ang <b>Internet and network paths with hyperlinks</b> na <b>check box</b>.
							<br><br>
							<img src="<?= $IMG_DIR ?>insert_hlink_2.png" width="100%" draggable="false">
						</text>
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>insert_hlink_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
					
			<div class="next_article">
				<text>Susunod na paksa:<br><a href="add_format.php" title="Magpormat ngg teksto" draggable="false">Magpormat ng teksto &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>
</div>

<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>