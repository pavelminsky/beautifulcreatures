<?php include ("header_include.php"); ?>
<body id="news">

<noscript><style>.dim {display: none;} .mainSlogan {display: none;} .newsList .newsbox {display: block;}</style><div style="position: absolute; width: 500px; height: 120px; z-index: 9999; top: -5px; left: 50%; margin-left: -250px;"><img src="/images/noscript.png" alt="В вашем браузере отключен JavaScript"></div></noscript>
<div class="dim">&nbsp;</div>



<div class="pagesAge noSelect">&nbsp;</div>
<div class="newsSlogan">За любовь придется<br>дорого заплатить</div>

<div class="mainWrap">
	<a class="pagesLogoLink noSelect fadeout" href="/"><img class="pagesLogo noSelect" src="/images/pagesLogo.png"><img class="pagesLogoHover noSelect" src="/images/pagesLogoHover.png"></a>
	<img class="mainBG noSelect" src="/images/ethanBG.jpg">
	<div class="mainOverlay noSelect">&nbsp;</div>
	<div class="pagesMenu mainMenu">
		<div class="menuFadeOut_l noSelect">&nbsp;</div>
		<div class="menuButtons"><a href="/" class="index fadeout">Главная</a><a href="javascript:void(0)" class="news active fadeout">Новости</a><a href="/books/" class="books fadeout">Книги</a><a href="/about/" class="about fadeout">Фильм</a><a href="/team/" class="team fadeout">Команда</a><a href="/video/" class="video fadeout">Видео</a><a href="/gallery/" class="gallery fadeout">Кадры</a></div>
		<div class="menuFadeOut_r noSelect">&nbsp;</div>
	</div>
	<div class="pagesMenuShadow noSelect">&nbsp;</div>
</div>



<div class="newsRoyal clearfix">
	<div class="newsLocket noSelect">&nbsp;</div>
	<div class="royalFadeOut_l noSelect">&nbsp;</div>

	<div class="newsContent">
		<div class="newsContent_lc">&nbsp;</div>
		<div class="newsContent_rc newsList">
			<ul>
			<?php include ("news_include.php"); ?>
			</ul>
		</div>
	</div>

	<div class="royalFadeOut_r noSelect">&nbsp;</div>
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
<script type="text/javascript" src="/js/jquery.fancybox.js?v=2.1.1"></script>
<script type="text/javascript" src="/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="/js/jquery.fancybox-media.js?v=1.0.4"></script>
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