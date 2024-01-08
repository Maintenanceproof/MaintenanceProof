const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const policyBox = document.getElementById('policyBox');




const acceptBtn = document.getElementById('accept');



registerBtn.addEventListener('click', () => {
    
    container.classList.add("active");
    policyBox.style.visibility = "visible";
 
});


loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
    
});

