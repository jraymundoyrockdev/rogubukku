$('document').ready(function () {

    $('#fourOFour').click(function (event) {
        event.preventDefault();
        history.back(1);
    });

    $('.tableIcon tr').hover(function () {
        $(this).find('td:last > a').css('color', '#eee');
        $(this).find('td:last > span > a').css('color', '#eee');
    }, function () {
        $(this).find('td:last > a').css('color', '#4fa7ef');
        $(this).find('td:last > span > a').css('color', '#4fa7ef');
    });


});