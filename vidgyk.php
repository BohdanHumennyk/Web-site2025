<html>
<head>
<link rel="stylesheet" type="text/css" href="css/football.css">
<link rel="shortcut icon" href="image/ico.ico" type="image/x-icon" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script>
	  function send_data(){
		$.post("send.php", 
		
				$('#lok').serialize(), 
				function(data) {
				
					$('#zat').fadeIn("slow");
					$('#message').fadeIn("slow");
				    //positionCentre($('#message'));
					$('#close_message').click (function(data) {
					$('#message, #zat').fadeOut(300);
					
				
					})
					}
				)
	  }
</script>
<link href="css/lightbox.css" rel="stylesheet"/>
<head>
<body>
<ul class="nef">
<li><a href="index.html">Главная</a></li>
<li><a href="football2.html">Правила Игры</a></li>
<li><a href="#">Футбольные Лиги</a>
<ul>
<li><a href="football3.html">Ла Лига</a></li>
<li><a href="football4.html">Премьер Лига</a></li>
<li><a href="football5.html">Серия А</a></li>
</ul>
</li>
<li><a href="#">Лучшие Футболисты Мира</a>
<ul>
<li><a href="lionel messi.html">Лионель Месси</a></li>
<li><a href="Crishtianu Ronaldu.html">Криштиану Роналду</a></li>
<li><a href="Garet Bale.html">Гарет Бейл</a></li>
<li><a href="Eden Hazard.html">Эден Азар</a></li>
<li><a href="Zlatan Ibragimovich.html">Златан Ибрагимович</a></li>
</ul>
</li>
<li><a href="#">Лучшие Футболисты Украины</a>
<ul>
<li><a href="Iarmolenko.html">Андрей Ярмоленко</a></li>
<li><a href="Konoplianka.html">Евгений Коноплянка</a></li>
</ul>
</li>
<li><a href="galery.html">Галерея</a></li>
<li><a href="video.php">Видео</a></li>
<li><a href="vidgyk.php">Отзыв</a></li>
<li><a href="play.html">Играть в футбол</a></li>
</ul>

<form name="test" method="post" onsubmit="return false" action="input1.php" id="lok">
<Br>
  <p><b>Ваше имя:</b><br>
   <input name="rop" type="text" size="40" id="vvv">
  </p>
  <Br>
  <p><b>Как вам сайт :</b>
  <Br>
  <Br>
   <input type="radio" name="mark" value="5" id="r1"><label for="r1"> Отлично</label><Br>
   <input type="radio" name="mark" value="7" id="r2"><label for="r2"> Хорошо</label><Br>
   <input type="radio" name="mark" value="4" id="r3"><label for="r3"> Могло быть и лучше</label><Br>
  </p>
  <Br>
  <p><b>Комментарий:</b><Br>
   <textarea name="comment" cols="40" rows="3" id="ddd"></textarea></p>
  <p>
   <input type="submit" value="Отправить" id="lof" onclick ="send_data();">
   <input type="reset" value="Очистить" id="lof"></p>
 </form>
	<div id="zat">
	</div>
	<div id="message">
			<h1>Спасибо, ваше сообщение отправлено!</h1>
			<div id="close_message" > Закрыть </div>
	</div>
</body>
</html>