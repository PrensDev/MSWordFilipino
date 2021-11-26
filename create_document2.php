<?php 
	$article_title = "Gumawa ng Dokumento";
	include('layouts/pages_header.php'); 
	include('templates/header.php'); 
?>

	<div class="navbar" id="navbar">
		<div><a class="nav active" draggable="false">Introduksyon</a></div>
		<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
		<div><a class="nav" href="get_started.php" title="Mga Pagsasanay" draggable="false">Mga Pagsasanay</a></div>
	</div>
	<div class="body">
		<div class="nav_add">
			<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a>
			<span>&rarr;</span> 
			<a href="intro_word.php" title="Maligayang pagdating sa MS Word" draggable="false">Introduksyon sa MS Word</a>
			<span>&rarr;</span> 
			<a href="create_document2.php" title="Artikulo: Gumawa ng Dokumento" draggable="false">Gumawa ng Dokumento</a>
		</div>
		<div class="col">
			<div class="parent_nav">
				<a href="what_word.php" title="Artikulo: Ano ang MS Word?" draggable="false">
					<div>Ano ang MS Word?<br>
						<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
						<text class="article">Artikulo</text>
					</div>
				</a>
				<a href="create_document2.php" title="Artikulo: Gumawa ng Dokumento" draggable="false">
					<div class="active_tab">Gumawa ng Dokumento<br>
						<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
						<text class="article">Artikulo</text>
					</div>
				</a>

				<div class="next_topic">Susunod na paksa:<br>
					<a href="add_text.php">Magsulat at mag-edit &rarr;</a>
				</div>
			</div>
			<div class="page_content">
				<div class="body_head">
					<div class="page_title">Gumawa ng dokumento</div>
				</div>
				<div class="info">
					<p style="font-size: 25px; font-family: Segoe UI Light; color: grey;">Subukan na!</p>
					<p>Upang makagawa ng dokumento, buksan lamang ang MS Word, piliin ang <b>Blank Document</b> o <b>Template</b>, at simulan ang pagsusulat. Ang MS Word ay naghahandog ng maraming disensyong pampropesyonal na <i>templates</i> upang tulugan kang makalikha ng mga liham, resumes, mga report at iba pa.</p>
				</div>
				
				<hr>

				<div class="col_info">
					<div class="cont">
						<p><b>Gumawa ng blangkong dokumento</b></p>
						<ol type="1">
							<li>Buksan ang MS Word, at pilliin ang <b>File > New</b>.</li>
							<li>Piliin ang <b>Blank Document</b>.</li>
						</ol>
					</div>
				</div>

				<hr>
				
				<div class="col_info">
					<div class="cont">
						<p><b>Gumawa ng dokumento gamit ang template</b></p>
						<ol type="1">
							<li>Buksan ang MS Word, at piliin ang <b>File > New</b>.</li>
							<li>I-double-click ang <i>template</i> upang buksan ito</li>
						</ol>
						<div class="tip">
							<text><b>Payo:</b> I-pin ang mga <i>template</i> na iyong nagustuhan, upang makita ito lagay sa pag bukas ng MS Word. Piliin ang <i>template</i> at saka piliin ang pin icon na nasa tabi ng pangalan ng <i>template</i>.</text>
						</div>
					</div>
					<div class="img">
						<center><img src="<?= $IMG_DIR ?>create_document2_1.png" style="width: 75%" draggable="false"></center>
					</div>
				</div>

				<hr>
				
				<div class="col_info">
					<div class="cont">
						<p><b>Magahanap ng Template</b></p>
						<ol type="1">
							<li>Buksan ang MS Word, at pilliin ang <b>File > New</b>.</li>
							<li>Sa <b>Search for Online Templates</b>, ilagay ang hinahap. Halimabawa ang <b>Letter</b> ,<b>resume</b>, o <b>invoice</b>. 
								<br><br>
								<center><img src="<?= $IMG_DIR ?>create_document2_2.png" style="width: 80%" draggable="false"></center>
								<p>O Pumili sa mga kategorya sa ilalalim. Halimabawa ay <b>Business</b>, <b>Personal</b>, o <b>Education</b><p>
							</li>
							<li>I-Click ang template upang makita ang prebiyu. I-click ang mga arrow sa gilid upang makita ang ibang <i>templates</i></li>
							<li>Piliin ang <b>Create</b></li>
						</ol>
					</div>
					<div class="img">
						<img src="<?= $IMG_DIR ?>create_document2_3.png" width="100%" draggable="false">
					</div>
				</div>

				<hr>
				
				<div class="next_article">
					<text>Susunod na artikulo:<br><a href="write_edit.php" title="" draggable="false">Magsulat at mag-edit &rarr;</a></text>
				</div>

				<hr>
				
			</div>
		</div>
	</div>
	
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>