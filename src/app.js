let $=require('jquery');

$(document).ready(function() {
    $.ajax(
        {
            url: "http://localhost/esercitazioni/giorno-65/php-ajax-dischi/server.php",
            method: "GET",
            success: function (risposta) {
                var source = $("#entry-template").html();
                var template = Handlebars.compile(source);

                for (var i = 0; i < risposta.length; i++) {
                    var context = {
                        "poster": risposta[i].poster,
                        "title": risposta[i].title,
                        "author": risposta[i].author,
                        "year": risposta[i].year

                    };
                    var html = template(context);
                    $('#box').append(html);
                }
            },
            error: function () {
                alert("E' avvenuto un errore.");
            },
        }
    );
});
