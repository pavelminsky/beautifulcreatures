<?php include ("header_include.php"); ?>
<body id="video">

<noscript><style>.dim {display: none;} .mainSlogan {display: none;} .newsList .newsbox {display: block;}</style><div style="position: absolute; width: 500px; height: 120px; z-index: 9999; top: -5px; left: 50%; margin-left: -250px;"><img src="images/noscript.png" alt="В вашем браузере отключен JavaScript"></div></noscript>
<div class="dim">&nbsp;</div>



<div class="pagesAge noSelect">&nbsp;</div>
<div class="videoSlogan">Не сопротивляйся<br>искушению</div>

<div class="mainWrap">
	<a class="pagesLogoLink noSelect fadeout" href="/"><img class="pagesLogo noSelect" src="images/pagesLogo.png"><img class="pagesLogoHover noSelect" src="images/pagesLogoHover.png"></a>
	<img class="mainBG noSelect" src="images/ridleyBG.jpg">
	<div class="mainOverlay noSelect">&nbsp;</div>
	<div class="pagesMenu mainMenu">
		<div class="menuFadeOut_l noSelect">&nbsp;</div>
		<div class="menuButtons"><a href="/" class="index fadeout">Главная</a><a href="news.php" class="news fadeout">Новости</a><a href="books.php" class="books fadeout">Книги</a><a href="about.php" class="about fadeout">Фильм</a><a href="team.php" class="team fadeout">Команда</a><a href="javascript:void(0)" class="video active fadeout">Видео</a><a href="gallery.php" class="gallery fadeout">Кадры</a></div>
		<div class="menuFadeOut_r noSelect">&nbsp;</div>
	</div>
	<div class="pagesMenuShadow noSelect">&nbsp;</div>
</div>




<div class="videoContentWrap clearfix">
	<div class="videoLocket noSelect">&nbsp;</div>

	<div class="videoContent">
		<div class="videoContent_frl">&nbsp;</div>
		<div class="videoContent_frr">
			<h4>Первый трейлер</h4>
			<p><a class="videos_items" data-fancybox-group="beautifulcreatures_russiantrailer1_550" href="#beautifulcreatures_russiantrailer1_550"><img src="media/beautifulcreatures_russiantrailer1_550s.jpg" alt=""></a></p>
			<div id="beautifulcreatures_russiantrailer1_550" style="width: 800px; height: 332px; display: none;"><video class="video-js vjs-default-skin" controls preload="auto" width="800" height="332" poster="video/beautifulcreatures_russiantrailer1_550.jpg" data-setup="{}"><source src="http://www.beautifulcreaturesmovie.ru/video/beautifulcreatures_russiantrailer1_550.mp4" type='video/mp4'></video></div>
		</div>
	</div>

	<div class="videoContent">
		<div class="videoContent_sr">
			<h4>Второй трейлер</h4>
			<p><div id="beautifulcreatures_russiantrailer2_550" style="width: 800px; height: 332px;;"><video class="video-js vjs-default-skin" controls preload="auto" width="800" height="332" poster="video/beautifulcreatures_russiantrailer2_550.jpg" data-setup="{}"><source src="http://www.beautifulcreaturesmovie.ru/video/beautifulcreatures_russiantrailer2_550.mp4" type='video/mp4'></video></div></p>
		</div>
	</div>

	<div class="videoContent">
		<div class="videosMiscWrap">
			<h4>Ролики и отрывки</h4>			
			<p>
				<div class="videoItemWrap"><a class="videos_items" data-fancybox-group="videos_misc" href="#videos_misc1"><img src="video/videos_misc1.jpg" alt=""></a><span>Первый телеролик</span></div>
				<div class="videoItemWrap"><a class="videos_items" data-fancybox-group="videos_misc" href="#videos_misc2"><img src="video/videos_misc2.jpg" alt=""></a><span>Второй телеролик</span></div>
			</p>
			
			<div id="videos_misc1" style="width: 550px; height: 234px; display: none;"><video class="video-js vjs-default-skin" controls preload="auto" width="550" height="234" poster="video/beautifulcreatures_russiantvspot1_550.jpg" data-setup="{}"><source src="beautifulcreatures_russiantvspot1_550.mp4" type='video/mp4'></video></div>
			<div id="videos_misc2" style="width: 548px; height: 232px; display: none;"><video class="video-js vjs-default-skin" controls preload="auto" width="548" height="232" poster="video/beautifulcreatures_russiantvspot2_550.jpg" data-setup="{}"><source src="beautifulcreatures_russiantvspot2_550.mp4" type='video/mp4'></video></div>

		</div>	
	</div>

</div>





<div class="copy">&copy; 2013 &laquo;<a href="http://www.westvideo.ru">Вест Видео</a>&raquo;. Создание сайта: <a href="http://www.kg-design.ru/">КГ-Дизайн</a></div>



<div id="counters">
	<div class="counters_list">
	<p>А это наши прекрасные счетчики:</p>
	<p>
	<?php include ("counters_include.php"); ?>	
	</p>
	</div>
</div>







<!-- Fancybox -->
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.1"></script>
<script type="text/javascript" src="js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.4"></script>
<script type="text/javascript">
$(document).ready(function() {
$('.gallery_news').fancybox({
//prevEffect : 'none',
//nextEffect : 'none',
//closeBtn  : false,
//arrows    : false,
nextClick : false,
helpers : {thumbs : {width  : 50, height : 50}}
});
$('.videos_items').fancybox({
//prevEffect : 'none',
//nextEffect : 'none',
//closeBtn  : false,
arrows    : false,
nextClick : false,
'margin' : 50,
helpers : {thumbs : {width  : 90, height : 50}}
});
});
</script>



</body></html>