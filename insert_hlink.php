<?php 
	$tutorial_title = "Maglagay ng mga hyperlink";
	include("layouts/pages_header.php"); 	
	include('templates/header.php'); 
?>

<div class="navbar" id="navbar">
	<div><a class="nav active" draggable="false">Magsulat at mag-edit</a></div>
	<div><a class="nav" href="index.php" title="Home" draggable="false">Home</a></div>
	<div><a class="nav" href="get_started.php" title="Mga Pagsasanay" draggable="false">Mga Pagsasanay</a></div>
</div>
<div class="body">
	<div class="nav_add">
		<a href="get_started.php" title="Mga pagsasanay" draggable="false">Mga Pagsasanay</a>
		<span>&rarr;</span>
		<a href="write_edit.php" title="Magsulat at mag-edit" draggable="false">Magsulat at mag-edit</a>
		<span>&rarr;</span>
		<a href="insert_hlink.php" title="Artikulo: Maglagay ng mga hyperlink" draggable="false">Maglagay ng mga hyperlink </a>
	</div>
	<div class="col">
		<div class="parent_nav">
			<a href="add_text.php" title="Artikulo: Maglagay at mag-edit ng teksto" draggable="false">
				<div>Maglagay at mag-edit ng teksto<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="find_text.php" title="Artikulo: Maghanap at magpalit ng teksto" draggable="false">
				<div>Maghanap at magpalit ng teksto<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="check_sgc.php" title="Artikulo: Suriin ang spelling, gramatika, at kalinawan" draggable="false">
				<div>Suriin ang spelling, gramatika, at kalinawan<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="word_count.php" title="Artikulo: Ipakita ang bilang ng mga salita" draggable="false">
				<div>Ipakita ang bilang ng mga salita<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_hlink.php" title="Artikulo: Maglagay ng mga hyperlink" draggable="false">
				<div class="active_tab">Maglagay ng mga hyperlink<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="remove_hlink.php" title="Artikulo: Magtanggal ng mga hyperlink" draggable="false">
				<div>Magtanggal ng mga hyperlink<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="add_format.php">Magpormat ng teksto &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">Maglagay ng mga hyperlink</div>
			</div>
			<div class="info">
				<p>Kusang ininilipat ng MS Word and mga <i>Web Address</i> sa <i>link</i> kapag pinindot ang <i>spacebar</i> o <i>enter</i>, kapag ikaw ay nag-type ng "http://" sa simula.</p>
			</div>
			
			<div class="col_info">
				<div class="cont">
					<p>Kung nais mong i-link galing sa <i>"friendly text"</i> sa iyong dokumento, ang pinakamabilis na paraan ay simulang kopyahin ang <i>address</i> sa <i>clipboard</i>:</p>
					<ol type="1">
						<li>Kopyahin ang <i>address</i> sa <i>address bar</i> ng iyong <i>browser</i>.</li>
						<li>Pumunta sa iyong dokumento sa MS Word, at piliin ang tekstong nais mong gawing <i>link</i>.</li>
						<li>Pindutin ang Ctr+K.</li>
						<li>I-paste o ilipat and <i>address</i> at pindutin ang <i>enter</i>.</li>
						<li>Mamaya, kung nais mong palitan ang <i>link</i>, i-right-click at piliin ang <b>Edit HyperLink</b>.</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>insert_hlink_1.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>

			<div class="col_info">
				<div class="cont">
					<p><b>Sundan ang links habang nag-i-edit.</b></p>
					<p>Habang ikaw ay nag-i-edit ng iyong dokumento, sa pag pindot ng <i>link</i> ay hinahayaan nito na mapalitan mo ang <i>display text (friendly text)</i>. Upang sundan ang <i>link</i>, pindutin ang Ctr+Click.</p>
					<div class="tip">
						<text><b>Payo:</b> Kung sa halip ay nais mong sundan ang <i>links</i> sa pagpindot sa mga ito, Magpunta sa <b>File > Options > Advanced</b> at i-clear ang <b>Use Ctr+click to follow hyperlink</b> na tsek box. 
							<br><br>
							<img src="<?= $IMG_DIR ?>insert_hlink_2.png" width="100%" draggable="false">
						</text>
					</div>
				</div>
			</div>

			<hr>

			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="remove_hlink.php" title="Suriin ang spelling, gramatika, at kalinawan" draggable="false">Magtanggal ng mga hyperlink &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>
</div>

<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>