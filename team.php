<?php include ("header_include.php"); ?>
<body id="about">

<noscript><style>.dim {display: none;} .mainSlogan {display: none;} .newsList .newsbox {display: block;}</style><div style="position: absolute; width: 500px; height: 120px; z-index: 9999; top: -5px; left: 50%; margin-left: -250px;"><img src="images/noscript.png" alt="В вашем браузере отключен JavaScript"></div></noscript>
<div class="dim">&nbsp;</div>



<div class="pagesAge noSelect">&nbsp;</div>
<div class="teamSlogan">Некоторые тайны<br>лучше не раскрывать</div>

<div class="mainWrap">
	<a class="pagesLogoLink noSelect fadeout" href="/"><img class="pagesLogo noSelect" src="images/pagesLogo.png"><img class="pagesLogoHover noSelect" src="images/pagesLogoHover.png"></a>
	<img class="mainBG noSelect" src="images/ammaBG.jpg">
	<div class="mainOverlay noSelect">&nbsp;</div>
	<div class="pagesMenu mainMenu">
		<div class="menuFadeOut_l noSelect">&nbsp;</div>
		<div class="menuButtons"><a href="/" class="index fadeout">Главная</a><a href="news.php" class="news fadeout">Новости</a><a href="books.php" class="books fadeout">Книги</a><a href="about.php" class="about fadeout">Фильм</a><a href="javascript:void(0)" class="team active fadeout">Команда</a><a href="video.php" class="video fadeout">Видео</a><a href="gallery.php" class="gallery fadeout">Кадры</a></div>
		<div class="menuFadeOut_r noSelect">&nbsp;</div>
	</div>
	<div class="pagesMenuShadow noSelect">&nbsp;</div>
</div>


<style type="text/css">
.teamLocket {position: absolute; top: -83px; left: 55%; width: 50px; height: 170px; background-image: url('images/mainLocket.png'); z-index: 5;}
.teamSlogan {position: absolute; top: 50px; left: 10%; z-index: 6; width: 180px; text-align: right; font-size: 130%; font-style: italic; color: #c8a0c2; text-shadow: 1px 1px 2px #000000;}
</style>

<div class="aboutContentWrap clearfix">
	<div class="teamLocket noSelect">&nbsp;</div>
	<div class="aboutContent">
		<div class="aboutContent_lc">&nbsp;</div>
		<div class="aboutContent_rc">
			<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
			<h3>Раздел готовится к открытию</h3>
			<p></p>
		</div>
	</div>
	<div class="aboutContent">
		<div class="aboutContent_lc">&nbsp;</div>
		<div class="aboutContent_rc">&nbsp;</div>
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
$('.videos_news').fancybox({
//prevEffect : 'none',
//nextEffect : 'none',
//closeBtn  : false,
arrows    : false,
nextClick : false,
helpers : {thumbs : {width  : 90, height : 50}}
});
});
</script>



</body></html>