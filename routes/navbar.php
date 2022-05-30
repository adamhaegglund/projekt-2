<?php

session_start();
echo'
<div class="nav-container">
				<nav>
					<h1>sceneSetter</h1>
					<ul class="links-list">
						<li>
							<a href="/projekt-2/routes/setlist.html">setlists</a>
						</li>
						<li>
							<a href="/projekt-2/routes/lyrics.html">lyrics</a>
						</li>
						<li>
							<a href="/projekt-2/routes/forums.html">forums</a>
						</li>
					</ul>
					<div class="button-menu-container">
						<button class="user-button">Hi, ' . $_SESSION['username'] .'</button> 
						<ul class="user-dropdown">
							<li><a href="/projekt-2/routes/user-routes/profile.php">Profile</a></li>
							<li>
								<a href="/projekt-2/routes/user-routes/favoriteArtists.html"
									>Favorite Artists</a
								>
							</li>
							<li>
								<a href="/projekt-2/routes/user-routes/favoriteSets.html">Favorite Sets</a>
							</li>
							<li>
							';
								if($_SESSION['isAdmin'] == 1){
									echo '<li>
									<a href="/projekt-2/routes/adminpage.html">Admin page</a>
									</li>';
								}
						echo '<form action="/projekt-2/php/logout.php" method="POST" class="logout-form">
								<a href="/projekt-2/php/logout.php">Logout</a>
							</form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
    ';
?>