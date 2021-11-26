<?php 
	$article_title = "Paggamit ng MS Word sa mobile device";
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
		<a href="use_mobile.php" title="Artikulo: Paggamit ng MS Word sa mobile device" draggable="false">Paggamit ng MS Word sa mobile device</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga artikulo sa kursong ito:</text>
			<a href="share_document.php" title="Artikulo: Ibahagi ang dokumento" draggable="false">
				<div>Ibahagi ang dokumento<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="collaborate_rtco.php" title="Artikulo: Makipag-collaborate gamit ang real-time co-authoring" draggable="false">
				<div>Makipag-collaborate gamit ang real-time co-authoring<br>
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
				<div  class="active_tab">Paggamit ng MS Word sa mobile device<br>
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
				<div class="page_title">Paggamit ng MS Word sa mobile device</div>
			</div>

			<div class="info">
				<p>Kaya mo na ding maging produktibo kahit saan, gamit ang <b>MS Word mobile app</b>.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<ol style="1">
						<li>I-download ang app para sa device:
							<ul>
								<li>Para sa <i>iPad</i> o <i>iPhone</i>: <b>App Store</b></li>
								<li>Para sa <i>Android tablet</i> o <i>cellphone</i>: <b>Playstore</b></li>
								<li>Para sa <i>Windows tablet</i> o <i>cellphone</i>: <b>Microsoft Store</b></li>
							</ul>
						</li>
						<li>Sa unang pagamit sa MS Word app, mag-sign-in gamit ang iyong Office 365 na pangalan at password.</li>
						<li>Sa <b>New</b> screen, piliin ang <b>OneDrive – Personal</b> sa ilalim ng <b>Create in</b>, pagkatapos ay piliin ang <b>Blank Document</b> (Kusa nang naise-save ito), upang makagawa ng panibagong dokumento.</li>
						<li>Para mabigyan ang dokumento ng panibagong pangalan, piliin ang <b>File > Save > Rename this file</b>.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>use_mobile_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="use_mobile.php" title="Susunod na artikulo: Paggamit ng MS Word sa mobile device" draggable="false">Paggamit ng MS Word sa mobile device &rarr;</a></text>
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