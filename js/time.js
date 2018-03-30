
window.onload = function() {
    window.setInterval(setTime, 200);
}

/* Set the time */
function setTime() {
    var months = ["Január", "Február", "Március", "Április", "Május", "Június", "Július", "Augusztus", "Szeptember", "Október", "November", "December"];
    var now = new Date();
    var time =
        now.getFullYear() + ". " + months[now.getMonth()] + ". " + addZero(now.getDate()) + ". " +
        addZero(now.getHours()) + ":" + addZero(now.getMinutes()) + ":" + addZero(now.getSeconds());

    document.getElementById("time").innerHTML = "Current time: " + time;
}

/* Add zero before time if it is before ten */
function addZero(value) {
    if(value < 10) {
        return '0' + value;
    } else {
        return value;
    }
}