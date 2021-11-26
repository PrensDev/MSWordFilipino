<?php 
	$article_title = "Mag-save bg Dokumento";
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
		<a href="save_document.php" title="Artikulo: Mag-save ng dokumento" draggable="false">Mag-save ng dokumento</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="save_document.php" title="Artikulo: Mag-save ng dokumento" draggable="false">
				<div class="active_tab">Mag-save ng dokumento<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="convert_pdf.php" title="Artikulo: Palitan o i-save upang gawing PDF file" draggable="false">
				<div>Palitan o i-save upang gawing PDF file<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="edit_pdf.php" title="Artikulo: I-edit ang PDF file" draggable="false">
				<div>I-edit ang PDF file<br>
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
				<div class="page_title">Mag-save ng dokumento</div>
			</div>

			<div class="info">
				<p>I-save ang iyong dokumento sa <i>OneDrive</i> para pwede mo ito makuha kahit saan ka pumunta, sa trabaho, sa bahay o sa daan man.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Pumunta sa <b>File > Save as</b>.</li>
						<li>Piliin ang <b>OneDrive</b> para kahit saan, makuha mo ang iyong dokumento.
							<p>I-save ang mga personal na <i>files</i> sa <b>OneDrive - Personal</b>, at sa <i>company OneDrive</i> naman ang mga files sa trabaho. Pwede rin itong i-save sa  ibangpang lokasyon sa listahan katulad ng <b>This PC</b> sa 'yong kompyuter.</p>
						</li>
						<li>Maglagay ng pangalan, at piliin ang <b>Save</b></li>
					</ol>
					<div class="tip">
						<text><b>Tandaan:</b> Kapag ang dokumento mo ay nakalagay sa <i>OneDrive</i>, kusang masi-save ng MS Word ang mga pagbabagong ginawa.</text>
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>save_document_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="convert_pdf.php" title="Palitan o i-save upang gawing PDF file" draggable="false">Palitan o i-save upang gawing PDF file &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>
