// Dynamic functionality
document.querySelector('select').addEventListener('change', function (event) {
    // Change the size of the text to the selected value
    document.querySelector('body').style.fontSize = this.value;

    // Show current state in console
    console.log(`Current size: ${this.value}`);
});