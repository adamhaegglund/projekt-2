<?php

session_start();
echo'
<div class="nav-container">
				<nav>';
					if(isset($_SESSION['id'])){
				echo'	<span class ="navlogo">	<a href="/projekt-2/routes/LoggedInPage.php">sceneSetter</a> </span> ';
					} else {
				echo'   <span class ="navlogo">	<a href="/projekt-2/routes/LoggedInPage.php">sceneSetter</a> </span> ';
					}
				echo'	<ul class="links-list">
						<li>
							<a href="/projekt-2/routes/setlist.php">setlists</a>
						</li>
						<li>
							<a href="/projekt-2/routes/lyrics.php">lyrics</a>
						</li>
						<li>
							<a href="/projekt-2/routes/forums.html">forums</a>
						</li>
					</ul>
					<div class="button-menu-container"> ';
					if(isset($_SESSION['id'])){
					echo'	<button class="user-button">Hi, ' . $_SESSION['username'] .'</button> 
						<ul class="user-dropdown">
							<li><a href="/projekt-2/routes/user-routes/profile.php">Profile</a></li>
							<li>
								<a href="/projekt-2/routes/user-routes/favoriteArtists.php"
									>Favorite Artists</a
								>
							</li>
							<li>
								<a href="/projekt-2/routes/user-routes/favoriteSets.php">Favorite Sets</a>
							</li>
							<li>
							';
								if($_SESSION['isAdmin'] == 1){
									echo '<li>
									<a href="/projekt-2/routes/adminpage.php">Admin page</a>
									</li>';
								}
						echo '<form action="/projekt-2/php/logout.php" method="POST" class="logout-form">
								<a href="/projekt-2/php/logout.php">Logout</a>
							</form>
							</li>
						</ul>';
					} else  {
						echo '<ul class="register-login-list">
						<li>
							<a href="/projekt-2/routes/LoginRegister.html">Log In / </br> Register</a>
						</li>
					</ul>';
					}


				echo '						
					</div>
				</nav>
			</div>
    ';
?>