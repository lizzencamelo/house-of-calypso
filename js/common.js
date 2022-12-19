window.addEventListener("load", function () {
    var signup_form = document.getElementById("signup-form");
    signup_form.addEventListener("submit", function (event) {
        var name = document.getElementById("full_name").value;
        console.log('signup');
        // Name validation
        var letters = /^[A-Za-z ]+$/;
        if(name.match(letters))
         {
         } else {
            alert("Invalid name.");
            return false;
         }

        var XHR = new XMLHttpRequest();
        var form_data = new FormData(signup_form);

        // On success
        XHR.addEventListener("load", signup_success);

        // On error
        XHR.addEventListener("error", on_error);

        // Set up request
        XHR.open("POST", "api/signup_submit.php");

        // Form data is sent with request
        XHR.send(form_data);

        event.preventDefault();
    });

    var login_form = document.getElementById("login-form");
    login_form.addEventListener("submit", function (event) {
        var email = document.getElementById("user-email").value;
        var XHR = new XMLHttpRequest();
        var form_data = new FormData(login_form);

        // Email Validation
        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (email.match(validRegex)) {
        } else {
            alert("Invalid email address!");
            return false;
        }

        // On success
        XHR.addEventListener("load", login_success);

        // On error
        XHR.addEventListener("error", on_error);

        // Set up request
        XHR.open("POST", "api/login_submit.php");

        // Form data is sent with request
        XHR.send(form_data);

        event.preventDefault();
    });
});

var signup_success = function (event) {
    var response = JSON.parse(event.target.responseText);
    if (response.success) {
        alert(response.message);
        window.location.href = "home.php";
    } else {
        alert(response.message);
    }
};

var login_success = function (event) {
    var response = JSON.parse(event.target.responseText);
    if (response.success) {
        location.reload();
    } else {
        alert(response.message);
    }
};

var on_error = function (event) {
    alert('Oops! Something went wrong.');
};
