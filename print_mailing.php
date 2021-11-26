<?php 
	$article_title = "Mag-print ng Mailing Label";
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
		<a href="save_print.php" title="Mag-save at mag-print" draggable="false">Mag-save at mag-print</a> | 
		<a href="print_mailing.php" title="Artikulo: Mag-print ng Return Address Label" draggable="false">Mag-print ng Mailing Labels</a>
	</div>
	<div class="col"><div class="parent_nav">
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
				<div>I-Print ang iyong dokumento<br>
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
				<div class="active_tab">Mag-print ng Mailing Labels<br>
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
				<div class="page_title">Mag-print ng Mailing Labels</div>
			</div>
			
			<div class="info">
				<p>Gamit ang <i>address list</i> na naka-set-up sa <i>Excel spreadsheet</i>, gamitin ang <i>mail merge</i> sa MS Word upang makagawa ng <i>mailing labels</i>.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Pumunta sa <b>Mailings > Start Mail Merge > Step by Step Mail Merge Wizard</b>.</li>
						<li>Piliin ang <b>Labels > Next: Starting document</b>.</li>
						<li>Piliin ang <b>Label options</b>, piliin ang iyong <b>Labor vendor</b> at <b>Product number</b> (tignan ito sa iyong <i>label package</i>), pagkatapos ay pindutin ang <b>OK</b>.</li>
						<li>Piliin ang <b>Next: Select recipients > Browse</b>.</li>
						<li>I-double-click ang iyong <i>Excel address list</i> tas piliin ang <b>OK</b>.</li>
						<li>I-click ang <b>Next: Arrange your labels</b>.</li>
						<li>Piliin ang <b>Address block</b>, pindutin ang <b>OK</b>, tapos piliin ang <b>Update all labels</b>.</li>
						<li>Piliin ang <b>Next: Preview your labels</b>, tapos piliin ang <b>Next: Complete the merge</b>.</li>
						<li>Piliin ang <b>Print > OK</b>, pumili ng printer, tapos pindutin ang <b>OK</b>.</li>
					</ol>
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na paksa:<br><a href="share_document.php" title="Magshare at co-author" draggable="false">Magbahagi at co-author &rarr;</a></text>
			</div>

			<hr>
			
		</div>

		<br>

	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>