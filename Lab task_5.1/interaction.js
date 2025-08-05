document.getElementById("courseForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const age = document.getElementById("age").value.trim();

    if (name === "") {
        alert("Full Name is required.");
        return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    if (age === "" || isNaN(age) || Number(age) < 10) {
        alert("Please enter a valid age (10 or older).");
        return;
    }

    alert("Form submitted successfully!");
});
