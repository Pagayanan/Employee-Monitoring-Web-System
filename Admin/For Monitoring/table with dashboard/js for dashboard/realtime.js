window.onload = function() {
    setInterval(function() {
        var currentDate = new Date();
        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var displayDayOfWeek = days[currentDate.getDay()];
        var displayMonth = months[currentDate.getMonth()];
        var displayDay = currentDate.getDate();
        var displayYear = currentDate.getFullYear();
        var displayTime = currentDate.toLocaleTimeString();
        document.getElementById('datetime').innerHTML = displayDayOfWeek + ", " + displayMonth + " " + displayDay + "," + displayYear + "<br> " + displayTime;
    }, 1000); // Update every 1000 milliseconds (1 second)
};

