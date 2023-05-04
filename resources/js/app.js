require('./bootstrap');

function showTime() {
    const date = new Date(),
        utc = new Date(
            date.getFullYear(),
            date.getMonth(),
            date.getDate(),
            date.getHours(),
            date.getMinutes(),
            date.getSeconds()
        );

    const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    document.getElementById('time').innerHTML = utc.toLocaleTimeString('id');
    document.getElementById('date').innerHTML = utc.toLocaleDateString('id');
    document.getElementById('day').innerHTML = weekday[date.getDay()];
}

setInterval(showTime, 1000);
