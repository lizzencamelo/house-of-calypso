const loginModal = document.querySelector(".login-modal");
const signUpModal = document.querySelector(".signup-modal");
const loginButtons = document.querySelectorAll(".user-login-button");
const signUpButton = document.querySelector(".user-signup-button");
const closeButtons = document.querySelectorAll(".modal-close-button");

const openLoginModal = () => {
    signUpModal.style.display = "none";
    loginModal.style.display = "block";
};

const openSignUpModal = () => {
    loginModal.style.display = "none";
    signUpModal.style.display = "block";
}

const closeModal = () => {
    loginModal.style.display = "none";
    signUpModal.style.display = "none";
};

loginButtons.forEach(element => {
    element.addEventListener("click", openLoginModal);
});
signUpButton.addEventListener("click", openSignUpModal);
closeButtons.forEach(element => {
    element.addEventListener("click", closeModal);
});

document.addEventListener("keydown", event => {
    event.key === "Escape" ? closeModal() : false;
})

window.addEventListener("load", function() {
    var login_form = document.getElementById("login-form");
    login_form.addEventListener("submit", function (event) {

    });
})
