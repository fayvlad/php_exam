$(document).ready(function () {
    $('h2').each(function (i) {
       var item = i+1;
        $(this).addClass("" + item);

    });
    $('h2>a').each(function (i) {
       var num = i+1;
        var inp = $(".content");
        inp.append('<a href="#'+num+'"><p>'+$(this).text()+'</p></a>');
    });
});