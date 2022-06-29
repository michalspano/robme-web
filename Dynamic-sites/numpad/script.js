var pressedNumbers = [];
const passwordLength = 2;

$(document).ready(() => {
    $('.custom-button').click(function () {
        // append the number to the array
        pressedNumbers.push($(this).text());
        if (pressedNumbers.length == passwordLength) {
            // display the password
            const password = pressedNumbers.join('');
            $('#password').text(password);
            // reload the website
            setTimeout(() => window.location.reload(), 1000);
        }
    });
});