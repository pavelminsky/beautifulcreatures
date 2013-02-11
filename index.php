<?php include ("header_include.php"); ?>
<body id="index">

<noscript><style>.dim {display: none;} .mainSlogan {display: none;} .newsList .newsbox {display: block;}</style><div style="position: absolute; width: 500px; height: 120px; z-index: 9999; top: -5px; left: 50%; margin-left: -250px;"><img src="/images/noscript.png" alt="В вашем браузере отключен JavaScript"></div></noscript>
<div class="dim">&nbsp;</div>



<div class="mainWrap">
	<img class="mainSlogan noSelect" src="/images/mainSlogan.png">
	<img class="mainLogo noSelect" src="/images/mainLogo.png">
	<img class="mainCast noSelect" src="/images/mainCast.png">
	<img class="mainBG noSelect" src="/images/mainBG.jpg">
	<div class="mainOverlay noSelect">&nbsp;</div>
	<div class="indexMenu mainMenu">
		<div class="menuFadeOut_l noSelect">&nbsp;</div>
		<div class="menuButtons"><a href="/" class="index active fadeout">Главная</a><a href="/news/" class="news fadeout">Новости</a><a href="/books/" class="books fadeout">Книги</a><a href="/about/" class="about fadeout">Фильм</a><a href="/team/" class="team fadeout">Команда</a><a href="/video/" class="video fadeout">Видео</a><a href="/gallery/" class="gallery fadeout">Кадры</a></div>
		<div class="menuFadeOut_r noSelect">&nbsp;</div>
	</div>
</div>



<div class="mainRoyal clearfix">
	<div class="mainLocket noSelect">&nbsp;</div>
	<div class="royalFadeOut_l noSelect">&nbsp;</div>

	<div class="mainContent">
		<div class="mainContent_lc">
			<img class="date noSelect" src="/images/mainDate.png"><br>
			<img class="age noSelect" src="/images/age.png">
		</div>
		<div class="mainContent_rc newsList">
			<!--h3>Новости</h3-->
			<ul>
			<?php include ("news_include.php"); ?>
			</ul>
			<p class="newsMore"><a href="/news/" class="fadeout">Все новости</a> &rarr;</p>
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
'margin' : 50,
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