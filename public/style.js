document.addEventListener("DOMContentLoaded", function() {
    var str = 'len'; // increment by 1 up to 1-nelemnts
    var i = 1;
    var stop = 4; // num elements

    setInterval(function() {
        if (i > stop) {
            return;
        }
        var element = document.getElementById(str + i);
        if (element) {
            element.classList.toggle('bounce');
        }
        i++;
    }, 500);
});
