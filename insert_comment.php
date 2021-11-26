<?php 
	$article_title = "Maglagay o mag-alis ng komento";
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
		<a href="share_coauthor.php" title="Makibahagi at co-author" draggable="false">Makibahagi at co-author</a> | 
		<a class="nohov">Maglagay o mag-alis ng komento</a>
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
			<a>
				<div class="active_tab">Maglagay o mag-alis ng komento<br>
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
			<a href="use_mobile.php" title="Artikulo: Paggamit ng MS Word sa mobile devicea" draggable="false">
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
				<div class="page_title">Maglagay o mag-alis ng komento</div>
			</div>

			<div class="info">
				<p>Ang paglalakip ng <i>comment</i> sa mga ispesipikong mga parte ng iyong dokumento ay isang paraan upang magkaroon ng mas malinaw na <i>feedback</i>. Kapag mayroong iba na nagkomento sa dokumento, ang pagre-<i>reply</i> o pagtutugon ay makakapagsimula ng isang diskusyon, kahit na hindi lahat nagtratrabaho ng sabay sabay sa dokumento.</p>
			</div>

			<div class="col_info">
				<div class="cont">
					<p><b>Maglagay ng komento</b></p>
					<ol type="1">
						<li>Piliin ang parte ng dokumento na nais paglagyan ng komento.</li>
						<li>Pumunta sa <b>Review > New Comment</b>.</li>
						<li>I-type ang komento. Kapag gusto mo ito babaguhin, bumalik lamang sa mga ito at i-edit.</li>
						<li>Para makatugon o <i>reply</i> sa mga komento, pumunta sa comment at piliin ang <b>Reply</b>.</li>
					</ol>
				</div>
			</div>
			
			<hr>


			<div class="col_info">
				<div class="cont">
					<p><b>Mag-alis ng komento</b></p>
					<p>I-right-click ang komento, at piliin ang <b>Delete Comment</b>.</p>
					<p>Para maalis ang lahat mg komento sa dokumento, pumunta sa <b>Review</b> tab, pindutin ang down-arrow sa <b>Delete</b>, tapos piliin ang <b>Delete All Comments in Document</b>.</p>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>insert_comment_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="track_changes.php" title="Susunod na artikulo: Subaybayan ang mga pagbabagong nagawa" draggable="false">Subaybayan ang mga pagbabagong nagawa &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>
