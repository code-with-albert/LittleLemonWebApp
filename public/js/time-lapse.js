//converts the date to time-lapsed

var timecards = document.getElementsByClassName("timecard");
for (var i = 0; i < timecards.length; i++) {
    var currentTime = new Date();
    var currentTimeOffset = currentTime.getTimezoneOffset() / 60;
    var myTime = new Date(timecards[i].innerText);
    myTime.setHours(myTime.getHours() - currentTimeOffset);
    var secondLapse = Math.floor((currentTime - myTime) / 1000);
    var minuteLapse = Math.floor((currentTime - myTime) / (60 * 1000));
    var hourLapse = Math.floor((currentTime - myTime) / (60 * 60 * 1000));
    var dayLapse = Math.floor((currentTime - myTime) / (24 * 60 * 60 * 1000));
    var monthLapse = Math.floor(currentTime.getMonth() - myTime.getMonth());
    var yearLapse = Math.floor(currentTime.getYear() - myTime.getYear());
    if (yearLapse && monthLapse) {
        timecards[i].innerText = "Posted " + yearLapse + " year(s) and " + monthLapse + " month(s) ago";
    } else if (yearLapse && !monthLapse) {
        timecards[i].innerText = "Posted " + yearLapse + " year(s) ago";
    } else if (monthLapse) {
        timecards[i].innerText = "Posted " + monthLapse + " month(s) ago";
    } else if (dayLapse) {
        timecards[i].innerText = "Posted " + dayLapse + " day(s) ago";
    } else if (hourLapse) {
        timecards[i].innerText = "Posted " + hourLapse + " hour(s) ago";
    } else if (minuteLapse) {
        timecards[i].innerText = "Posted " + minuteLapse + " minute(s) ago";
    } else {
        timecards[i].innerText = "Posted " + secondLapse + " second(s) ago";
    }
};