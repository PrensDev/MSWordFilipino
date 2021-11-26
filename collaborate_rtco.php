<?php 
	$article_title = "Makipag-collaborate gamit ang realtime co-authoring";
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
		<a class="nohov">Makipagtulungan sa paggawa gamit ang realtime co-authoring</a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<text class="pn_title">Mga artikulo sa kursong ito:</text>
			<a href="share_document.php" title="Artikulo: Ibahagi ang dokumento" draggable="false">
				<div>Ibahagi ang dokumento<br><img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a>
				<div class="active_tab">Makipagtulungan sa paggawa gamit ang real-time co-authoring<br>
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
				<div class="page_title">Makipagtulungan sa paggawa gamit ang realtime co-authoring</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<p>Kapag mayroon nagshare ng dokumento sa iyo, ang email na natangap mo ay mayroong link na nagbubukas ng dokumento sa web browser: sa <i>Word Online</i>. Piliin lang ang <b>Edit Document > Edit in Browser</b>.</p>

					<center><img src="<?= $IMG_DIR ?>collaborate_rtco_1.png" style="width: 80%" draggable="false"></center>
					
					<p>Kapag mayroon ibang tao nakikitulong sa pagawa sa dokumento, maaari mo silang makita at ang kanilang ginagawang mga pagbabago. Tinatawag itong <i>coauthoring</i> o <i>realtime collaboration</i></p>

					<center><img src="<?= $IMG_DIR ?>collaborate_rtco_2.png" style="width: 80%" draggable="false"></center>

					<p>Simula dito, kung mas pinipili mong magtrabaho sa sariling mong Word app, piliin ang <b>Edit in Word</b>, malapit sa taas ng <i>window</i>.</u></p>

					<center><img src="<?= $IMG_DIR ?>collaborate_rtco_3.png" style="width: 80%" draggable="false"></center>
					
				</div>
			</div>
			
			<hr>

			<div class="info" style="margin: 0 50px 30px 50px">
				<p class="highlight">Kumuha ng gabay sa pagsasanay</p>
				<p>Gusto ng <i>guided tour</i>? i-type ang "Collaborate" sa search box sa <b>File > New</b> sa MS Word (pinaka gumagana ito sa version 2016 pataas para sa Windows).<p>
			</div>

			<hr>

			<div class="info">
				<p>Mananatili kang nagko-coauthor, hangga’t isa kang <b>Office 365 subscriber</b>, at gumagamit ka ng isa sa mga version na ito ng Word:</p>
				<ul>
					<li>MS Word 2016 para sa Windows.</li>
					<li>MS Word 2016 para sa Mac.</li>
					<li>MS Word sa isang mobile device (Android, iOS o Windows man).</li>
				</ul>
				<p>Kapag gumagamit ka ng lumang version ng MS Word, o kaya naman ay hindi ka isang subscriber, pwede pa din na i-edit ang dokumento ng kasabay ang iba habang nagtratrabaho sila dito, pero hindi ito <i>realtime collaboration</i>. Para makita ang pagbabago ng iba at mai-share ang mga pagbabagong nagawa mo, kailangan i-save ang dokumento pa oras-oras.</p>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="insert_comment.php" title="Susunod na artikulo: Maglagay o mag-alis ng komento" draggable="false">Maglagay o mag-alis ng komento &rarr;</a></text>
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
