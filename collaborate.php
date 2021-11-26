<?php 
	$article_title = "Makipagtulungan";
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
		<a href="collaborate.php" title="Artikulo: Makipagtulungan" draggable="false">Makipagtulungan</a>
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
				<div>I-save ang dokumento sa OneDrive<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>
			<a href="design_edit.php" title="Artikulo: Magdisenyo at mag-edit" draggable="false">
				<div>Magdisenyo at mag-edit<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div
				></a>
			<a href="collaborate.php" title="Artikulo: Makipag-collaborate (Makipagtulungan)" draggable="false">
				<div class="active_tab">Makipagtulungan sa paggawa<br>
					<img src="<?= $IMG_DIR ?>icon.png" height="16px" style="margin-right: 10px">
					<text class="article">Artikulo</text>
				</div>
			</a>

			<div class="next_topic">Susunod na paksa:<br>
				<a href="what_word.php">Introduksyon sa MS Word &rarr;</a>
			</div>
		</div>
		<div class="page_content">
			<div class="body_head">
				<div class="page_title">Makipagtulungan sa paggawa</div>
			</div>

			<div class="col_info">
				<div class="cont">
					<p><b>Ibahagi ang iyong dokumento</b></p>
					<p>Upang maibahagi ang isang file sa MS Word:</p>
					<ol type="1">
						<li>Piliin ang <b>Share</b> sa ribbon.<br><br>O piliin ang <b>File > Share</b>.</li>
						<div class="tip">
							<text><b>Tandaan:</b> Kung ang iyong file ay hindi pa naka-save sa <i>OneDrive</i>, ikaw ay uudyukan na i-upload ang iyong file sa <i>OneDrive</i> upang maibahagi ito</text>
						</div>
						<li>Piliin kung kanino mo na nais ibahagi sa drop-down menu, o i-enter ang kanilang pangalan o email address.</li>
						<li>Lagyan ng mensahe (ito ay opsyonal) at piliin ang <b>Send</b>.</li>
					</ol>
				</div>
				<div class="img">
					<center><img src="<?= $IMG_DIR ?>collaborate_1.png" width="100%" style="width: 50%" draggable="false"></center>
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Maki-edit ng dokumento</b></p>
					<p>Pagkatapos mong ibahagi ang iyong dokumento, pwede mo na itong gawin kasama ng iba.</p>
					<ol type="1">
						<li>Para sa pinakamagandang karansan, makibahagi sa MS Word Online upang Makita ang real-time changes</li>
						<li>Sa ilalim ng <b>Share</b>, makikita ang mga pangalan ng iba pang nag-edit ng file</li>
						<li>Mga makukulay na bandila ay ipinapakita kung aling parte ang ginagawa ng bawat isa sa dokumento</li>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>collaborate_2.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="col_info">
				<div class="cont">
					<p><b>Bantayan at suriin ang nagawang pagbabago</b></p>
					<ol type="1">
						<li>Upang mabantayan ang mga pagbabago, piliin ang <b>Review > Track Changes</b>.</li>
						<li>Upang masuri ang mga pagbabago, ilagay ang cursor sa parting binago at pumili sa:</li>
						<ol type="a">
							<li><b>Accept</b> – Upang panatilihin ang pagbabago, o</li>
							<li><b>Reject</b> – Upang tangalin ito</li>
						</ol>
					</ol>
				</div>
				<div class="img">
					<img src="<?= $IMG_DIR ?>collaborate_3.png" width="100%" draggable="false">
				</div>
			</div>

			<hr>
			
			<div class="next_article">
				<text>Susunod na paksa:<br><a href="what_word.php" title="Makipagtulungan" draggable="false">Introduksyon sa MS Word &rarr;</a></text>
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