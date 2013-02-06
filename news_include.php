<!--
1. Высота тамбнейлов для картинок должна равняться 120 пикс. Ширина значения не имеет.
2. Для картинок, которые должны открываться как одна галерея (например, фотоотчет с премьеры) должно быть указано одинаковое значение data-fancybox-group. Для удобства можно привязывать всё, включая data-fancybox-group и название файлов, к ID новости (как сейчас).
3. Текущие id новостей сейчас ни на что не влияют - можно изменить их в зависимости от технических нужд.
4. Если какую-то новость (или несколько новостей) необходимо вывести развернутой при загрузке страницы, к её телу newsbox добавляется style="display: block;"
5. Тамбнейл для ролика делается совмещением оверлея (исходник на FTP в корне: videos_news_template.psd) и картинки-кадра. Ширина тамбнейла не должна превышать 360 пикс.
6. Ролик вызывается следующим образом: на тамбнейле прописывается ссылка вида #id_контейнера. Ниже размещается div-контейнер с соответствующим id, у которого через style задаются размеры ролика и указывается display: none.
-->


<li id="newsid1">
<div class="newsdate">4 февраля</div>
<h2 class="newshd">Москву посетили &laquo;Прекрасные создания&raquo;</h2>
<div class="newsbox" style="display: block;">
<p>Исполнители ролей в фильме «Прекрасные создания» — Олден Эренрайк и Эмми Россам — заглянули на несколько дней в заснеженную Москву в рамках промо-тура фильма.</p>
<p>18 января прошёл закрытый пресс-показ, на котором аккредитованные на интервью журналисты смогли посмотреть фильм первыми. А 19 января в гостинице «Метрополь», где остановились артисты, прошел фото-колл и пресс-джанкет, на котором актёры ответили на вопросы журналистов.</p>
<p>Все остались довольны визитом: журналисты знакомством с молодыми незаурядными талантами (Эмми — прекрасная певица, работавшая на одной сцене с Хворостовским, а Олден — образованный актёр, восхищающийся Станиславским), а актёры визитом в «зимнюю сказку».</p>
<p>Олден и Эмми подписали для «Веста» промо-открытки, постеры кинофильма, а также книги «Прекрасные создания», которые мы с удовольствием предоставим для розыгрышей некоторым СМИ, а также кинотеатрам.</p>
<p>
<a class="gallery_news" data-fancybox-group="newsid1" href="media/newsid1_01.jpg"><img src="media/newsid1_01s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="media/newsid1_02.jpg"><img src="media/newsid1_02s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="media/newsid1_03.jpg"><img src="media/newsid1_03s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="media/newsid1_04.jpg"><img src="media/newsid1_04s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="media/newsid1_05.jpg"><img src="media/newsid1_05s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="media/newsid1_06.jpg"><img src="media/newsid1_06s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="media/newsid1_07.jpg"><img src="media/newsid1_07s.jpg" alt=""></a>
</p>
<div class="newsnote">Фото: Вера Фетищева</div>
</div>
</li>



<li id="newsid0">
<div class="newsdate">3 февраля</div>
<h2 class="newshd">Прекрасный русский трейлер</h2>
<div class="newsbox">
<a class="videos_news" data-fancybox-group="newsid0" href="#beautifulcreatures_russian_550"><img src="media/newsid0_01s.jpg" alt=""></a>
</p>
<div id="beautifulcreatures_russian_550" style="width: 800px; height: 332px; display: none;"><video class="video-js vjs-default-skin" controls preload="auto" width="800" height="332" poster="video/beautifulcreatures_russian_550.jpg" data-setup="{}"><source src="http://www.beautifulcreaturesmovie.ru/video/beautifulcreatures_russian_550.mp4" type='video/mp4'></video></div>
</li>


