<?php 
	$article_title = "Ipakita ang bilang ng mga salita";
	include('layouts/pages_header.php'); 
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
		<a href="word_count.php" title="Artikulo: Maghanap at magpalit ng teksto " draggable="false">Ipakita ang bilang ng mga salita</a>
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
				<div class="active_tab">Ipakita ang bilang ng mga salita<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="insert_hlink.php" title="Artikulo: Maglagay ng mga hyperlink" draggable="false">
				<div>Maglagay ng mga hyperlink<br>
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
				<div class="page_title">Ipakita ang bilang ng mga salita</div>
			</div>
			<div class="info">
				<p>Binibilang ng MS Word ang dami ng mga salita sa isang dokumento habang ikaw ay nagta-type. Binibilang din nito ang pahina, taludtod, linya, at mga karakter.</p>
			</div>
			
			<div class="col_info">
				<div class="cont">
					<p>Kapag kailangan mong alamin kung gaano karami ang salita, pahina, karakter, taludtod, o linya ang nakapaloob sa isang dokumento, tignan ang <i>status bar</i>.</p>
					<center><img src="<?= $IMG_DIR ?>word_count_1.png" style="width: 75%" draggable="false"></center>
					<p>Para sa iilang pagbilang ng salita, piliin ang mga salita na nais mong bilangin. Ipapakita ng <i>status bar</i> ang bilang ng mga salita sa partikular na seleksyon at pati na rin sa buong dokumento.</p>
					<center><img src="<?= $IMG_DIR ?>word_count_2.png" style="width: 75%" draggable="false"></center>
					<div class="tip">
						<text><b>Payo:</b> Hanapin ang dami ng karakter, taludtod, at linya sa pamamagitan ng pag pindot sa bilang ng salita sa status bar.</text>
						<br><br>
						<center><img src="<?= $IMG_DIR ?>word_count_3.png" style="width: 75%" draggable="false"></center>
					</div>
				</div>
			</div>

			<hr>

			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="insert_hlink.php" title="Maglagay ng mga hyperlink" draggable="false">Maglagay ng mga hyperlink &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>

	<br>

</div>
<span>&rarr;</span>

