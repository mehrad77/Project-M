<!DOCTYPE html>
<html lang="fa">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/popcorn-complete.min.js "></script>
	<script src="js/jquery.js"></script>
</head>

<body>
	<audio id="musicInst" controls src="media/Were_Falling.mp3"></audio>
	<p id="poem">
	</p>
	<div id="footnotediv "></div>
</body>

</html>
</body>
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		var lyric = [
		{ "s":"20" , "e":"30", "content":"من دارم می گندم، پس چرا می خندم؟" },
		{ "s":"30" , "e":"39", "content":"من دارم می سوزم، چرا لب می دوزم؟" },
		{ "s":"40" , "e":"49", "content":"ما داریم می بینیم، پس چرا می شینیم" },
		{ "s":"50" , "e":"59", "content":"ما از هم نگذشتیم، ولی دیر برگشتیم" },
		{ "s":"60" , "e":"69", "content":"من از این تاریکی، سخت دلم غمگینه" },
		{ "s":"70" , "e":"79", "content":"سخت دلم می سوزه، خوابِ فکر سنگینه" },
		{ "s":"80" , "e":"89", "content":"روی سنگ می خوابیم، و چقدر سنگ سرده" },
		{ "s":"90" , "e":"99", "content":"تخت ما گرم بود، این تفاوت درده" },
		{ "s":"100" , "e":"110", "content":"این طرف یک میوه، اون طرف یک مَرده" },
		{ "s":"110" , "e":"120", "content":"تشنه اما میوه رو، یک خدا له کرده" },
		{ "s":"120" , "e":"130", "content":"به تنت می چسبم، که بفهمم هستی" },
		{ "s":"130" , "e":"140", "content":"تو نمی فهمی نه، همه ی شب مستی" },
		{ "s":"140" , "e":"150", "content":"موی سر تا گردن، بوی عطر حس کردن" },
		{ "s":"150" , "e":"160", "content":"شانه ها تا مچِ دست، کف دست ها سردن" },
		{ "s":"160" , "e":"170", "content":"ما داریم می میریم، چه پر از هم سیریم " },
		{ "s":"170" , "e":"180", "content":"ما داریم می افتیم، کاش به هم می گفتیم" },
		{ "s":"180" , "e":"190", "content":"ما داریم پرت میشیم، سهمِ یک شرط میشیم" },
		{ "s":"190" , "e":"200", "content":"ما داریم می پوسیم، اما نمی بوسیم" }
		];
		


		for (i = 0; i < lyric.length; i++) {
			item = '<span id="verse'+i+'" class="verse nota">' + lyric[i].content + '</span><br>';
			document.getElementById("poem").innerHTML = document.getElementById("poem").innerHTML + item;
		}
		var m = document.getElementById("musicInst");
		m.addEventListener( "timeupdate", function( e ) {
			<?php for ($j = 0;$j < 18;$j++){
				if ($j==0)$h = $j+1;else $h = $j-1;
				echo 'if (lyric['.$j.'].s < m.currentTime && lyric['.$j.'].e > m.currentTime){
				cs = document.getElementById("verse'.$j.'");
				bcs = document.getElementById("verse'.$h.'");
				allcs = document.getElementsByClassName("verse");
				console.log(allcs);
				bcs.classNam = "verse nota ";';
				
				for ($l = 0;$l < 18;$l++){
					echo '
						document.getElementById("verse'.$l.'").className = "verse nota ";
						';
				}
				
				echo 'cs.className = "verse bold";
				}';} 
				;
			?>
			
			<?php 

			?>
		}, false );
	});
		
		
		
	</script>
</html>