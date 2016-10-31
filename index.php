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
<div class="container-fluid">

      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-full navbar-fixed-top navbar-light bg-faded">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <div class="nav navbar-nav">
				<audio id="musicInst" controls="controls" src="media/Were_Falling.mp3"></audio>
            </div>
            <div class="nav navbar-nav navbar-right">
			  <li class="active"><a href="#">خانه</a></li>
              <li><a href="#">موزیک‌ها</a></li>
              <li><a href="#">داستان‌ها</a></li>
              <li><a href="#">جملات</a></li>
              </li>
            </div>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>



	<div class="row musicInfoSecOut"> <!-- Warpper -->
		<div class="musicInfoSecIn">
			<div class="container-fluid" style="max-width:1224px;">
				<div class="col-md-4 coverDiv">
					<div>
					<table>
						<tr>
							<td><button id="pButton" class="fa fa-play" onclick="playAudio()"></button></td>
							<td><img class="mainCover" src="img/cover.jpg" onclick="playAudio()" /></td>
							<td style="left: -30px;position: relative;">
							<div id="volume">
									<div id="Vline">
										<div id="Vhead"></div>
									</div>
								<i onclick="volumeC(+0.15)" class="fa fa-volume-up vlumeControler"></i>
								<i onclick="volumeC(-0.15)" class="fa fa-volume-down vlumeControler"></i>
							</div>
							</td>
						</tr>
						<tr>
						<td>
						</td>
							<td>
								<div id="audioplayer">
									<div id="timeline">
										<div id="playhead"></div>
									</div>
								</div>
							</td>
						</tr>
					</table>
					</div>
				</div>
				
				<div class="col-md-7">
					<h1 id="musicName">We're faling</h1>
					<h2 id="albumName">Common elemnt | Hadi Pakzad, Masih Gharavi</h2>
					<span class="label label-primary"> + </span><span class="label label-primary"> - </span><span class="label label-primary"> + </span><span class="label label-primary"> - </span>
					</br>
					s: 2004</br>
					sample: testRock</br>
					sample: testtest test</br>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="max-width:1024px;">
		
		<div class="row poemsec">
			<div class="col-md-5  playListBox">
			
				<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading2">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
						 آلبوم گورستان ایستاده 
						</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse in" role="tabpane2" aria-labelledby="heading2">
							<div class="panel-body" style="text-align:right;">
								
									<div class="list-group PlayListSongs">
									  <a href="#" class="list-group-item">
										<span class="fa">فرار آخر</span>
										<span class="en">Final Run</span>
									  </a>
									  <a href="#" class="list-group-item">
										<span class="fa">اُ منفی</span>
										<span class="en">O Negative</span>
									  </a>
									  <a href="#" class="list-group-item active">
										<span class="fa">شنود</span>
										<span class="en">Evasdrop</span>
									  </a>
									  <a href="#" class="list-group-item">
										<span class="fa">شعبده</span>
										<span class="en">Juggle</span>
									  </a>
									  <a href="#" class="list-group-item">
										<span class="fa">اعتصاب</span>
										<span class="en">Strike</span>
									  </a>
									</div>
								
								
								
							</div>
						</div>
					</div>
				</div>			
			
			</div>
			<div class="col-md-7">
			
				<div class="panel-group lyricsBox" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						  متن ترانه
						</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<p id="poem"></p>
							</div>
						</div>
					</div>
				</div>
			
		</div>
	</div>

</div> <!-- Continer end -->

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
		{ "s":"20" , "e":"30", "content":"من دارم مي‌گندم، پس چرا مي‌خندم؟" },
		{ "s":"30" , "e":"39", "content":"من دارم مي‌سوزم، چرا لب مي‌دوزم؟" },
		{ "s":"40" , "e":"49", "content":"ما داريم مي‌بينيم، پس چرا مي‌شينيم" },
		{ "s":"50" , "e":"59", "content":"ما از هم نگذشتيم، ولي دير برگشتيم" },
		{ "s":"60" , "e":"69", "content":"من از اين تاريکي، سخت دلم غمگينه" },
		{ "s":"70" , "e":"79", "content":"سخت دلم مي سوزه، خوابِ فکر سنگينه" },
		{ "s":"80" , "e":"89", "content":"روي سنگ مي خوابيم، و چقدر سنگ سرده" },
		{ "s":"90" , "e":"99", "content":"تخت ما گرم بود، اين تفاوت درده" },
		{ "s":"100" , "e":"110", "content":"اين طرف يک ميوه، اون طرف يک مَرده" },
		{ "s":"110" , "e":"120", "content":"تشنه اما ميوه رو، يک خدا له کرده" },
		{ "s":"120" , "e":"130", "content":"به تنت مي چسبم، که بفهمم هستي" },
		{ "s":"130" , "e":"140", "content":"تو نمي فهمي نه، همه ي شب مستي" },
		{ "s":"140" , "e":"150", "content":"موي سر تا گردن، بوي عطر حس کردن" },
		{ "s":"150" , "e":"160", "content":"شانه ها تا مچِ دست، کف دست ها سردن" },
		{ "s":"160" , "e":"170", "content":"ما داريم مي ميريم، چه پر از هم سيريم " },
		{ "s":"170" , "e":"180", "content":"ما داريم مي افتيم، کاش به هم مي گفتيم" },
		{ "s":"180" , "e":"190", "content":"ما داريم پرت ميشيم، سهمِ يک شرط ميشيم" },
		{ "s":"190" , "e":"200", "content":"ما داريم مي پوسيم، اما نمي بوسيم" }
		];
		
		/** Generate poems by JOSM datas, via for loop **/
		for (i = 0; i < lyric.length; i++) {
			item = '<span id="verse'+i+'" class="verse nota">' + lyric[i].content + '</span>';
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