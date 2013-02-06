<?php include ("header_include.php"); ?>

<noscript><style>.dim {display: none;} .mainSlogan {display: none;} .newsList .newsbox {display: block;}</style><div style="position: absolute; width: 500px; height: 120px; z-index: 9999; top: -5px; left: 50%; margin-left: -250px;"><img src="images/noscript.png" alt="В вашем браузере отключен JavaScript"></div></noscript>
<div class="dim">&nbsp;</div>



<style type="text/css">



.aboutLocket {position: absolute; top: -43px; left: 43.5%; width: 50px; height: 170px; background-image: url('images/mainLocket.png'); z-index: 5;}



.pagesLogo {position: absolute; bottom: 284px; left: 60%; width: 30%; z-index: 5; margin-left: -15%;}
.pagesLogoHover {visibility: hidden; position: absolute; bottom: 288px; left: 60%; width: 30%; z-index: 3; margin-left: -15%;}
.pagesLogoLink:hover .pagesLogoHover {visibility: visible;}

.pagesMenu {position: absolute; bottom: 220px; z-index: 3; width: 100%; margin: 0 auto; overflow: hidden;}
.pagesMenuShadow {position: absolute; bottom: 200px; z-index: 3; width: 100%; height: 20px; margin: 0 auto; background: url('images/pagesMenuShadow.png') left top repeat-x;}

.pagesContentWrap {position: relative; top: -220px; width: 96%; max-width: 1200px; min-height: 320px; margin: 0 auto; z-index: 4;}

.pagesContent {float: right; width: 98%; margin: 40px auto 20px auto; text-align: center; background-color: blue;}
.pagesContent_lc {float: left; width: 40%; overflow: hidden; margin: 0 auto; text-align: left; background-color: pink;}
.pagesContent_rc {float: right; width: 50%; overflow: hidden; margin: 0 auto; text-align: left; background-color: green;}



</style>


<div class="pagesAge noSelect">&nbsp;</div>

<div class="mainWrap">
	<a class="pagesLogoLink noSelect" href="/"><img class="pagesLogo noSelect" src="images/pagesLogo.png"><img class="pagesLogoHover noSelect" src="images/pagesLogoHover.png"></a>
	<img class="mainBG noSelect" src="images/ridleyBG.jpg">
	<div class="mainOverlay noSelect">&nbsp;</div>
	<div class="pagesMenu mainMenu">
		<div class="menuFadeOut_l noSelect">&nbsp;</div>
		<div class="menuButtons"><a href="/" class="index fadeout">Главная</a><a href="javascript:void(0)" class="news disabled fadeout">Новости</a><a href="javascript:void(0)" class="books disabled fadeout">Книги</a><a href="javascript:void(0)" class="about active">Фильм</a><a href="javascript:void(0)" class="team disabled fadeout">Команда</a><a href="javascript:void(0)" class="video disabled fadeout">Видео</a><a href="javascript:void(0)" class="gallery disabled fadeout">Кадры</a></div>
		<div class="menuFadeOut_r noSelect">&nbsp;</div>
	</div>
	<div class="pagesMenuShadow noSelect">&nbsp;</div>
</div>


<div class="pagesContentWrap clearfix">
	<div class="aboutLocket noSelect">&nbsp;</div>
	<div class="pagesContent">
		<div class="pagesContent_lc">lc</div>
		<div class="pagesContent_rc">rc</div>
	</div>
</div>





<div class="copy">&copy; 2013 &laquo;<a href="http://www.westvideo.ru">Вест Видео</a>&raquo;. Создание сайта: <a href="http://www.kg-design.ru/">КГ-Дизайн</a></div>



<div id="counters">
	<div class="counters_list">
	<p>А это наши прекрасные счетчики:</p>
	<p>
	<?php //include ("counters_include.php"); ?>	
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