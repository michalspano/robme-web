// TODO: Add code to check answers to questions
// Part 1 - Multiple Options

// Define static correct answer
const answers= ['Bratislava', '2'];

// Detect loaded DOM
document.addEventListener('DOMContentLoaded', () => {

    // Section 1
    const button1 = document.getElementById('b1');
    const button2 = document.getElementById('b2');
    const button3 = document.getElementById('b3');
    const button4 = document.getElementById('b4');

    // Define click events (Section 1)
    button1.addEventListener('click', () => {
        evaluateAnswer(button1.id, check(button1.value, answers[0]), 1);
    });
    button2.addEventListener('click', () => {
        evaluateAnswer(button2.id, check(button2.value, answers[0]), 1);
    });
    button3.addEventListener('click', () => {
        evaluateAnswer(button3.id, check(button3.value, answers[0]), 1);
    });
    button4.addEventListener('click', () => {
        evaluateAnswer(button4.id, check(button4.value, answers[0]), 1);
    });

    // Section 2
    document.querySelector('form').addEventListener('submit', () => {
        let userInput = document.getElementById('field1').value;
        evaluateAnswer('field1', check(userInput, answers[1]), 2);
    });
});

// Function to check input
function check(option, answer) {
    if (option == answer) {
        return true;
    } else {
        return false;
    }
}

// Evaluate answer and change elements
function evaluateAnswer(ID, state, questionNum) {
    let newColor, status = '';
    if (state) {
        newColor = 'green';
        status = 'Correct!';
    } else {
        newColor = 'red';
        status = 'Incorrect!';
    }
    // Change color of selected button
    document.querySelector(`#${ID}`).style.backgroundColor = newColor;

    // Display output beneath
    let text = document.querySelector(`#answer${questionNum}`);
    text.innerHTML = status.italics();

    // Alert user
    console.log(status);
}
