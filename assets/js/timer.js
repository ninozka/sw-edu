var timer = new Timer();
    timer.start();
    timer.addEventListener('secondsUpdated', function (e) {
    $('#timerId').html(timer.getTimeValues().toString());
});