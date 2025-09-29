<html>
<head>
<link rel="stylesheet" type="text/css" href="css/football.css">
<link rel="shortcut icon" href="image/ico.ico" type="image/x-icon" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/lightbox.min.js"></script>
<link href="css/lightbox.css" rel="stylesheet"/>
<script type="text/javascript" src="js/jqueryrotate.2.1.js"></script>
<script>
	  function open_dialog(){
		// Відображає затемнення (змінює display:none на display:block)
		$('#zat').fadeIn("slow");
		// Відображає діалог
		$('#message').fadeIn("slow");
		// Прикрепляет обработчик на кнопку Закрыть, который закрывает диалог
		$('#close_message').click(
		function(data) {
					$('#message, #zat').fadeOut(300);
					
				
					});
	  
		/*$.post("send.php", 
		
				$('#lok').serialize(), 
				function(data) {
				
					
					}
				) */
	  }
</script>
</head>
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
<div id="buk">
<button id="byk" onclick="open_dialog()">Добавить</button>
</div>

<?php 
	// Попытка установить соединение с MySQL:
	if (!mysql_connect('localhost', 'root', '')) {
		echo "Ошибка подключения к серверу MySQL";
		exit;
	}
	// Соединились, теперь выбираем базу данных:
	mysql_select_db('football');
	mysql_query("SET NAMES 'utf8'");
	//print_r($_POST);
	if (!empty($_POST['youtube'])){
		mysql_query("INSERT INTO  `football`.`youtube` ( `id` , `url`) VALUES (NULL,  '".$_POST['youtube']."')");
	
	}
// 
	$result = mysql_query("SELECT * FROM `youtube`");
	
	while($row = mysql_fetch_assoc($result)) { ?>
	
		<div class="losi">
		<iframe width="560" height="315" src="<?php echo $row['url'];	 ?>" frameborder="0" allowfullscreen></iframe>
		</div>
<?php
		
		//print_r($row);
	}
?>

<div class="losi">
<iframe width="560" height="315" src="//www.youtube.com/embed/8rRDgYfKv2I?list=UUuO013RBLtt-zZg-lj-qMTw" frameborder="0" allowfullscreen></iframe>
</div>
<div class="losi">
<iframe width="560" height="315" src="//www.youtube.com/embed/ziMXnLWomLM" frameborder="0" allowfullscreen></iframe>
</div>
<div class="losi">
<iframe width="560" height="315" src="//www.youtube.com/embed/6FkBhLVwDGc" frameborder="0" allowfullscreen></iframe>
</div>
<div class="losi">
<iframe width="560" height="315" src="//www.youtube.com/embed/JVhZGTk5SN4" frameborder="0" allowfullscreen></iframe>
</div>
<div class="losi">
<iframe width="560" height="315" src="//www.youtube.com/embed/AVGk2DyGN-c" frameborder="0" allowfullscreen></iframe>
</div>
<div class="losi">
<iframe width="560" height="315" src="//www.youtube.com/embed/bkV_OUyrTuA" frameborder="0" allowfullscreen></iframe>
</div>

	<div id="zat">
	</div>
	<div id="message">
			<form action="video.php" method="POST">
			<h1>Введите адрес видео в Youtube:</h1>
			<input  name="youtube" type="text"  />
			<div id="plomba">
			<div id="close_message" > Закрыть </div>
			<input type="submit" value = "Отправить" />
			</form>
	</div>
	</div>
	</body>
</html>