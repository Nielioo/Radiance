// Start of initialize
// const actionButtonsElement = document.getElementById('action-buttons');
// const nextButtonTemplate = document.getElementById("next-button-template");
// const randomNumberElement = document.getElementById("random-number");

// let isAnswered = false;

// function checkAnswer(isTrue, optionNumber) {
// 	if (!isAnswered) {
// 		isAnswered = true;

// 		const optionBarImageElement = document.getElementById('option-bar-image-' + optionNumber);
// 		const nextButton = nextButtonTemplate.content.cloneNode(true);

// 		if (isTrue) {
// 			optionBarImageElement.src = "/img/levels/ui/option_bar_true.png";
// 			addScore();
// 		} else {
// 			optionBarImageElement.src = "/img/levels/ui/option_bar_false.png";
// 			substractScore();
// 		}
// 		optionBarImageElement.removeAttribute('onmouseover');
// 		optionBarImageElement.removeAttribute('onmouseout');

// 		actionButtonsElement.appendChild(nextButton);
// 	}
// }

// function randomNumber() {
// 	const randomNumber = Math.floor((Math.random() * 10) + 1);

// 	randomNumberElement.innerText = randomNumber;
// }

// Start of score
// const scoreElement = document.getElementById('score-bar-text');

// function addScore() {
// 	scoreElement.innerText = parseInt(scoreElement.innerText) + 10;
// }

// function substractScore() {
// 	scoreElement.innerText = parseInt(scoreElement.innerText) - 10;
// }
// End of score

// Start of timer
const scoreElement = document.getElementById("score-bar-text");
const timerElement = document.getElementById("timer-bar-text");

let time;

function getTimer() {
	return timerElement.innerText;
}

function setTimer() {
	let seconds = timerElement.innerText;

	time = parseInt(seconds);

	timerElement.innerText = seconds;

	startTimer();
}

function startTimer() {
	time--;

	const interval = setInterval(function () {
		let seconds = time;
		
		timerElement.innerText = seconds;
		time--;

		if (time < 9) {
			timerElement.style.color = 'red';
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