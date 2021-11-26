<?php 
	$article_title = "Mag-print ng Return Address Label";
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
		<a href="print_envelope.php" title="Artikulo: Mag-print ng Return Address Label" draggable="false">Mag-print ng Return Address Label</a>
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
				<div class="active_tab">Mag-print ng Return Address Labels<br>
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
				<div class="page_title">Mag-print ng Return Address Label</div>
			</div>
			
			<div class="info">
				<p>Simulan nang may <i>sheet of labels</i> sa ano mang <i>major supplier</i> at sundan ang mga step na ito:</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Pumunta sa <b>Mailings > Labels</b></li>
						<li>I-type ang iyong <i>return address</i> sa <b>Address</b> box.</li>
						<li>Piliin ang <b>Options</b>.</li>
						<li>Sa <b>Label vendors</b> box, pumili ng <i>label brand</i>, tapos pumili ng <i>product number</i> (sa iyong <i>package of labels</i>), pagkatapos piliin ang <b>OK</b>.</li>
						<li>Sa <b>Envelopes and Labels</b> <i>dialog box</i>, piliin ang <b>New Documents</b>.</li>
						<li>I-load ang iyong <i>return address label sheets</i> sa iyong printer, pindutin ang Ctrl+S para ma-save ang dokumento.</li>
					</ol>
					<div class="tip">
						<text><b>Payo:</b> Kung gusto mong i-print ang mga labels ulit, pindutin ang Ctrl+S para ma-save ang dokumento.</text>
					</div>
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="print_mailing.php" title="Mag-print ng Mailing Labels" draggable="false">Mag-print ng Mailing Labels &rarr;</a></text>
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
