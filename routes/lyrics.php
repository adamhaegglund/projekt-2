<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/projekt-2/css/global.css" />
		<link rel="stylesheet" href="/projekt-2/css/lyrics.css" />
		<link rel="stylesheet" href="/projekt-2/css/loggedIn.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<script defer src="/projekt-2/js/loggedIn/loggedIn.js"></script>
		<script defer src="/projekt-2/js/getAPIs.js"></script>
		<title>Lyrics</title>
	</head>
	<body>
		<div class="page-container">
		<?php include "./navbar.php";?>
			</div>
			<div class="main-content-container">
				<div class="background-image">
					<img
						src="/projekt-2/static/img/lyrics-background.jpg"
						alt="a photo of a singer"
					/>
				</div>
				<div class="lyrics-main-container">
					<div class="lyrics-title">
						<p>FIND LYRICS TO YOUR FAVORITE SONG</p>
					</div>
					<div class="search-bar">
						<input
							id="search-bar-artist"
							type="text"
							name="lyricsSearch"
							placeholder="SEARCH ARTIST..."
						/>
					</div>
					<div class="search-bar">
						<input
							id="search-bar-lyrics"
							type="text"
							name="lyricsSearch"
							placeholder="SEARCH LYRICS..."
						/>
					</div>
					<button id="button-search-lyrics" class="blur-background">
						Search
					</button>
				</div>
			</div>
		</div>
	</body>
</html>
