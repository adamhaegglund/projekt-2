<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/projekt-2/css/global.css" />
		<link rel="stylesheet" href="/projekt-2/css/setlist.css" />
		<link rel="stylesheet" href="/projekt-2/css/loggedIn.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<script defer src="/projekt-2/js/loggedIn/loggedIn.js"></script>
		<title>Document</title>
	</head>
	<body>
		<div class="page-container">
		<?php include "./navbar.php";?>
			<div class="main-content-container">
				<div class="background-image">
					<img
						src="/projekt-2/static/img/setlist-background.jpg"
						alt="a hand from a crowd"
					/>
				</div>
				<div class="setlist-container-grid">
					<div class="left-page-container">
						<div class="top-rated-setlists blur-background">
							<div class="artist-title">
								TOP RATED SETLISTS <br />
								BY OUR USERS
							</div>
							<div class="top-rated-artist-container">
								<div class="artist-wrapper">
									<a href="#">
										<span class="artist">ARTIST</span>
										<span class="venue">VENUE</span>
										<span class="date">
											<img
												src="/projekt-2/static/img/svg/calendar.svg"
												alt="a calender icon"
											/>
											DATE</span
										>
									</a>
								</div>
								<div class="artist-wrapper">
									<a href="#">
										<span class="artist">ARTIST</span>
										<span class="venue">VENUE</span>
										<span class="date">
											<img
												src="/projekt-2/static/img/svg/calendar.svg"
												alt="a calender icon"
											/>
											DATE</span
										>
									</a>
								</div>
								<div class="artist-wrapper">
									<a href="#">
										<span class="artist">ARTIST</span>
										<span class="venue">VENUE</span>
										<span class="date">
											<img
												src="/projekt-2/static/img/svg/calendar.svg"
												alt="a calender icon"
											/>
											DATE</span
										>
									</a>
								</div>
								<div class="artist-wrapper">
									<a href="#">
										<span class="artist">ARTIST</span>
										<span class="venue">VENUE</span>
										<span class="date">
											<img
												src="/projekt-2/static/img/svg/calendar.svg"
												alt="a calender icon"
											/>
											DATE</span
										>
									</a>
								</div>
								<div class="artist-wrapper">
									<a href="#">
										<span class="artist">ARTIST</span>
										<span class="venue">VENUE</span>
										<span class="date">
											<img
												src="/projekt-2/static/img/svg/calendar.svg"
												alt="a calender icon"
											/>
											DATE</span
										>
									</a>
								</div>
							</div>
						</div>
						<div class="recent-edited-setlists blur-background">
							<div class="artist-title">RECENT SETS</div>
							<div class="artist-wrapper">
								<a href="#">
									<span class="artist">ARTIST</span>
									<span class="venue">VENUE</span>
									<span class="date">
										<img
											src="/projekt-2/static/img/svg/calendar.svg"
											alt="a calender icon"
										/>
										DATE</span
									>
								</a>
							</div>
							<div class="artist-wrapper">
								<a href="#">
									<span class="artist">ARTIST</span>
									<span class="venue">VENUE</span>
									<span class="date">
										<img
											src="/projekt-2/static/img/svg/calendar.svg"
											alt="a calender icon"
										/>
										DATE</span
									>
								</a>
							</div>
							<div class="artist-wrapper">
								<a href="#">
									<span class="artist">ARTIST</span>
									<span class="venue">VENUE</span>
									<span class="date">
										<img
											src="/projekt-2/static/img/svg/calendar.svg"
											alt="a calender icon"
										/>
										DATE</span
									>
								</a>
							</div>
							<div class="artist-wrapper">
								<a href="#">
									<span class="artist">ARTIST</span>
									<span class="venue">VENUE</span>
									<span class="date">
										<img
											src="/projekt-2/static/img/svg/calendar.svg"
											alt="a calender icon"
										/>
										DATE</span
									>
								</a>
							</div>
							<div class="artist-wrapper">
								<a href="#">
									<span class="artist">ARTIST</span>
									<span class="venue">VENUE</span>
									<span class="date">
										<img
											src="/projekt-2/static/img/svg/calendar.svg"
											alt="a calender icon"
										/>
										DATE</span
									>
								</a>
							</div>
						</div>
					</div>
					<div class="right-page-container">
						<input
							type="text"
							class="blur-background"
							placeholder="SEARCH SETS"
						/>
						<div class="latest-posts blur-background">
							<div class="artist-title">LATEST POSTS</div>
							<div class="post-wrapper">
								<a href="#">
									<div class="post-title-artist">
										<span class="post-title">POST</span>
										<div class="post-artist">ARTIST</div>
									</div>
									<div class="user-date">
										<span class="post-user">USER,</span>
										<span class="post-date">DATE</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
