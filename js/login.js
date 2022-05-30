const loginFormInput = document.querySelectorAll("input");

const registerButton = document.querySelector(".register-button");
const loginButton = document.querySelector(".login-button");

const loginForm = document.querySelector(".login-container");
const registerForm = document.querySelector(".register-container");

loginFormInput.forEach((element) => {
	element.addEventListener("input", () => {
		let siblingLabel = element.parentNode.firstElementChild;

		if (element.value !== "") {
			siblingLabel.classList.add("input-filled");
		} else {
			siblingLabel.classList.remove("input-filled");
		}
	});
});

registerButton.onclick = () => {
	loginForm.classList.add("hidden");
	registerForm.classList.remove("hidden");
};
loginButton.onclick = () => {
	registerForm.classList.add("hidden");
	loginForm.classList.remove("hidden");
};
