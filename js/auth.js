// =====================
// REGISTER FORM VALIDATION
// =====================
const regForm = document.getElementById("registerForm");

if (regForm) {
    regForm.addEventListener("submit", function (e) {
        let name = document.getElementById("regName").value.trim();
        let email = document.getElementById("regEmail").value.trim();
        let pass = document.getElementById("regPassword").value.trim();

        if (name === "" || email === "" || pass === "") {
            alert("All fields are required!");
            e.preventDefault();
            return;
        }

        if (!email.includes("@") || !email.includes(".")) {
            alert("Enter a valid email address!");
            e.preventDefault();
            return;
        }

        if (pass.length < 6) {
            alert("Password must be at least 6 characters!");
            e.preventDefault();
            return;
        }
    });
}



// =====================
// LOGIN FORM VALIDATION
// =====================
const loginForm = document.getElementById("loginForm");

if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
        let email = document.getElementById("loginEmail").value.trim();
        let pass = document.getElementById("loginPassword").value.trim();

        let valid = true;

        if (email === "") {
            document.getElementById("loginEmailError").innerText = "Email is required!";
            valid = false;
        } else if (!email.includes("@") || !email.includes(".")) {
            document.getElementById("loginEmailError").innerText = "Enter a valid email!";
            valid = false;
        } else {
            document.getElementById("loginEmailError").innerText = "";
        }

        if (pass === "") {
            document.getElementById("loginPasswordError").innerText = "Password is required!";
            valid = false;
        } else {
            document.getElementById("loginPasswordError").innerText = "";
        }

        if (!valid) {
            e.preventDefault(); // stop only if error
        }
    });
}

