
let count = 0;
function increment() {
  count++;
  document.getElementById("count").innerText = count;
}
function decrement() {
  count--;
  document.getElementById("count").innerText = count;
}

// BMI Calculator
function calculateBMI() {
  const height = parseFloat(document.getElementById("height").value);
  const weight = parseFloat(document.getElementById("weight").value);
  const result = document.getElementById("bmiResult");

  if (!height || !weight) {
    result.innerText = "Please enter both height and weight.";
    return;
  }

  const bmi = weight / ((height / 100) ** 2);
  result.innerText = `Your BMI is ${bmi.toFixed(2)}`;
}


function changeTextColor() {
  const color = document.getElementById("colorInput").value;
  const box = document.getElementById("colorBox");
  box.style.color = color;
}


function validateForm() {
  const password = document.getElementById("password").value;
  const confirm = document.getElementById("confirmPassword").value;
  const msg = document.getElementById("strengthMsg");

  const hasNumber = /\d/.test(password);
  const hasLower = /[a-z]/.test(password);
  const hasUpper = /[A-Z]/.test(password);
  const hasSpecial = /[!]/.test(password);

  
  if (password.length < 8) {
    msg.style.color = "red";
    msg.textContent = "Password must be at least 8 characters.";
    return false;
  }


  let strength = 0;
  if (hasNumber) strength++;
  if (hasLower) strength++;
  if (hasUpper) strength++;
  if (hasSpecial) strength++;

  if (strength <= 2) {
    msg.style.color = "orange";
    msg.textContent = "Weak password.";
    return false;
  } else if (strength === 3) {
    msg.style.color = "blue";
    msg.textContent = "Medium strength password.";
    
  } else {
    msg.style.color = "green";
    msg.textContent = "Strong password.";
  }

  if (password !== confirm) {
    msg.style.color = "red";
    msg.textContent = "Passwords do not match.";
    return false;
  }

  alert("Success! Form submitted.");
  return true;
}




