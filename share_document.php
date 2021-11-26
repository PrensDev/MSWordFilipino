<?php 
	$article_title = "Ibahagi ang Dokumento";
	include('layouts/pages_header.php'); 
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Makibahagi at co-author</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Mga Pagsasanay" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="nav_add">
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a>
		<span>&rarr;</span>
		<a href="share_coauthor.php" title="Makibahagi at co-author" draggable="false">Makibahagi at co-author</a>
		<span>&rarr;</span>
		<a class="nohov">Ibahagi ang dokumento</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga artikulo sa kursong ito:</text>
			<a>
				<div class="active_tab">Ibahagi ang dokumento<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="collaborate_rtco.php" title="Artikulo: Makipagtulungan sa paggawa gamit ang real-time co-authoring" draggable="false">
				<div>Makipagtulungan sa paggawa gamit ang real-time co-authoring<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_comment.php" title="Artikulo: Maglagay o mag-alis ng komento" draggable="false">
				<div>Maglagay o mag-alis ng komento<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="track_changes.php" title="Artikulo: Subaybayan ang mga pagbabagong nagawa" draggable="false">
				<div>Subaybayan ang mga pagbabagong nagawa<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="accept_track.php" title="Artikulo: Tanggapin ang mga nasubaybayang pagbabago" draggable="false">
				<div>Tanggapin ang mga nasubaybayang pagbabago<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="use_mobile.php" title="Artikulo: Paggamit ng MS Word sa mobile device" draggable="false">
				<div>Paggamit ng MS Word sa mobile device<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="insert_table.php" draggable="false">Paggamit ng MS Word sa paaralan &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">Ibahagi o i-share ang dokumento</div>
			</div>

			<div class="info">
				<p>Tuwing magbabahagi ng dokumento sa iba at pagbibigay sa kanila ng permiso upang magedit, lahat ng pagbabago ng iba ay magagawa sa parehong dokumento.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol type="1">
						<li>Sa bandang taas, sa kanan, sa itaas ng ribbon, pindutin ang <b>Share</b>.
							<br><br>
							<center><img src="<?= $IMG_DIR ?>share_document_1.png" style="width: 80%" draggable="false"></center>
						</li>
						<li>I-save ang dokumento sa <i>OneDrive</i>, kung wala pa ito doon.</li>
						<li>Ilagay ang <i>email address</i> ng mga taong gusto mong pagbigyan ng dokumento,  pagkatapos ay magdesisyon ng mga permiso na ibibigay mo sa kanila.</li>
						<li>Maglagay ka ng mensahe kung gusto mo, at pindutin ang <b>Send</b>.
							<p>Mabibigyan ng <i>mail</i> ang mga taong pinamahagian mo, kasama ng <i>link</i> sa iyong dokumento.</p>
						</li>
					</ol>
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="collaborate_rtco.php" title="Susunod na artikulo: Makipag-collaborate gamit ang real-time co-authoring " draggable="false">Makipag-collaborate gamit ang real-time co-authoring &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>

