// QR Code Scanner --------------------------------------------------------------------------------- //
const qrCodeInstance = window.qrcode;

// html specific elements
const video = document.createElement('video');
const canvasElement = document.getElementById("qr-canvas");
const canvas = canvasElement.getContext("2d");
const btnScanQR = $('#btn-scan-qr');

let scanning = false;

// we assume that the user is redirected to the url passed within the QR code
// + with a delay of `delay` second(s)
const navigateToWithDelay = (url, delay) => {
    setTimeout(() => window.location.href = url, delay);
}
// this will be called every time a QR code is decoded
qrCodeInstance.callback = (response) => {
    if (!response) return;  // catch an empty response

    // stop the video and disable the scanning
    scanning = false;
    video.srcObject.getTracks().forEach(track => track.stop());
    navigateToWithDelay(response, 1000);
};

$(btnScanQR).click(() => {
    // handle the visibility of the video and the button
    $(btnScanQR).prop('hidden', true); $(canvasElement).prop('hidden', false);

    // instantiate the permission request for the camera and send data to the callback
    navigator.mediaDevices
        .getUserMedia({ video: { facingMode: "environment" } })
        .then((stream) => {
            scanning = true; // indicate that the scanning is enabled

            // let Safari not go to fullscreen
            video.setAttribute("playsinline", true); 
            video.srcObject = stream;

            // start the frame-by-frame loop
            video.play(); tick(); scan();
        });
});
// so-called frame-by-frame loop scanning
const tick = () => {
    canvasElement.height = video.videoHeight; canvasElement.width = video.videoWidth;
    canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

    // check if scanning is enabled and if the video is playing
    scanning && requestAnimationFrame(tick);
}
// this enables the loop of continuous scanning until a QR code is decoded
const scan = ()  => {
    try { qrCodeInstance.decode(); } 
    catch (error) { setTimeout(scan, 300); }
}
