<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/projekt-2/css/global.css" />
		<link rel="stylesheet" href="/projekt-2/css/favoriteartist.css" />
		<link rel="stylesheet" href="/projekt-2/css/loggedIn.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<script defer src="/projekt-2/js/loggedIn/loggedIn.js"></script>
		<title>Favorite Sets</title>
	</head>
	<body>
		<div class="page-container">
		<?php include "../navbar.php";?>
			<div class="main-content-container">
				<div class="background-image">
					<img
						src="/projekt-2/static/img/favorite-sets-background.jpg"
						alt="a guitarist playing a guitar"
					/>
				</div>
				<div class="favorite-artist-grid">
					<div class="favorite-artist-title">YOUR FAVORITE SETS</div>
					<div class="user-favorite-artists">
						<div class="favorite-artist-wrapper">
							<div class="artist-location">
								<span class="artist-name">NOISIA</span>
								<h4>GROENINGEN, NL</h4>
							</div>
							<button>
								<img src="/projekt-2/static/img/red-heart.svg" alt="a red heart" />
							</button>
						</div>
						<div class="favorite-artist-wrapper">
							<button>
								<img src="/projekt-2/static/img/red-heart.svg" alt="a red heart" />
							</button>
							<div class="artist-location artist-location-right">
								<span class="artist-name">IVY LAB</span>
								<h4>LONDON, EN</h4>
							</div>
						</div>
						<div class="pagenumber">
							<button>
								<img
									src="/projekt-2/static/img/svg/leftarrow.svg"
									alt="a arrow pointing left"
								/>
							</button>
							<span>1</span>
							<button>
								<img
									src="/projekt-2/static/img/svg/rightarrow.svg"
									alt="a arow pointing right"
								/>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
