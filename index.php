<?php include("layouts/index_header.php"); ?>

<div class="header">
	<div>
		<div class="title" width="90%"><text>Pagsasanay sa paggamit ng MS Word</text></div><hr>
		<div class="subtitle"><text>Isang website na nagtuturo sa paggamit ng Microsoft (MS) Word sa wikang Filipino</text></div>
	</div>
</div>
<div class="navbar">
	<a href="get_started.php" title="Magsimula" draggable="false"><b>Magsimula</b></a>
	<a href="write_edit.php" title="Magsulat at mag-edit" draggable="false">Magsulat at mag-edit</a>
	<a href="format_text.php" title="Mag-pormat ng teksto" draggable="false">Magpormat ng teksto</a>
	<a href="layout_pages.php" title="Mag-layout" draggable="false">Mag-layout</a>
	<a href="insert_tpw.php" title="Larawan at tables" draggable="false">Larawan at talahanayan</a>
	<a href="save_print.php" title="Mag-save at mag-print" draggable="false">Mag-save at mag-print</a>
	<a href="share_coauthor.php"  title="Magbahagi at coauthor" draggable="false">Magbahagi at coauthor</a>
</div>
<div class="body">
	<div class="col2-flex">
		<div class="img col1">
			<img src="<?= $IMG_DIR ?>index_pic1.png" width="75%" draggable="false">
		</div>
		<div class="col1" style="padding-right: 70px;">
			<div class="head"><text>Matuto kung paano gumamit ng MS Word!</text></div>
			<div class="descrp"><text>Tutulungan kayo ng website na ito na matutunang gumamit ng MS Word at lalo pa mahasa ang kasanayan upang gumawa ng mga dokumento at iba pa!</text></div>
			<div class="navigate"><a href="get_started.php" title ="Magsimulang magsanay" draggable="false">SIMULAN ANG PAGSASANAY &rarr;</a></div>
		</div>
	</div>
	<div class="row">
		<div class="head2">Itinatampok sa mga pagsasanay</div>
		<div class="col4-flex">
			<div class="col2">
				<div>
					<img src="<?= $IMG_DIR ?>index_pic2.png" width="100%" draggable="false"v>
					<div class="text"><text>Pagsasanay sa MS Word</text></div>
					<div><text>Alamin ang mga basics o mag-explore mula sa mga pagsasanay na ito.</text></div>
				</div>
			</div>
			<div class="col2">
				<div>
					<img src="<?= $IMG_DIR ?>index_pic3.png" width="100%" draggable="false">
					<div class="text"><text>Paggamit ng Templates sa MS Word</text></div>
					<div><text>Pag-aralan ang paggamit ng Templates upang simulan ang iyong proyekto.</text></div>
				</div>
			</div>
			<div class="col2">
				<div>
					<img src="<?= $IMG_DIR ?>index_pic4.jpg" width="100%" draggable="false">
					<div class="text"><text>Tips para sa mga unang gagamit</text></div>
					<div><text>Tumuklas ng mga tips upang mas makabuti at mahasa lalo ang paggamit ng MS Word.</text></div>
				</div>
			</div>
			<div class="col2">
				<div>
					<img src="<?= $IMG_DIR ?>index_pic5.png" width="100%" draggable="false">
					<div class="text"><text>Makipag-collaborate</text></div>
					<div><text>Makipag-collaborate o makipagtulungan sa paggawa ng dokumento gamit ang MS Word</text></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col2-flex" style="padding: 0px">
		<div class="col1" style="padding-left: 70px;">
			<div class="head"><text>Makipagtulungan sa paggawa!</text></div>
			<div class="descrp"><text>Alamin kung sino ang kasama mong gumagawa ng dokumento, gayundin ang mga nagawa nilang pagbabago sa nilalaman nito. Makipag-collaborate o makipagtulungan gamit ang real-time co-authoring.</text></div>
			<div class="navigate"><a href="get_started.php" title ="Magsimulang magsanay" draggable="false">SIMULAN ANG PAGSASANAY &rarr;</a></div>
		</div>
		<div class="img col1" style="padding: 0px">
			<img src="<?= $IMG_DIR ?>index_pic6.png" width="100%" draggable="false">
		</div>
	</div>
	<div class="row">
		<div class="head2">Iba't ibang mga Pagsasanay</div>
		<div class="col4-flex">
			<div class="col2">
				<div>
					<img src="<?= $IMG_DIR ?>write_edit.png" width="100%" draggable="false"v>
					<div class="text"><text>Magsulat at Mag-edit</text></div>
					<div><text>Matuto kung paano ang pamamaraan ng pagsulat sa MS Word.</text></div>
				</div>
			</div>
			<div class="col2">
				<div>
					<img src="<?= $IMG_DIR ?>format_text.png" width="100%" draggable="false">
					<div class="text"><text>Magformat ng Text</text></div>
					<div><text>Matuto kung paano mag-format ng text sa MS Word.</text></div>
				</div>
			</div>
			<div class="col2">
				<div>
					<img src="<?= $IMG_DIR ?>layout_pages.png" width="100%" draggable="false">
					<div class="text"><text>Mag-layout</text></div>
					<div><text>Alamin ang pamamaraan ng pagli-layout ng mga pahina sa MS Word.</text></div>
				</div>
			</div>
			<div class="col2">
				<div>
					<img src="<?= $IMG_DIR ?>insert_tables.png" width="100%" draggable="false">
					<div class="text"><text>Maglagay ng talahanayan, larawan at watermark.</text></div>
					<div><text>Matuto kung paano maglalagay ng talahanayan, larawan at watermark sa MS Word.</text></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer"> 
	<text>Ang website ay nilikha ng mga mananaliksik-salin ng BSIT 1-1.</text><br>
	<text>Mula sa Politeknikong Unibersidad ng Pilipinas, Sangay ng Siyudad ng Quezon.</text><br>
</div>

<?php include("layouts/footer.php"); ?>