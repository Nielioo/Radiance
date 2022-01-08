// Get JSON file
const stageNumber = document.getElementById('stageNumber').innerText;
const levelNumber = document.getElementById('levelNumber').innerText;
const requestURL = '/storyText/storyStage' + stageNumber + 'level' + levelNumber + '.json';
let request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';

request.onreadystatechange = function () {
	if (request.readyState === 4) {
		console.log(request.status);
		if (request.status === 200) {
			console.log("Success", request.statusText);

			request.onload = function () {
				const dialogues = request.response;

				// Start of initialize
				const dialogueTextNameElement = document.getElementById('dialogue-text-name');
				const dialogueTextConversationElement = document.getElementById('dialogue-text-conversation');
				const optionBarsElement = document.getElementById('option-bars');
				const optionBarTemplate = document.getElementById("option-bar");

				let requiredOption = false;
				let nextDialogueId = 1;
				// End of initialize

				// Start of document on click listener
				document.addEventListener('click', documentClick, true);

				function documentClick() {
					// User may click anywhere when option is not needed and not end game
					if (!requiredOption && nextDialogueId > 0) {
						showDialogue(nextDialogueId);
					} else if (nextDialogueId <= 0) {
						endGame();
					}
				}

				// End of document on click listener

				// Start of game
				function startGame() {
					showDialogue(1);
				}

				function showDialogue(dialogueId) {
					// Find dialogue
					const dialogueText = dialogues.find(dialogue => dialogue.id === dialogueId);
					// Set dialogue text
					dialogueTextNameElement.innerText = dialogueText.name;
					dialogueTextConversationElement.innerText = dialogueText.text;
					// Set current dialogue ID
					nextDialogueId = dialogueText.nextDialogueId;

					// Remove all previous option
					while (optionBarsElement.firstElementChild) {
						optionBarsElement.removeChild(optionBarsElement.firstElementChild);
					}

					// Check if option is available
					if (!dialogueText.hasOwnProperty('options')) {
						requiredOption = false;
					} else {
						requiredOption = true;

						// Set options
						dialogueText.options.forEach(option => {
							// Clone the template
							const optionBar = optionBarTemplate.content.cloneNode(true);

							// Set option text
							const optionBarText = optionBar.querySelector('.option-bar-text');
							optionBarText.innerText = option.text;

							// Set option button event listener
							const optionBarButton = optionBar.querySelector('.option-bar-button');
							optionBarButton.addEventListener('click', () => selectOption(option));

							// Add option bar to options
							optionBarsElement.appendChild(optionBar);
						});
					}
				}

				function selectOption(option) {
					const nextDialogueId = option.nextDialogueId;

					if (nextDialogueId <= 0) {
						endGame();
					} else {
						showDialogue(nextDialogueId);
					}
					;
				}

				function endGame() {
					window.location.href = levelNumber + "/questions";
				}

				// End of game

				// Start the game
				startGame();
			};
		} else {
			console.log("Error", request.statusText);
			window.location.href = levelNumber + "/questions";
		}
	}
};

request.send();