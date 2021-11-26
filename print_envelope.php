<?php 
	$article_title = "Magprinta ng sobre";
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
		<a href="print_envelope.php" title="Artikulo: Mag-print ng envelope" draggable="false">Mag-print ng envelope</a>
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
				<div class="active_tab">Mag-print ng envelope<br>
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
				<div class="page_title">Mag-print ng sobre</div>
			</div>

			<div class="info">
				<p>Ang trick sa pag-print ng sobre ay alam mo kung sa paanong paraan ilalagay ang sobre sa iyong <i>printer</i>. Magbibigay ang MS Word ng impormasyon sa iyong <i>printer</i> at ipapakita sayo kung paano ito gagawin.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Pumunta sa <b>Mailing > Envelopes</b>, at i-enter ang <i>delivery</i> at <i>return addresses</i>.</li>
						<li>Ilagay ang blankong sobre sa <i>printer tray</i>, ayon sa <i>diagram</i> sa <b>Feed</b> box.</li>
						<li>Piliin ang <b>Print</b>.</li>
					</ol>
					<div class="tip">
						<text><b>Payo:</b> Kung ang <i>delivery address</i> ay mahaba, o ang iyong sobre ay iba ang sukat, piliin ang <b>Options</b> bago mo piliin ang <b>Print</b>. Pagbago sa bilang ng <b>From Left</b> ay mabibigyan ka ng maraming espasyo para sa <i>delivery address</i>.</b></text>
						<br><br>
						<img src="<?= $IMG_DIR ?>print_envelope_2.png" width="100%" draggable="false">
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>print_envelope_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="print_address.php" title="Palitan o i-save upang gawing PDF file" draggable="false">I-Print ang Return Address Label &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>