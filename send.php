<?php header('Content-Type: text/html; charset=utf-8');  ?>
<?php 
	echo "Hello, guys!";
	print_r($_POST) ;
	$a = $_POST['rop'];
	$b = $_POST['mark'];
	$c = $_POST['comment'];
	$string = "Заголовок сообщения:".$a."\n Оценка:".$b."\n Комментарий:".$c;
	mail("gymennek.bohdan@gmail.com", "My Football", $string );
?>