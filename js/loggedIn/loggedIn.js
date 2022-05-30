const userButton = document.querySelector(".user-button");
const userMenu = document.querySelector(".user-dropdown");

userButton.addEventListener("click", () => {
	if (userMenu.classList.contains("menu-open")) {
		userMenu.classList.remove("menu-open");
	} else {
		userMenu.classList.add("menu-open");
	}
});
