<?php 
	$article_title = "Suriin ang spelling, gramatika, at kalinawan";
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
		<a href="check_sgc.php" title="Artikulo: Maghanap at magpalit ng teksto " draggable="false">Suriin ang spelling, gramatika, at kalinawan </a>
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
				<div class="active_tab">Suriin ang spelling, gramatika, at kalinawan<br>
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
				<div class="page_title">Suriin ang spelling, gramatika, at kalinawan</div>
			</div>
			<div class="info">
				<p>Tinatama ng MS Word ang lahat ng pagkakamali para sa iyo, at kapag hindi ito naitama, makikita mo ang mga may kulay na linya na lalabas sa baba ng mga salita para maitama ang spelling, gramatika,at kalinawan.</p>
			</div>
			
			<div class="col_info">
				<div class="cont">
					<ul>
						<li>Upang itama ang kada item na nakita ng MS Word, i-right-click ang may salungguhit na salita at pag-aralan pa nang higit ang isyu. Tanggapin ang mga pagbabago na suhestyon ng Word, o huwag na lang pansinin.</li>
					</ul>
				</div>
			</div>

			<hr>

			<div class="next_article">
				<text>Susunod na artikulo:<br><a href="word_cound.php" title="Ipakita ang bilang ng mga salita" draggable="false">Ipakita ang bilang ng mga salita &rarr;</a></text>
			</div>

			<hr>
			
		</div>
	</div>
</div>
	
<?php 
	include('templates/footer.php'); 
	include('layouts/footer.php'); 
?>