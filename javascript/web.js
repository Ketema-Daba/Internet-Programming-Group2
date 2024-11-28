document.addEventListener("DOMContentLoaded", function () {
    // Get references to the buttons
    const signInButton = document.querySelector(".button-signin");
    const signUpButton = document.querySelector(".button-signup");

    if (signInButton) {
        signInButton.addEventListener("click", function (event) {
            event.preventDefault();
            alert(" to Sign In page...");
            setTimeout(() => {
                window.location.href = "class/login.php";
            }, 500);
        });
    } else {
        console.log("Sign In button not found.");
    }

    if (signUpButton) {
        signUpButton.addEventListener("click", function (event) {
            event.preventDefault();
            alert(" to Sign Up page...");
            setTimeout(() => {
                window.location.href = "class/index.php";
            }, 500);
        });
    } else {
        console.log("Sign Up button not found.");
    }
});
