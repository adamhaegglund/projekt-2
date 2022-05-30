<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/projekt-2/css/global.css" />
		<link rel="stylesheet" href="/projekt-2/css/myprofile.css" />
		<link rel="stylesheet" href="/projekt-2/css/loggedIn.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<title>profile</title>
		<script src="/projekt-2/js/myprofile.js"></script>
		<script defer src="/projekt-2/js/loggedIn/loggedIn.js"></script>
	</head>
	<body>
		<div class="page-container">
		<?php include "../navbar.php";?>
			<div class="main-content-container">
				<div class="background-image">
					<img src="/projekt-2/static/img/my-profile-background.jpg" alt="A singer" />
				</div>
				<div class="profile-section">
					<div class="profile-title">
						<h3>THIS IS YOU</h3>
					</div>
					<div class="profile-info">
						<div class="info-wrapper">
							<span class="infoname">username</span>
							<span class="infouser"> <?php print_r($_SESSION['username']) ?> </span>
							<div class="edituser">
								<button onclick="updateUsername()">
									<img src="/projekt-2/static/img/edit-pen.svg" alt="a small pen" />
									<span>edit</span>
								</button>
							</div>
							<div class="updateinfo" id="updateUsername">
								<form action="/projekt-2/php/updateUsername.php" method="POST">
									<input type="text" name="newUsername" placeholder="new username" />
									<button type="submit">update username</button>
								</form>
							</div>
						</div>						
						<div class="info-wrapper">
							<span class="infoname">email</span>
							<span class="infouser"> <?php print_r($_SESSION['mail']) ?></span>
							<div class="edituser">
								<button onclick="updateEmail()">
									<img src="/projekt-2/static/img/edit-pen.svg" alt="a small pen" />
									<span>edit</span>
								</button>
							</div>
							<div class="updateinfo" id="updateEmail">
								<form action="/projekt-2/php/updateEmail.php" method="POST">
									<input type="text" name="newEmail" placeholder="new email" />
									<button type="submit">update email</button>
								</form>								
							</div>
						</div>
						<div class="change-password-wrapper">
							<button onclick="updatePassword()">change password</button>
						</div>
						<div class="updateinfo" id="updatePassword">
							<form action="/projekt-2/php/updatePassword.php" method="POST">
								<input type="password" name="newPassword" placeholder="new password" />
								<input type="password" name="confirmPassword" placeholder="confirm password" />
								<button type="submit">update password</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	</body>
</html>
