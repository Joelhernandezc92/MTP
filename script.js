const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const regiserLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

regiserLink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=>{
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=>{
    wrapper.classList.remove('active-popup');
});

function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}

btnPopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');

    const emailInput = document.querySelector('.form-box.login input[type="email"]');
    const emailError = document.querySelector('#email-error-login');

    emailInput.addEventListener('blur', () => {
        const emailValue = emailInput.value;

        if (!validateEmail(emailValue)) {
            emailError.textContent = 'Por favor, ingrese un correo electrónico válido.';
        } else {
            emailError.textContent = '';
        }
    });
});

regiserLink.addEventListener('click', () => {
    wrapper.classList.add('active');

    const emailInput = document.querySelector('.form-box.register input[type="email"]');
    const emailError = document.querySelector('#email-error-register');

    emailInput.addEventListener('blur', () => {
        const emailValue = emailInput.value;

        if (!validateEmail(emailValue)) {
            emailError.textContent = 'Por favor, ingrese un correo electrónico válido.';
        } else {
            emailError.textContent = '';
        }
    });
});
