<!DOCTYPE HTML>
<html>
<head>
	<style>

	</style>
<meta charset="utf-8">
<title>Photos SH</title>
<link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	
	<div class="o"><hr><div id="a"></a><a href="gallery1.php"><img src="images/ruseye.png"></a><a href="gallery1.php"><img src="images/engeye.png"></a></div><br>
    <div id="b">
   	 <div id="ba"><a href="actorseng.html">Actors</a></div>
     <div id="bb"><a href="newseng.html">News</a></div>
     <div id="bc"><a href="photoseng.html">Photos</a></div>
     <div id="bd"><a href="homeeng.html"><img src="images/hjh.png"></a></div>
     <div id="be"><a href="videoseng.html">Videos</a></div>
     <div id="bf"><a href="bookseng.html">Books</a></div> 
     <div id="bg"><a href="abouteng.html">About</a></div> 
    </div><hr></div>
    
    <div class="y"><div id="y"><hr><h4><span style="color:#FF3366">Джон:</span> О, слушай, может, наконец обойдешься без этого?<span style="color:#FF3366">Шерлок:</span> То есть?<span style="color:#FF3366">Джон:</span> Я о твоем обыкновении загадочно двигать скулами и поднимать воротник пальто. Ты и без этого крут.<span style="color:#FF3366">Шерлок:</span> Я… я, я так не делаю!<span style="color:#FF3366">Джон:</span> Делаешь.</h4><hr>
<?php
$photo_list = file('list1.txt', FILE_IGNORE_NEW_LINES);

foreach ($photo_list as $item)
{
	$tokens = explode('|',$item);
	$file = $tokens[0];
	
	echo "<img src='images/2season/$file' />";
}

?>
<hr><h4><span style="color:#FF3366">Ватсон:</span> Когда это мы договорились?<span style="color:#FF3366">Шерлок:</span> Вчера вечером. Стоп! Ближе.<span style="color:#FF3366">Ватсон:</span> Меня не было дома вчера. Я был в Дублине.<span style="color:#FF3366">Шерлок:</span> Не моя вина, что ты не слушал</h4><hr>
		</div></div>
	</body>
</html>

