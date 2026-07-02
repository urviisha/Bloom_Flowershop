// =============================
// STICKY HEADER ON SCROLL
// =============================
window.addEventListener("scroll", function () {
    let header = document.querySelector(".header");
    header.classList.toggle("sticky", window.scrollY > 50);
});


// =============================
// NAVBAR SCROLL SMOOTH
// =============================
document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener("click", function (e) {
        let target = document.querySelector(this.getAttribute("href"));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: "smooth" });
        }
    });
});


// =============================
// ADD TO CART
// =============================
document.querySelectorAll(".cart-btn").forEach(btn => {
    btn.addEventListener("click", function (e) {
        e.preventDefault();
        alert("Item added to cart!");
    });
});


// =============================
// ADD TO WISHLIST
// =============================
document.querySelectorAll(".fa-heart").forEach(icon => {
    icon.addEventListener("click", function (e) {
        e.preventDefault();
        alert("Added to Wishlist ❤️");
    });
});


// =============================
// CONTACT FORM VALIDATION
// =============================
const contactForm = document.querySelector(".contact form");

if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
        let name = contactForm.querySelector("input[type=text]").value.trim();
        let email = contactForm.querySelector("input[type=email]").value.trim();
        let phone = contactForm.querySelector("input[type=number]").value.trim();
        let msg = contactForm.querySelector("textarea").value.trim();

        if (name === "" || email === "" || phone === "" || msg === "") {
            alert("Please fill all fields.");
            e.preventDefault();
            return;
        }

        if (!email.includes("@") || !email.includes(".")) {
            alert("Enter a valid email.");
            e.preventDefault();
            return;
        }

        if (phone.length < 10) {
            alert("Enter a valid phone number.");
            e.preventDefault();
            return;
        }

        alert("Message sent successfully!");
    });
}


// =============================
// LOGIN STATE HANDLING
// (Front-end only)
// =============================
// const beforeLogin = document.getElementById("beforeLogin");
// const afterLogin = document.getElementById("afterLogin");

// // Check login state from localStorage
// if (localStorage.getItem("loggedIn") === "true") {
//     beforeLogin.style.display = "none";
//     afterLogin.style.display = "block";
// } else {
//     beforeLogin.style.display = "block";
//     afterLogin.style.display = "none";
// }


// =============================
// LOGOUT
// =============================
const logoutButton = document.querySelector(".logout");

if (logoutButton) {
    logoutButton.addEventListener("click", function () {
        localStorage.removeItem("loggedIn");
        alert("Logged out!");
    });
}


// =============================
// TEMP DEMO LOGIN LOGIC
// use until PHP backend done
// =============================
// if (window.location.href.includes("login.html")) {

//     let loginForm = document.querySelector("form");

//     loginForm.addEventListener("submit", function (e) {
//         e.preventDefault();

//         let email = loginForm.querySelector("input[type=email]").value.trim();
//         let password = loginForm.querySelector("input[type=password]").value.trim();

//         if (email === "" || password === "") {
//             alert("Please fill all fields");
//             return;
//         }

//         // Demo login success
//         localStorage.setItem("loggedIn", "true");
//         alert("Login Successful!");
//         window.location.href = "index.html";
//     });
// }
