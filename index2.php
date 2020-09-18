<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/app.css">
        <title>php-ajax-dischi</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Spotify_logo_with_text.svg/200px-Spotify_logo_with_text.svg.png" alt="Logo">
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="box clearfix">
                    <?php foreach ($database as $data) { ?>
                        <div class="disc-box">
                            <img src="<?php echo $data["poster"]; ?>" alt="poster-disco">
                            <h4><?php echo $data["title"]; ?></h4>
                            <h5><?php echo $data["author"]; ?></h5>
                            <h6><?php echo $data["year"]; ?></h6>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
