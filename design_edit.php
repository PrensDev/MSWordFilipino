<?php 
	$article_title = "Magdisenyo at mag-edit";
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
		<a href="design_edit.php" title="Artikulo: Pagdisenyo at pag-edit" draggable="false">Pagdisenyo at pag-edit</a>
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
				<div>I-save ang dokumento sa OneDrive<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="design_edit.php" title="Artikulo: Magdisenyo at mag-edit" draggable="false">
				<div  class="active_tab">Magdisenyo at mag-edit<br>
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
			<div class="next_topic">Susunod na paksa:<br><a href="what_word.php">Introduksyon sa MS Word &rarr;</a></div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">Magdisenyo at mag-edit</div>
			</div>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Pagamit ng Styles</b></p>
					<p>Gumamit ng <b>Styles</b> para sa mga <i>headings</i>, taludtod, at iba… para maging magkasang-ayon ang <i>font</i>, <i>font size</i>, <i>font color</i>, at <i>spacing</i> sa iyong dokumento</p>
					<center><img src="<?= $IMG_DIR ?>design_edit_1.png" style="width: 80%" draggable="false"></center>
					<ol type="1">
						<li>Piliin ang mga salita, taludtod, listahan o talahanyan na nais mong gamitan ng style</b>.</li>
						<li>Sa <b>Home</b>, pumili ng istilo
							<p>Kung hindi makita ang nais na istilo, i-click ang <b>More</b> upang makita ang ibang istilo</p>
						</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>design_edit_2.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Paggamit ng Themes</b></p>
					<p>Gumamit ng <b>Themes</b> upang mag mukhang propesyonal ang iyong dokumento</p>
					<ol type="1">
						<li>Piliin ang <b>Design > Themes</b></li>
						<li>Itutok ang <i>cursor</i> sa isang theme upang makita ang disenyo nito at piliin ang nais na theme</li>
					</ol>
				</div>
				<div class="img">
					<center><img src="<?= $IMG_DIR ?>design_edit_3.png" style="width: 70%" draggable="false"></center>
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Suriin ang Spelling at Gramatika</b></p>
					<p>Minamarkahan ng MS Word ang mga salitang mali ang spelling ng pulang linya, at mga kamalian sa gramatika ng asul na linya</p>
					<ol type="1">
						<li>I-right-click ang salita</li>
						<li>Piliin ang tamang salita o 'di kaya ay <b>Ignore</b>.</li>
					</ol>
					<div class="tip">
						<text><b>Tandaan:</b> Ang paraan ng pag-tsek ng spelling at gramatika ay iba sa bawat bersyon ng MS Word at Office 365, para sa karagdagang impormasyon, tignan ang <b>Editor – your writing assistant</b>.</text>
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>design_edit_4.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Hanapin at palitan ang teksto</b></p>
					<ol type="1">
						<li>Piliin ang <b>Home > Replace</b>.</li>
						<li>Para sa <b>Find what</b>, ilagay ang salita o parirala na nais hanapin. Para sa <b>Replace with</b>, Ilagay ang nais na ipalit.</li>
						<li>Piliin ang <b>Find Next</b>, at pumili sa:</li>
						<ol type="a">
							<li><b>Replace</b> – Upang palitan ang naiisang salita, ov</li>
							<li><b>Replace all</b> – Upang palitan ang lahat ng kagayang salita.</li>
						</ol>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>design_edit_5.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="collaborate.php" title="Makipagtulungan" draggable="false">Makipagtulungan &rarr;</a></text>
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