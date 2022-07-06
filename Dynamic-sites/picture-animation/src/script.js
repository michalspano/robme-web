// some obnoxious stock pictures...
const PICS = [
    'https://static9.depositphotos.com/1005357/1146/i/600/depositphotos_11468069-stock-photo-choking-man.jpg',
    'https://cdn.xxl.thumbs.canstockphoto.com/young-businessman-with-legs-crossed-typing-on-his-laptop-on-the-beach-stock-photograph_csp15282296.jpg'
];
var idx = 0;
const link = $('#link');
const image = $('#img-container');
const animationLength = 2500; // in ms

image.attr('src', PICS[idx]); // initial change

const changeContainerImage = () => {
    // fadeOut -> fadeIn | animation
    image.animate({ opacity: 0 }, 500, () => {
        idx = (idx + 1) % PICS.length;
        // here we change the element's attributes with jQuery
        image.attr('src', PICS[idx]); link.attr('href', PICS[idx]);
        // we setTimeout to prevent the blink between the images (due to page load)
        setTimeout(() => image.animate({ opacity: 1 }, 500), 250);
    });
}
// initial call with the interval of animationLength (ms)
changeContainerImage(); setInterval(() => changeContainerImage(), animationLength);