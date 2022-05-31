<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projekt-2/css/global.css">
    <link rel="stylesheet" href="/projekt-2/css/lyricSpecific.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>lyrics</title>
</head>
<body>
    <div class="page-container">
    <?php include "./navbar.php";?>
        <div class="main-content-container">
            <div class="background-image">
                <img src="/projekt-2/static/img/lyric-specific-background.jpg" alt="a microphone with stand">
            </div>
            <div class="main-lyric-grid">
                <div class="lyric-container">
                    <h2>SONG TITLE</h2>
                    <div class="lyric-text-container">
                        HERE IS LYRICS <br>                        
                    </div>
                </div>
                <div class="artist-info-container">
                    <h2>ARTIST NAME HERE</h2>
                    <a href="#"> <img src="/projekt-2/static/img/svg/viewmore.svg" alt="an icon displaying plates">  discover sets from "artist name here"</a>
                    <a href="#"> <img src="/projekt-2/static/img/svg/lyricsicon.png" alt="an icon for lyrics">  discover lyrics from "artist name here"</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>