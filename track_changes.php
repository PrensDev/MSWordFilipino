<?php 
	$article_title = "Subaybayan ang mga pagbabagong nagawa";
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
		<a class="nohov">Subaybayan ang mga pagbabagong nagawa</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga artikulo sa kursong ito:</text>
			<a href="share_document.php" title="Artikulo: Ibahagi ang dokumento" draggable="false">
				<div>Ibahagi ang dokumento<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
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
			<a>
				<div class="active_tab">Subaybayan ang mga pagbabagong nagawa<br>
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
				<div class="page_title">Subaybayan ang mga pagbabagong nagawa</div>
			</div>

			<div class="info">
				<p>Pagbubukas ng <b>Track Changes</b> sa MS Word ay isang paraan upang mabigyan ka at iyong mga katrabaho ng paraan upang makagawa ng pagbabago na madaling makita. Ang mga pagbabago na ito ay parang mungkahi na maaari mong suriin, tanggalin o gawin itong permanente.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<div class="info">
						<ul>
							<li>Kapag ito ay nakabukas, mamamarkahan ang mga bura gamit ang <i>strikethrough</i>, at mamamarkahan ang mga nadagdag gamit ang <i>underline</i>. Iba’t iba ang kulay bawat taong gumagawa ng panibago sa dokumento.</li>
							<li>Kapag ito ay nakapatay, hindi minamarkahan ng MS Word ang mga pagbabagong ginawa, ngunit mayroon pa rin <i>colored underlines</i> at <i>strikethroughs</i> sa dokumento</li>
						</ul>
					</div>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>track_changes_1.png" width="100%" draggable="false">
				</div>
			</div>
			
			<hr>

			<div class="col_info">
				<div class="cont">
					<p><b>Suriin ang minungkahing pagbabago</b></p>
					<p>Para masuri ang mga pagbabago sa iyong dokumento, pumunta sa <b>Review > Tracking > Display for Review</b>.</p>
					<div class="info">
						<ul>
							<li>Upang masuri ang mga pagbabago, ito'y pinapahiwatig ng pulang linya sa margin, pillin ang <b>Simple Markup</b>.</li>
							<li>Para sa detalyadong pagsusuri, piliin ang <b>All Markup</b>.</li>
							<li>Para sa prebiyu kung paano ang itsura ng dokumento kapag ginawang permanente ang lahat ng pagbabago, pillin ang <b>No Markup</b>.</li>
							<li>Upang makita itsura ng orihinal na dokumento kapag tinanggal ang mga minungkahing pagbabago, piliin ang <b>Original</b>.</li>
						</ul>
					</div>
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="accept_track.php" title="Susunod na artikulo: Tanggapin ang mga nasubaybayang pagbabago" draggable="false">Tanggapin ang mga nasubaybayang pagbabago &rarr;</a></text>
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