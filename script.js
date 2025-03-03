document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    let isValid = true;

    // Get input values
    const username = document.getElementById("username");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirmPassword");

    // Clear previous errors
    document.querySelectorAll(".error").forEach(error => error.innerText = "");

    // Username validation
    if (username.value.trim() === "") {
        showError(username, "Username is required");
        isValid = false;
    }

    // Email validation
    if (!validateEmail(email.value)) {
        showError(email, "Invalid email format");
        isValid = false;
    }

    // Password validation
    if (password.value.length < 6) {
        showError(password, "Password must be at least 6 characters");
        isValid = false;
    }

    // Confirm Password validation
    if (password.value !== confirmPassword.value) {
        showError(confirmPassword, "Passwords do not match");
        isValid = false;
    }

    // If all validations pass, submit the form
    if (isValid) {
        alert("Registration Successful!");
        document.getElementById("registerForm").reset();
    }
});

// Function to display error message
function showError(input, message) {
    input.nextElementSibling.innerText = message;
}

// Function to validate email format
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevents form submission

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let errorMessage = document.getElementById("error-message");

    // Simple validation
    if (username === "admin" && password === "1234") {
        alert("Login Successful!");
        window.location.href = "dashboard.html"; // Redirect to another page
    } else {
        errorMessage.textContent = "Invalid username or password!";
    }
});
