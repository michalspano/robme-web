// Macros
const answer = '2';
const answerPrompts = ['Correct!', 'Incorrect!'];

// Declare a function to check the correctness of input value (for free form question)
const check = (value, cAnswer) => {
    if (value == cAnswer) { return true; } 
    else { return false; }
}

// Show static output
function showOutput(id, value) {
    document.querySelector(`#answer${id}`).innerHTML = value.italics().bold();

    // Show status in console
    console.log(`Log: Answer ${id}: ${value}`);
}

// Wait for DOM to be loaded
document.addEventListener("DOMContentLoaded", () => {
    // Receive correct answer from div
    let correctAnswer = document.querySelector('.correct');

    // Create 'click' event listener
    correctAnswer.addEventListener('click', () => {
        // Change BG color to green
        correctAnswer.style.backgroundColor = 'green';
        showOutput(1, answerPrompts[0]);
    });

    // Any other incorrect button is clicked
    // Store all incorrect answers (buttons) in an array
    let incorrectAnswers = document.querySelectorAll('.incorrect');

    // Iterate over the array 
    for (let i = 0; i < incorrectAnswers.length; i++) {
        incorrectAnswers[i].addEventListener('click', () => {
            incorrectAnswers[i].style.backgroundColor = 'red';

            // Show static output
            showOutput(1, answerPrompts[1]);
        });
    }

    // Parse free form question
    document.querySelector('#check').addEventListener('click', () => {

        // Link input text field
        let userInput = document.querySelector('input');

        // Check for value of text field
        if (check(userInput.value, answer)) {
            userInput.style.backgroundColor = 'green';
            showOutput(2, answerPrompts[0]);
        } else {
            userInput.style.backgroundColor = 'red';
            showOutput(2, answerPrompts[1]);
        }
    });
});                            