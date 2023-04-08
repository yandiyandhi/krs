// Scroll 
const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function () {
    console.log(window.scrollY);
});

// Form Login
const signup = document.getElementById('signup');
const signin = document.getElementById('signin');
const container = document.getElementById("container");

signup.addEventListener('click', () => {
    container.classList.add('right-panel-active');
})
signin.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
})