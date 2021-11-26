<?php 
	$article_title = "I-edit ang PDF File";
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
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a>
		<span>&rarr;</span>
		<a href="save_print.php" title="Mag-save at mag-print" draggable="false">Mag-save at mag-print</a>
		<span>&rarr;</span>
		<a href="save_document.php" title="Artikulo: Palitan o i-save upang gawing PDF file" draggable="false">I-edit ang PDF file</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="save_document.php" title="Artikulo: Mag-save ng dokumento" draggable="false">
				<div>Mag-save ng dokumento<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="convert_pdf.php" title="Artikulo: Palitan o i-save upang gawing PDF file" draggable="false">
				<div>Palitan o i-save upang gawing PDF file<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="edit_pdf.php" title="Artikulo: Paggawa ng Bulleted o Numbered List" draggable="false">
				<div class="active_tab">I-edit ang PDF file<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="print_document.php" title="I-Print ang iyong dokumento" draggable="false">
				<div>I-print ang iyong dokumento<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="print_envelope.php" title="Mag-print ng envelope" draggable="false">
				<div>Mag-print ng envelope<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="print_address.php" title="Mag-print ng Return Address Labels" draggable="false">
				<div>Mag-print ng Return Address Labels<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="print_mailing.php" title="Mag-print ng Mailing Labels" draggable="false">
				<div>Mag-print ng Mailing Labels<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="share_document.php" draggable="false">Magbahagi at co-author &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">I-edit ang PDF file</div>
			</div>
			
			<div class="info">
				<p>Upang ma-edit ang PDF, buksan ito sa MS Word. Ito ay mabisang gawin sa PDF kung ang nakalagay ay puro teksto.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Pumunta sa <b>File > Open</b>.</li>
						<li>Hanapin ang PDF, at buksan ito (maari kang pumili sa <b>Browse</b> at hanapin kung saang <i>folder</i> nakalagay ang PDF).</li>
						<li>Sasabihan ka ng MS Word na kokopyahin nito ang PDF at iko-convert ito sa format ng MS Word para ito ay ma-display. Ang orihinal na PDF ay hindi magbabago. Pillin ang <b>OK</b>.</li>
					</ol>
					<div class="tip">
						<text><b>Tandaan:</b> Ang dokumentong <i>converted</i> sa <i>format</i> ng MS Word ay maaring hindi sunod-sunod na pahina ang makikita at hindi na katulad sa orihinal na gawa. Halimbawa, ang mga linya at pahina ay maaring masira sa iba’t-ibang lokasyon.</text>
					</div>
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="print_document.php" title="Palitan o i-save upang gawing PDF file" draggable="false">I-Print ang iyong dokumento &rarr;</a></text>
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
