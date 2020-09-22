<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <link rel="stylesheet" href="dist/app.css">
        <title>php-ajax-dischi</title>
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <div class="container clearfix">
                <div class="logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Spotify_logo_with_text.svg/200px-Spotify_logo_with_text.svg.png" alt="Logo">
                </div>
                <div class="select-box">
                    <select id="select-artist" name="author">
                        <option value="">All</option>
                    </select>
                </div>
            </div>
        </header>
        <!-- MAIN -->
        <main>
            <div id="disc-container" class="container">
                <div id="box" class="box clearfix">

                </div>
            </div>
        </main>
        <!-- FOOTER -->
        <footer>
        </footer>
        <!-- SCRIPT Handlebars -->
        <script id="entry-template" type="text/x-handlebars-template">
            <div class="disc-box">
                <img src="{{{poster}}}" alt="poster-disco">
                <h4>{{title}}</h4>
                <h5>{{author}}</h5>
                <h6>{{year}}</h6>
            </div>
        </script>

        <script id="xx" type="text/x-handlebars-template">
            <option value="{{author}}">{{author}}</option>
        </script>

        <script src="dist/app.js" charset="utf-8"></script>
    </body>
</html>
