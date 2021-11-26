<?php 
	$article_title = "I-save ang iyong Dokumento sa OneDrive";
	include('layouts/pages_header.php'); 
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Magsimula agad</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Mga Pagsasanay" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="nav_add">
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a>
		<span>&rarr;</span>
		<a href="quick_start.php" title="Magsimula agad" draggable="false">Magsimula agad</a>
		<span>&rarr;</span>
		<a href="save_onedrive.php" title="Artikulo: I-save ang iyong Dokumento sa OneDrive gamit ang MS Word" draggable="false">I-save ang iyong Dokumento sa OneDrive gamit ang MS Word</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="create_document.php" title="Artikulo: Gumawa ng dokumento gamit ang MS Word" draggable="false">
				<div>Gumawa ng dokumento gamit ang MS Word<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="save_onedrive.php" title="Artikulo: I-save ang dokumento sa OneDrive" draggable="false">
				<div class="active_tab">I-save ang dokumento sa OneDrive<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="design_edit.php" title="Artikulo: Magdisenyo at mag-edit" draggable="false">
				<div>Magdisenyo at mag-edit<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="collaborate.php" title="Artikulo: Makipag-collaborate (Makipagtulungan)" draggable="false">
				<div>Makipagtulungan sa paggawa<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="what_word.php">Introduksyon sa MS Word &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">I-save ang 'yong dokumento sa OneDrive</div>
			</div>
			
			<div class="col_info">
				<div class="cont">
					<p><b>I-save ang 'yong dokumento sa OneDrive</b></p>
					<p>Kapag iyong isi-save ang mga files sa <i>Cloud</i>, pwede mo itong ibahagi sa iba, at pwede mo rin makuha ito kahit saan – mapa kompyuter, tablet o <i>phone</i> man.</p>
					<ol type="1">
						<li>Piliin ang <b>File > Save as</b></li>
						<li>Piliin ang <b>OneDrive</b>
							<p>I-save ang mga personal files sa <b>OneDrive - Personal</b>, at ang iyong mga work file sa <i>company OneDrive</i>. Pwede mo rin mai-save sa ibang lokasyon na nasa listahan o <b>Add a Place</b>.</p>
						</li>
						<li>Bigyan ng pangalan ang file at piliin ang <b>Save</b>.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>save_onedrive.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="design_edit.php" title="" draggable="false">Magdisenyo at mag-edit &rarr;</a></text>
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