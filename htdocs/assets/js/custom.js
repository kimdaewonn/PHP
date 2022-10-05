const loginBtn = document.querySelector(".loginBtn");
const loginPopup = document.querySelector(".login__popup");
const closeBtn = document.querySelector(".btn-close");

loginBtn.addEventListener("click", ()=>{
    loginPopup.classList.add("open");
})
closeBtn.addEventListener("click", ()=>{
    loginPopup.classList.remove("open");
})