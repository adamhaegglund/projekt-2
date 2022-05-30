<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/projekt-2/css/global.css" />
		<link rel="stylesheet" href="/projekt-2/css/loggedIn.css" />
		<script defer src="/projekt-2/js/loggedIn/loggedIn.js"></script>
		<script src="/projekt-2/js/getAPIs.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<title>Logged In</title>
	</head>
	<body>
		<div class="page-container">
		<?php include "./navbar.php";?>
			<div class="main-content-container">
				<div class="background-image">
					<img
						src="/projekt-2/static/img/Background-loggedIn.png"
						alt="Concert with loads of people"
					/>
				</div>
				<div class="recent-uploads">
					<h2>Recent uploaded setlist</h2>
					<ul>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
					</ul>
				</div>
				<div class="recent-uploads-favorite">
					<h2>Recent uploaded setlist from your favorite artists</h2>
					<ul>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
						<li>Band</li>
					</ul>
				</div>
				<div class="search-and-latest-post">
					<div class="searchbar-container">
						<form action="#" class="search-sets">
							<input type="text" placeholder="Search sets..." />
						</form>
					</div>
					<div class="latest-posts-containter">
						<h2>LATESTS POSTS FROM YOUR FAVORITE SETS</h2>
						<ul class="latest-sets">
							<li>Band</li>
							<li>Band</li>
							<li>Band</li>
							<li>Band</li>
							<li>Band</li>
							<li>Band</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
