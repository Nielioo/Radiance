// Start of initialize
const actionButtonsElement = document.getElementById('action-buttons');
const nextButtonTemplate = document.getElementById("next-button-template");
const randomNumberElement = document.getElementById("random-number");

let isAnswered = false;

function checkAnswer(isTrue) {
	if (!isAnswered) {
		isAnswered = true;
		
		const nextButton = nextButtonTemplate.content.cloneNode(true);
		// const starElement = document.getElementById('star');

		if (isTrue) {
			// starElement.value = "3";
		} else {
			// starElement.value = "0";
		}

		actionButtonsElement.appendChild(nextButton);
	}
}

function randomNumber() {
	const randomNumber = Math.floor((Math.random() * 10) + 1);

	randomNumberElement.innerText = randomNumber;
}

