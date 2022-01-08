// Start of timer
const scoreElement = document.getElementById("score-bar-text");
const timerElement = document.getElementById("timer-bar-text");
const timerLabelElement = document.getElementById("timer-bar-label");

let time;

function getTimer() {
	return timerElement.innerText;
}

function setTimer() {
	let seconds = timerElement.innerText;

	time = parseInt(seconds);

	timerElement.innerText = seconds;

	if (time < 10) {
		timerElement.style.color = 'red';
		timerLabelElement.style.color = 'red';
	}

	startTimer();
}

function startTimer() {
	time--;

	const interval = setInterval(function () {
		let seconds = time;

		timerElement.innerText = seconds;
		time--;

		if (time < 10) {
			timerElement.style.color = 'red';
			timerLabelElement.style.color = 'red';
		}

		if (time < 0) {
			timerElement.innerText = 0;
			clearInterval(interval);
			// Do something after timer ends
			window.location.href = "/timeChallenges/" + scoreElement.innerText;
		}
	}, 1000);
}

// Start timer
setTimer();
// End of timer
