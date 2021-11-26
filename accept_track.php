<?php 
	$article_title = "Tanggapin ang mga nasubaybayang pagbabago";
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
		<a href="accept_track.php" title="Artikulo: Tanggapin ang mga nasubaybayang pagbabago" draggable="false">Tanggapin ang mga nasubaybayang pagbabago</a>
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
				<div class="active_tab">Tanggapin ang mga nasubaybayang pagbabago<br>
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
				<div class="page_title">Tanggapin ang mga nasubaybayang pagbabago</div>
			</div>

			<div class="info">
				<p>Kahit na nakapatay ang <b>Tracked Changes</b>, maaari na mayroong mga iba’t ibang kulay na <i>underlines</i> at <i>strikethroughs</i> ang iyong dokumento, senyales ito na nagkaroon ng <i>insertions</i> at <i>deletions</i> bilang mungkahi habang nakabukas ang <b>Tracked Changes</b>.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<p>Ang mga marka ay nakikita sa lahat na pipili ng <b>All Markup</b> o <b>Simple Markup</b> sa <b>Tracking</b> section ng <b>Review</b> tab.</p>
					<br>

					<center><img src="<?= $IMG_DIR ?>accept_track_1.png" style="width: 80%" draggable="false"></center>
					
					<p>Matatangal ang mga marka sa pagtanggap <i>(accept)</i> o pagtanggi <i>(reject)</i> ng mga pagbabago. Gamitin ang mga buton sa <b>Changes</b> section ng <b>Review</b> tab.</p>
					<br>
					
					<center><img src="<?= $IMG_DIR ?>accept_track_2.png" style="width: 80%" draggable="false"></center>

					<div class="info">
						<ul>
							<li>Ang <b>Previous</b> at <b>Next</b> ay idadala kayo sa unang pagbabago hanggang sa susunod.</li>
							<li>Ang pagpili ng <b>Accept</b> ay gumagawa ng permanenteng pagbabago.</li>
							<li>Ang pagpili naman ng <b>Reject</b> ay nagtatangal ng pagbabago.</li>
						</ul>
					</div>
					
					<div class="tip">
						<text><b>Payo:</b> Para tanggapin o tanggihan ang lahat ng pagbabago ng sabay-sabay, pindutin lamang ang arrow sa <b>Accept</b> o <b>Reject</b> na buton, tapos piliin ang <b>Accept All Changes</b> o <b>Reject All Changes</b>.</text>>
						</ul>
						<br><br>
						<img src="<?= $IMG_DIR ?>accept_track_3.png" width="100%" draggable="false">
					</div>

				</div>
			</div>
			
			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="use_mobile.php" title="Susunod na artikulo: Paggamit ng MS Word sa mobile device" draggable="false">Paggamit ng MS Word sa mobile device &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>
</div>			<span>&rarr;</span>
