<?php 
	$article_title = "Paggamit ng MS Word sa mobile device";
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
		<a href="quick_start.php" title="Magsimula agad" draggable="false">Magsimula agad</a> | 
		<a href="create_document.php" title="Artikulo: Gumawa ng Dokumento gamit ang MS Word" draggable="false">Gumawa ng Dokumento gamit ang MS Word</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="create_document.php" title="Artikulo: Gumawa ng dokumento gamit ang MS Word" draggable="false">
				<div class="active_tab">Gumawa ng dokumento gamit ang MS Word<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="save_onedrive.php" title="Artikulo: I-save ang dokumento sa OneDrive" draggable="false">
				<div>I-save ang dokumento sa OneDrive<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="design_edit.php" title="Artikulo: Magdisenyo at mag-edit" draggable="false">
				<div>Magdisenyo at mag-edit<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="collaborate.php" title="Artikulo: Makipag-collaborate o makipagtulungan" draggable="false">
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
				<div class="page_title">Gumawa ng dokumento gamit ang MS Word</div>
			</div>

			<div class="info">
				<p>Gamit ang MS Word sa iyong PC, Mac, o Mobile Device magagawa mong:</p>
				<ul>
					<li>Gumawa ng dokumento o <i>template</i></li>
					<li>Maglagay ng teksto, larawan, sining at mga bidyo</li>
					<li>Maghanap ng paksa at mga mapagkakatiwalaang mga batis</li>
					<li>I-access ang iyong mga dokumento sa kompyuter, tablet, o phone gamit ang <i>OneDrive</i></li>
					<li>Maipamahagi ang iyong mga dokumento at gawa sa iba</li>
					<li>Masundan at masuri ang mga pagbabago sa dokumento</li>
				</ul>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Gumawa ng dokumento</b></p>
					<ol type="1">
						<li>Sa <b>File</b> tab, i-click ang <b>New</b>.</li>
						<li>Sa <b>Search online templates</b>, Piliin ang uri ng dokumentong nais gawin at pindutin ang <b>Enter</b></li>
					</ol>
					<div class="tip">
						<text><b>Payo:</b> Para Magkapag simula, piliin ang <b>Blank document</b>. O, kung nais malaman ang mga features ng MS Word, subukan ang mga gabay na <b>Take a tour</b>, <b>Insert your first Table Of Contents</b>, at iba pa.</text>
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>create_document_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Magdagdag at pormat ng teksto</b></p>
					<ol type="1">
						<li>I-pwesto ang cursor at mag magsulat ng teksto.</li>
						<li>Para mai-pormat, Piliin ang text at mamili sa mga pagpipilian: <b>Bold</b>, <b>Italic</b>, <b>Bullets</b>, <b>Numbering</b>, …</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>create_document_2.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Magdagdag ng larawan, hugis, SmartArt, o Chart</b></p>
					<ol type="1">
						<li>Piliin ang <b>Insert</b>.</li>
						<li>Piliin ang nais idagdag:</li>
						<ol type="a">
							<li><b>Pictures</b> – Piliin ang <b>Pictures</b>, at hanapin ang nais na larawan, at piliin ang <b>Insert</b>.</li>
							<li><b>Shapes</b> – Piliin ang <b>Shapes</b>, at pumili ng hugis mula sa pagpipilian</li>
							<li><b>SmartArt</b> – Piliin ang <b>SmartArt</b>,  pumili ng <b>SmartArt Graphic</b>, at piliin ang <b>OK</b></li>
							<li><b>Chart</b> – piliin and <b>Chart</b>, piliin ang nais na chart, at piliin ang <b>OK</b></li>
						</ol>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>create_document_3.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="save_onedrive.php" title="" draggable="false">I- save ang dokumento sa OneDrive &rarr;</a></text>
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