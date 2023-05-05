const myCarousel = document.querySelector('#myCarousel')
new bootstrap.Carousel(myCarousel, {
    interval: 2000,
    wrap: false
})

function alertTransactionSuccesfull(coffeeName) {
    alert(coffeeName + ' bought successfully! Please check your Transaction History.');

    window.setTimeout(function () {
        // Closing the alert
        window.close()
    }, 5000);
}
