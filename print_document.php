<?php 
	$article_title = "I-print ang dokumento";
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
		<a href="print_document.php" title="Artikulo: I-print ang iyong dokument" draggable="false">I-print ang iyong dokumento</a>
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
				<div>I-edit ang PDF file<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="print_document.php" title="I-Print ang iyong dokumento" draggable="false">
				<div class="active_tab">I-print ang iyong dokumento<br>
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
				<div class="page_title">I-print ang iyong dokumento</div>
			</div>
			
			<div class="info">
				<p><i>Print</i> at <i>Print Preview</i> ay nasa parehong lugar: Pumunta lang sa <b>File > Print</b> (o pindutin ang Ctrl+P)</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Piliin ang <b>File > Print</b>. Sa kaliwa, makikita mo ang prebiyu ng iyong gawang dokumento. Sa kanan naman, makikita mo ang <b>Print</b> at ang mga <i>configurable setting</i>.</li>
						<li>Para makita ang bawat pahina, i-click ang <i>arrow</i> sa baba ng prebiyu, at kung maliit masyado ang teksto, gamitin ang <i>zoom slider</i> para lumaki ito.</li>
						<li>Piliin ang bilang ng kopya ng gusto mong i-print, at piliin ang printer na gagamitin.</li>
						<li>Siyasatin ang <b>Settings</b> para mai-print ang baliktarang papel, ibahin ang <i>orientation</i> ng papel, at ibang <i>configurations</i>. Ang mga <i>function</i> na ito ay naiiba ayon sa mga kakayahan ng iyong printer.
							<div class="tip">
								<text><b>Tandaan:</b> Para sa ibang settings, katulad ng pag-print ng naka black and white, i-select ang <b>Print Properties</b></text>
								<br><br>
								<center><img src="<?= $IMG_DIR ?>print_document_2.png" style="width: 80%" draggable="false"></center>
							</div>
						</li>
						<li>Kapag ito ay handa na, i-select ang <b>Print</b>.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>print_document_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="print_envelope.php" title="Mag-print ng envelope" draggable="false">Mag-print ng envelope &rarr;</a></text>
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