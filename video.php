<?php include ("header_include.php"); ?>

<noscript><style>.dim {display: none;} .mainSlogan {display: none;} .newsList .newsbox {display: block;}</style><div style="position: absolute; width: 500px; height: 120px; z-index: 9999; top: -5px; left: 50%; margin-left: -250px;"><img src="images/noscript.png" alt="В вашем браузере отключен JavaScript"></div></noscript>
<div class="dim">&nbsp;</div>



<div class="pagesAge noSelect">&nbsp;</div>

<div class="mainWrap">
	<a class="pagesLogoLink noSelect fadeout" href="/"><img class="pagesLogo noSelect" src="images/pagesLogo.png"><img class="pagesLogoHover noSelect" src="images/pagesLogoHover.png"></a>
	<img class="mainBG noSelect" src="images/linkBG.jpg">
	<div class="mainOverlay noSelect">&nbsp;</div>
	<div class="pagesMenu mainMenu">
		<div class="menuFadeOut_l noSelect">&nbsp;</div>
		<div class="menuButtons"><a href="/" class="index fadeout">Главная</a><a href="javascript:void(0)" class="news disabled fadeout">Новости</a><a href="javascript:void(0)" class="books disabled fadeout">Книги</a><a href="about.php" class="about fadeout">Фильм</a><a href="javascript:void(0)" class="team disabled fadeout">Команда</a><a href="javascript:void(0)" class="video active fadeout">Видео</a><a href="gallery.php" class="gallery fadeout">Кадры</a></div>
		<div class="menuFadeOut_r noSelect">&nbsp;</div>
	</div>
	<div class="pagesMenuShadow noSelect">&nbsp;</div>
</div>



<style type="text/css">
.videoLocket {position: absolute; top: -83px; left: 71%; width: 50px; height: 170px; background-image: url('../images/mainLocket.png'); z-index: 5;}

.aboutContentWrap {position: relative; top: -100px; width: 96%; max-width: 1200px; margin: -80px auto 20px auto; z-index: 4;}

.aboutContent {float: right; width: 98%; margin: 5px auto 15px auto; text-align: center; font-size: 120%; text-shadow: 0px -1px 2px #0d293a;}
.aboutContent_lc {float: left; width: 45%; overflow: hidden; margin: 0 auto; text-align: right;}
.aboutContent_rc {float: right; width: 52%; overflow: hidden; margin: 0 auto; text-align: left;}

.aboutContent h3 {margin-top: 5px; margin-bottom: 15px; font-size: 180%; font-style: italic; color: #dcedf7; text-shadow: 0px -2px 2px #000000;}
.aboutContent p {padding: 5px 0 8px 0;}
.aboutContent .aboutContent_rc p::first-letter {font-style: bold; font-size: 140%;}
.aboutContent dl {display: block; clear: both; padding-top: 10px;}
.aboutContent dl dt {font-size: 80%; color: #9eb3bf;}
.aboutContent dl dd {font-size: 90%; padding-bottom: 10px;}
</style>


<div class="aboutContentWrap clearfix">
	<div class="videoLocket noSelect">&nbsp;</div>
	<div class="aboutContent">
		<div class="aboutContent_lc">&nbsp;</div>
		<div class="aboutContent_rc">
			<h3>Дружба иногда сбивает с толку</h3>
			<p>Итана Уэйта, считающего дни до своего бегства из Гатлина, преследуют сны о прекрасной девушке, которую он никогда не встречал. Когда красавица Лена приезжает жить в дом на самой старой и самой жуткой из всех плантаций города, Итан безоговорочно влюбляется в нее и целенаправленно старается раскрыть секрет их удивительной связи.</p>
			<p>Лена Дюкейн отличается от всех, кого когда-либо видел маленький южный город Гатлин, она борется с собой, пытаясь усмирить свою силу и проклятие, веками преследовавшее ее семью. Но даже в разросшихся садах, в мрачных болотах и на разрушенных могильниках позабытого Юга секрет не будет жить вечно.</p>
		</div>
	</div>
	<div class="aboutContent">
		<div class="aboutContent_lc">
			<p><i>Фильм основан на бестселлере Ками Гарсия и Маргарет Штоль «Прекрасные создания». Это экранизация первой книги из серии.</i></p>
			<dl>
			<dt>Beautiful Creatures; США, 2013</dt>
			<dd>Романтический триллер<br>мистика, мелодрама<br>122 мин.</dd>
			<dt>Режиссер</dt>
			<dd>Ричард ЛаГравенезе</dd>
			<dt>Сценаристы</dt>
			<dd>Ричард ЛаГравенезе, Ками Гарсиа, Маргарет Штоль</dd>
			<dt>Оператор</dt>
			<dd>Филипп Русло</dd>
			<dt>В ролях</dt>
			<dd>Олден Эренрайк, Элис Энглерт, Джереми Айронс, Виола Дэвис, Эмми Россам, Томас Манн, Эмма Томпсон, Зоя Дойч</dd>
			</dl>
		</div>
		<div class="aboutContent_rc">
			<a class="gallery_news" data-fancybox-group="about_poster" href="media/about_poster.jpg"><img src="media/about_poster_s.jpg" alt=""></a>
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