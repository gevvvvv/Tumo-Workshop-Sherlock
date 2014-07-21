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
	
	<div class="o"><hr><div id="a"></a><a href="gallery.php"><img src="images/ruseye.png"></a><a href="gallery.php"><img src="images/engeye.png"></a></div><br>
    <div id="b">
   	 <div id="ba"><a href="actorseng.html">Actors</a></div>
     <div id="bb"><a href="newseng.html">News</a></div>
     <div id="bc"><a href="photoseng.html">Photos</a></div>
     <div id="bd"><a href="homeeng.html"><img src="images/hjh.png"></a></div>
     <div id="be"><a href="videoseng.html">Videos</a></div>
     <div id="bf"><a href="bookseng.html">Books</a></div> 
     <div id="bg"><a href="abouteng.html">About</a></div> 
    </div><hr></div>
    
    <div class="y"><div id="y"><hr><h4>Шерлок, весь в крови и с гарпуном в руке, приходит домой.<span style="color:#FF3366">Джон:</span>И ты в таком виде ехал в метро?!
 <span style="color:#FF3366">Шерлок:</span>Ни один таксист меня не брал!</h4><hr>
<?php
$photo_list = file('list.txt', FILE_IGNORE_NEW_LINES);

foreach ($photo_list as $item)
{
	$tokens = explode('|',$item);
	$file = $tokens[0];
	
	echo "<img src='images/1season/$file' />";
}

?>
			<hr><h4><span style="color:#FF3366">Мориарти:</span> Нельзя, чтобы ты жил дальше. Просто нельзя. Я бы попробовал тебя убедить, но все возможные доводы уже пришли в твою голову.
</h4><hr></div>
		</div>
	</body>
</html>