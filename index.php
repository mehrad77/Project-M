<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<!DOCTYPE html>
<html lang="fa">

<head>
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
	<title>Hadi pakzad</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="row musicInfoSecOut"> <!-- Warpper -->
	<div class="musicInfoSecIn">
	
		<div class="col-md-4 coverDiv">
			<div>
				<img class="mainCover" src="img/cover.jpg" />
				<div id="audioplayer">
					<button id="pButton" class="fa fa-play" onclick="playAudio()"></button>
					<div id="timeline">
						<div id="playhead"></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-8">
			<h1 id="musicName">We're faling</h1>
			<h2 id="albumName">Common elemnt | Hadi Pakzad, Masih Gharavi</h2>
			<span class="label label-primary"> + </span><span class="label label-primary"> - </span><span class="label label-primary"> + </span><span class="label label-primary"> - </span>
			</br>
			sample: 2004 </br>
			sample: testRock </br>
			sample: testtest test </br>
		</div>
	</div>
</div>

	<p id="poem"></p>
	<div id="footnotediv "></div>
	<audio id="musicInst" controls="controls" src="media/Were_Falling.mp3">
	</audio>
</body>

	<script src="js/jquery.js"></script>
	<script src="js/popcorn-complete.min.js "></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
	document.addEventListener('DOMContentLoaded', function () { /** wait for DOM to load **/
	
		/** setting up lyric JSON array in a tamplate
		"s" means "Start second"
		"e" means "end second"
		"content" means the content of a Specific time, verse
		**/
		var lyric = [
		{ "s":"20" , "e":"30", "content":"من دارم می گندم، پس چرا م ی خندم؟" },
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
		

		/** Generate poems by JOSM datas, via for loop **/
		for (i = 0; i < lyric.length; i++) {
			item = '<span id="verse'+i+'" class="verse nota">' + lyric[i].content + '</span><br>';
			document.getElementById("poem").innerHTML = document.getElementById("poem").innerHTML + item;
		}
		
		
		var m = document.getElementById("musicInst");
		var pButton = document.getElementById("pButton");
		
			function playAudio() {
				if (m.paused) {
					m.play();
					pButton.className = "";
					pButton.className = "pause";
				} else { 
					m.pause();
					pButton.className = "";
					pButton.className = "play";
				}
			}
		
		m.addEventListener( "timeupdate", function( e ) { /** Music player time update event
		Generate Javascript code for every verse via PHP 
		(Adding Bold class for Active verse and remove that in INAZCTIVE verses**/
			<?php for ($j = 0;$j < 18;$j++){
				if ($j==0)$h = $j+1;else $h = $j-1;
				echo 'if (lyric['.$j.'].s < m.currentTime && lyric['.$j.'].e > m.currentTime){
				cs = document.getElementById("verse'.$j.'");
				bcs = document.getElementById("verse'.$h.'");
				allcs = document.getElementsByClassName("verse");
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
		}, false );
	});
	</script>

		
		
	
</html>