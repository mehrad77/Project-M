
/** Player UI things **/
var m = document.getElementById('musicInst'); // id for audio element
var duration; // Duration of audio clip
var pButton = document.getElementById('pButton'); // play button

var playhead = document.getElementById('playhead'); // playhead
var timeline = document.getElementById('timeline'); // timeline
// timeline width adjusted for playhead
var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;

// timeupdate event listener
m.addEventListener("timeupdate", timeUpdate, false);

//Makes timeline clickable
timeline.addEventListener("click", function (event) {
	moveplayhead(event);
	m.currentTime = duration * clickPercent(event);
}, false);

// returns click as decimal (.77) of the total timelineWidth
function clickPercent(e) {
	return (e.pageX - timeline.offsetLeft) / timelineWidth;
}

// Makes playhead draggable 
playhead.addEventListener('mousedown', mouseDown, false);
window.addEventListener('mouseup', mouseUp, false);

// Boolean value so that mouse is moved on mouseUp only when the playhead is released 
var onplayhead = false;
// mouseDown EventListener
function mouseDown() {
	onplayhead = true;
	window.addEventListener('mousemove', moveplayhead, true);
	m.removeEventListener('timeupdate', timeUpdate, false);
}
// mouseUp EventListener
// getting input from all mouse clicks
function mouseUp(e) {
	if (onplayhead == true) {
		moveplayhead(e);
		window.removeEventListener('mousemove', moveplayhead, true);
		// change current time
		m.currentTime = duration * clickPercent(e);
		m.addEventListener('timeupdate', timeUpdate, false);
	}
	onplayhead = false;
}
// mousemove EventListener
// Moves playhead as user drags
function moveplayhead(e) {
	var newMargLeft = e.pageX - timeline.offsetLeft;
	if (newMargLeft >= 0 && newMargLeft <= timelineWidth) {
		playhead.style.marginLeft = newMargLeft + "px";
	}
	if (newMargLeft < 0) {
		playhead.style.marginLeft = "0px";
	}
	if (newMargLeft > timelineWidth) {
		playhead.style.marginLeft = timelineWidth + "px";
	}
}

// timeUpdate 
// Synchronizes playhead position with current point in audio 
function timeUpdate() {
	var playPercent = timelineWidth * (m.currentTime / duration);
	playhead.style.marginLeft = playPercent + "px";
	if (m.currentTime == duration) {
		pButton.className = "";
		pButton.className = "play";
	}
}

//Play and Pause
function playAudio() {
	// start music
	if (m.paused) {
		m.play();
		// remove play, add pause
		pButton.className = "";
		pButton.className = "fa-pause";
	} else { // pause music
		m.pause();
		// remove pause, add play
		pButton.className = "";
		pButton.className = "fa-play";
	}
}

// Gets audio file duration
m.addEventListener("canplaythrough", function () {
	duration = m.duration;  
}, false);



/****************************************************
************* Audio Volume Controler ****************
*****************************************************/

var Vhead = document.getElementById('Vhead');
var Vline = document.getElementById('Vline');

//Makes Volumeline clickable
m.addEventListener("volumechange", function (event) {
	Vhead.style.marginTop = 100 - m.volume * 100 + "px";
}, false);

function volumeC(inputB) {
	if (m.volume >= 0 && m.volume <= 1)
    m.volume = m.volume + inputB;
}
