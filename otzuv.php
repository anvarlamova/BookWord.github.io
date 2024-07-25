<!doctype html>
<html lang="en">
<head>
	<title> Book World </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
</head>
<body>
	<br> <br> <h1 ALIGN=center> Книжный мир </h1> <br> <br>
	<u1 class="menu">
		<li>
			<a href="book.html">Главная</a>
		</li>
		<li>
			<a href="katalog.html">Каталог</a>
		</li>
		<li>
			<a href="otzuv.html">Отзывы</a>
		</li>
		<li>
			<a href="profile.html">Профиль</a>
		</li>
		<li>
			<a href="contacts.html">Контакты</a>
		</li>
	</u1>
	<br> <h1 ALIGN=center> Отзывы </h1> <br>
	<div class="text1">
		<h2 ALIGIN=left> Оставьте свой отзыв на приобретённую книгу у нас ♥ </h2> 
	</div> <br> <br> <br>
	
	<main>
<form name="form1" method="post" action="test.php"><p> 
Название книги: <input type="text" name="sirname"></p><p> 
Ваш Email: <input  type="text" name="email"></p>
<p> Сообщение 
<textarea name="message"></textarea> (поле сообщения) </p>
<p><input type="submit" name="send" value="Отправить"></p>
</form>

<?php
/* Подключаемся к базе данных */
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "Varlamova");

/* Выбираем данные */
$sql="SELECT name, email, message FROM Varlamova";
$result=mysqli_query($link, $sql);

while ($line=mysqli_fetch_row($result)) {
echo "<b>Название книги:</b>".$line[0]."<br>";
echo "<b>Email:</b>".$line[1]."<br>";
echo "<b>Сообщение:</b>".$line[2]."<br><br>";
}
?>

</main>
	
		
	<link rel='stylesheet' href='styleOtz.css'>
</body>
</html>
