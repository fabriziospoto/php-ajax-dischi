let $=require('jquery');

$(document).ready(function() {
    getData()

    $(document).on('change','#select-artist', function(){
        var thisAuthor = $(this).val();
        filterData(thisAuthor);
    });
});

function filterData(autore){
    $.ajax(
        {
            url: "http://localhost/esercitazioni/giorno-65/php-ajax-dischi/server.php",
            method: "GET",
            data: {
                author: autore
            },
            success: function(risposta){
                $('#box').html('');
                printData(risposta);
            },
            error: function() {
                alert('Errore');
            }
        }
    );
}

function getData() {
    $.ajax(
        {
            url: "http://localhost/esercitazioni/giorno-65/php-ajax-dischi/server.php",
            method: "GET",
            success: function(risposta) {
                printData(risposta);
                printSelect(risposta);

            },
            error: function () {
                alert("E' avvenuto un errore.");
            },
        }
    );
}

function printData(data){
    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);
    for (var i = 0; i < data.length; i++) {
        var context = {
            "poster": data[i].poster,
            "title": data[i].title,
            "author": data[i].author,
            "year": data[i].year

        };
        var html = template(context);
        $('#box').append(html);
    }
}

function printSelect(data){
    var source = $("#xx").html();
    var template = Handlebars.compile(source);

    var arrayAuthor = [];

    for (var i = 0; i < data.length; i++) {
        if (!arrayAuthor.includes(data[i].author)) {
            arrayAuthor.push(data[i].author);
            var context = {
                author: data[i].author
            }
            var html = template(context);
            $('#select-artist').append(html);
        }
    }
}
