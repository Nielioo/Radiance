// Start of initialize
const actionButtonsElement = document.getElementById('action-buttons');
const nextButtonTemplate = document.getElementById("next-button-template");

let isAnswered = false;

function checkAnswer(isTrue, optionNumber) {
	if (!isAnswered) {
		isAnswered = true;
		
		const optionBarImageElement = document.getElementById('option-bar-image-' + optionNumber);
		const nextButton = nextButtonTemplate.content.cloneNode(true);
		const starElement = document.getElementById('star');

		if (isTrue) {
			optionBarImageElement.src = "/img/levels/ui/option_bar_true.png";
			starElement.value = "3";
		} else {
			optionBarImageElement.src = "/img/levels/ui/option_bar_false.png";
			starElement.value = "0";
		}
		optionBarImageElement.removeAttribute('onmouseover');
		optionBarImageElement.removeAttribute('onmouseout');

		actionButtonsElement.appendChild(nextButton);
	}
}