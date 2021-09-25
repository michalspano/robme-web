// Make all elements blink (from body)
let timeDelay = 750;

function elementBlink() {
    // Get HTML body
    let siteBody = document.querySelector('body');
    let visibilityState = siteBody.style.visibility;
    let status = '';

    // Check for visibility options
    if (visibilityState == 'hidden') {
        visibilityState = 'visible';
        status = 'ON';
    }
    else {
        visibilityState = 'hidden';
        status = 'OFF';
    }

    // Parse status
    siteBody.style.visibility = visibilityState;

    // Show state in console
    console.log(`Log: ${status}`);
}

// Call in a loop
window.setInterval(elementBlink, timeDelay);