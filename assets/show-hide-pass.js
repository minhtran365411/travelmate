//JVScript toggle show hide password
const passField = document.querySelector(".form-group input[type='password']");
const toggleBtn = document.querySelector(".form-group i");

toggleBtn.onclick = () =>{
  if(passField.type === "password") {
    passField.type = "text";
    toggleBtn.classList.add("active");
  } else {
    passField.type = "password";
    toggleBtn.classList.remove("active");
  }
}

const passConfirmField = document.querySelector(".confirm input[type='password']");
const toggleConfirmBtn = document.querySelector(".confirm i");

toggleConfirmBtn.onclick = () =>{
  if(passConfirmField.type === "password") {
    passConfirmField.type = "text";
    toggleConfirmBtn.classList.add("active");
  } else {
    passConfirmField.type = "password";
    toggleConfirmBtn.classList.remove("active");
  }
}